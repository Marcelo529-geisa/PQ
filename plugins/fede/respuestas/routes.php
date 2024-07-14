<?php
use  Fede\Estudios\Models\Afirma;
use  Fede\Estudios\Models\Estudio;

use Fede\Estudios\Models\Respuesta as Responde;
use Fede\Portada\Models\Lenguages as Language;


use RainLab\User\Models\UserGroup as UserGroup;
use RainLab\User\Models\User as User;

use October\Rain\Parse\Syntax\Parser as SyntaxParser;
use Fede\Portada\Models\Lenguages as Lenguages;
use RainLab\Translate\Classes\Translator;

Route::get('/punto_dat/{id}', function ($id) {

	
    $jotason=  array();
	$respuestas=Responde::where('estudios_id',$id)->get();
	
    $estudio= Estudio::find( $id);
	//$distribution = json_decode($estudio->distribucion);
	$affirmationsCount = count($estudio->afirma);
	
	$answersCount=count($respuestas);
	$textToExport = "  0" . ($answersCount < 10 ? ("  " . $answersCount) : (" " . $answersCount)) . ($affirmationsCount < 10 ? ("  " . $affirmationsCount) : (" " . $affirmationsCount)) . " " . $estudio->titulo . PHP_EOL;
	$lista=$textToExport;

	$range = (int)(count($estudio->distribucion) / 2);
	$textToExport .= " -" . $range . "  " . $range;
	$distributionMiddlePositionLeft = 7;
        $distributionMiddlePositionRight = 14;
	$zerosQuantityLeft = $distributionMiddlePositionLeft - $range - 1;
	$zerosQuantityRight = $distributionMiddlePositionRight - $range - 1;

	for ($i = 0; $i < $zerosQuantityLeft; $i++) {
		$textToExport .= "  0";
	}
	for ($i = 0; $i < count($estudio->distribucion); $i++) {
		$textToExport .= "  " . $estudio->distribucion[$i]['elementos'];
	}
	for ($i = 0; $i < $zerosQuantityRight; $i++) {
		$textToExport .= "  0";
	}
	$textToExport .= "\n";
	
	$lista=$textToExport;
	
	foreach ($respuestas as $resp){

		$row=str_pad ($resp['user_id'],10," ",STR_PAD_RIGHT);
		$datos= json_decode($resp['respuestas']);
		
		$v=$datos->sort;
            
            $v = explode('|', $v);
					for($i=0; $i<count($v); $i++) {
						//if(empty($v[$i])) continue;
                        if ($v[$i] < 0) 

                            $row .= $v[$i];
                        else
                            $row .= " ".$v[$i];
					}
				 //$row.= PHP_EOL;
				 $row.= "\r\n";
				 $lista.= $row;
	
	}
	$filename="/var/www/html/resultados.dat";
	$file = fopen ($filename, 'w');
	fwrite($file, $lista);
	fclose($file);
	return Response::download($filename)->deleteFileAfterSend(true);
	
	//return $this->exportFile("resultados.dat",$lista);

    //echo json_encode ($estudio_colabor);

});
Route::get('/codigos/{id}', function ($id) {


    $estudio= Estudio::find( $id);
    $usuarios_estudio=$estudio->users()->get();
    $todos_colabor = UserGroup::find(1)->users()->pluck('id');
    $estudio_colabor = $usuarios_estudio ->whereIn('id',$todos_colabor)->pluck('name')->toArray();


    echo json_encode ($estudio_colabor);

});
Route::post('/respuestas/{id}', function ($id) {
  
  $usuario=  User::where('name',post('uid'))->get()->pluck('id')->first();
  $respuestas= post('respuestas');
  $estudio =   post('status');
  $responde= new Responde();
  $responde->user_id=$usuario;
  $responde->estudios_id=$estudio;
  $responde->respuestas=$respuestas;
  $responde->save();
  

});
Route::post('/exe/{id}', function ($id) {

    session_start();


    define('EXPORT_MAIL', 'name@yourdomain.com');
    define('EXPORT_DIR', dirname(__FILE__).'/data/');

// define status
define('STATUS_OK',					1);
define('STATUS_LOGIN_FAILED',		-1);
define('STATUS_EXPORT_FAILED',		-2);

// ===================================================

// disable cache
if(!headers_sent()) {
	header("Expires: Mon, 26 Jul 1997 05:00:00 GMT"); // expired in a past
	header("Last-Modified: " . gmdate("D, d M Y H:i:s") . " GMT"); // always modified
	header("Cache-Control: no-store, no-cache, must-revalidate"); // HTTP/1.1
	header("Cache-Control: post-check=0, pre-check=0", false); // HTTP/1.1
	header("Pragma: no-cache"); // HTTP/1.0
}
$do = isset($_REQUEST['do']) ? strtolower($_REQUEST['do']) : NULL;
if($do == 'login') {

	

    // get uid
$uid = isset($_REQUEST['uid']) ? trim($_REQUEST['uid']) : null;

$_SESSION['usuario']=$uid;
// list of valid user-ids (ids can be stored in a array, a file or in a database)

$url = 'http://plataformaq.unsa.edu.ar/codigos/'.$id;
$data = array('status' => $id);

// use key 'http' even if you send the request to https://...
$options = array(
    'http' => array(
        'header'  => "Content-type: application/x-www-form-urlencoded\r\n",
        'method'  => 'GET',
        'content' => http_build_query($data)
    )
);
$context  = stream_context_create($options);
$result = file_get_contents($url, false, $context);
if ($result === FALSE) { echo "error";    }

//$users = array('fede', 'javier');
$users = json_decode($result);
// user validation
if (in_array($uid, $users)) {
    $status = STATUS_OK;
} else {
    $status = STATUS_LOGIN_FAILED;
}
// print return
//$status = STATUS_LOGIN_FAILED;

echo 'uid='.urlencode($uid).'&status='.$status;

// ===================================================
// SAVE or MAIL
// @param	int	uid		User-id
// @param	str	sort		Values assigned for each statement
// @param	int	npos		Number of positive statments
// @param	int	nneu		Number of neutral statements
// @param	int	nneg		Number of negativ statements
// @param	int	dur0		Required time in seconds (total)
// @param	str	name		Name of the study plus statement-version
// @return	int	sid		Sort-id
// @return	str	status	Status (1=ok)
// ===================================================

} else if($do == 'save' || $do == 'mail') {

	// get data
	$name 			= isset($_REQUEST['name']) ? $_REQUEST['name'] : null;
	$mailto 		= isset($_REQUEST['mailto']) ? $_REQUEST['mailto'] : (defined('EXPORT_MAIL') && EXPORT_MAIL!='' ? EXPORT_MAIL : NULL);

	$d 				= array();
	$d['sid'] 		= null;
	$d['uid'] 		= isset($_REQUEST['uid']) ? str_replace(array(';', '"', '\''), NULL, trim($_REQUEST['uid'])) : null;
	$d['sort'] 		= isset($_REQUEST['sort']) ? str_replace('_', ' ', $_REQUEST['sort']) : null;
	$d['npos'] 		= isset($_REQUEST['npos']) ? (int)$_REQUEST['npos'] : 0;
	$d['nneu'] 		= isset($_REQUEST['nneu']) ? (int)$_REQUEST['nneu'] : 0;
	$d['nneg'] 		= isset($_REQUEST['nneg']) ? (int)$_REQUEST['nneg'] : 0;
	
	foreach(array_reverse($_REQUEST) as $k=>$v) {
		if(preg_match('/^(form|comment)[0-9]{1,3}$/', $k)) {
			$d[$k] = str_replace(array(';', "\n", "\r"), array('.', "\\n", "\\r"), trim($v));
		}
	}

	$d['dur0']		= isset($_REQUEST['dur0']) ? (int)$_REQUEST['dur0'] : 0;
	$d['dur1']		= isset($_REQUEST['dur1']) ? (int)$_REQUEST['dur1'] : 0;
	$d['dur2']		= isset($_REQUEST['dur2']) ? (int)$_REQUEST['dur2'] : 0;
	$d['dur3']		= isset($_REQUEST['dur3']) ? (int)$_REQUEST['dur3'] : 0;
	$d['dur4']		= isset($_REQUEST['dur4']) ? (int)$_REQUEST['dur4'] : 0;
	$d['dur5']		= isset($_REQUEST['dur5']) ? (int)$_REQUEST['dur5'] : 0;
	$d['datetime'] 	= date('Y-m-d H:i:s');
	$jaison=json_encode($d);
	$jaison2=json_encode($_REQUEST);
	$status = STATUS_EXPORT_FAILED;
	

	// save data
	if($do == 'save') {
		

		$uid = isset($_REQUEST['uid']) ? trim($_REQUEST['uid']) : null;

		// list of valid user-ids (ids can be stored in a array, a file or in a database)
	
	

		// list of valid user-ids (ids can be stored in a array, a file or in a database)
        $url = 'http://plataformaq.unsa.edu.ar/respuestas/'.$id;


		$data = array('status' => $id,'uid'=>$_SESSION['usuario'],'respuestas'=>json_encode($_REQUEST));
		
		// use key 'http' even if you send the request to https://...
		$options = array(
			'http' => array(
				'header'  => "Content-type: application/x-www-form-urlencoded\r\n",
				'method'  => 'POST',
				'content' => http_build_query($data)
			)
		);
		$context  = stream_context_create($options);
		$result = file_get_contents($url, false, $context);
        if ($result === FALSE) 
            { echo "errroe"; }
        else {
            $status = STATUS_OK;
        }
		

		$d['sid'] = !empty($d['uid']) ? substr($d['uid'], 0, 8) : date('mdhi'); // better: row id

		
	
		}
	

	// send data via email
	if(defined('EXPORT_MAIL') && EXPORT_MAIL != '') {

		$mbody = '';
		$mbody .= 'Study: '.$name."\n";
		foreach($d as $k=>$v) {
			$mbody .= $k.': '.$v."\n";
		}

		$mbody .= "\n".'Record '.($do=='mail' || ($do=='save' && $status != STATUS_OK) ? 'NOT ' : null).'saved.'."\n";

		$mbody .= "\n".'------------------------------';
		$mbody .= "\n".'Mail generated by FlashQ/PHP';
		$mbody .= "\n".'------------------------------';

		$mheader  = 'From: "FlashQ" <'.EXPORT_MAIL.'>'."\r\n";
		$mheader .= 'MIME-Version: 1.0'."\r\n";
		$mheader .= 'Content-Type: text/plain; charset=iso-8859-1'."\r\n";
		$mheader .= 'Content-Transfer-Encoding: 8bit';

		if(@mail(EXPORT_MAIL, 'FlashQ / '.$name, $mbody, $mheader)) {
			$status = STATUS_OK;
		}
	}

	// print return
	echo 'sid='.$d['uid'].'&status='.$status;
}

});

Route::get('/map/{id}', function ($id) {
    $estudio= Estudio::find( $id);
    //dd($estudio->distribucion);
    $xml_map = new SimpleXMLElement('<?xml version="1.0" encoding="utf-8"?><map></map>');
    $xml_map->addAttribute('version','1.0');
    $xml_map->addAttribute('htmlParse','false');
	$nro_elemento=count($estudio->distribucion);
	
    $primer_id=-1*(int) ($nro_elemento/2);
    foreach ($estudio->distribucion as $key=>$value)
    {  
        //echo "elemontos [$key]:".$value['elementos'];
        
        if ($primer_id<0){
            $color="FFD5D5";
        }
        if ($primer_id==0){
            $color="E9E9E9";
        }
        if ($primer_id>0){
            $color="9FDFBF";
        }
        $col=$xml_map->addChild('column',$value['elementos']);
        $col->addAttribute('id',$primer_id);
        $col->addAttribute('colour',$color);
        $primer_id=$primer_id+1;
    
	}
	
    $xml_file = $xml_map->asXML('/var/www/html/map.xml');
    $myfile = fopen("/var/www/html/map.xml", "r") or die("Unable to open file!");
    $contenido= fread($myfile,filesize("/var/www/html/map.xml"));

    fclose($myfile);

    if($xml_file){

        return Response::make( $contenido)->header('Content-Type', 'text/xml');
    
    
          
    
    }else{
        echo 'XML file generation error.';
    }
    



});
Route::get('/lang/{id}', function ($id) {


	$lenguaje=Lenguages::where('id',$id)->get()->first()->toArray();
	
	


$myfile = fopen("/var/www/html/themes/baba-adminlte/assets/assets4/settings/lang.xml", "r") or die("Unable to open file!");
$contenido= fread($myfile,filesize("/var/www/html/themes/baba-adminlte/assets/assets4/settings/lang.xml"));

fclose($myfile);
$syntax = SyntaxParser::parse($contenido);
$xml_f=$syntax->render($lenguaje);
//echo $xml_f;die('dai');
return Response::make($xml_f)->header('Content-Type', 'text/xml');


});
Route::get('/config/{id}', function ($id) {

	$myfile = fopen("/var/www/html/themes/baba-adminlte/assets/assets4/settings/config.xml", "r") or die("Unable to open file!");
	$contenido= fread($myfile,filesize("/var/www/html/themes/baba-adminlte/assets/assets4/settings/config.xml"));
	
	fclose($myfile);
	$syntax = SyntaxParser::parse($contenido);

	$xml_f=$syntax->render(['estudio'=>$id]);
//echo $xml_f;
	//echo $xml_f;die('dai');
	return Response::make($xml_f)->header('Content-Type', 'text/xml');
	
	
	});
Route::get ('/javascript2/{estudio}', function ($estudio){
	$translator = Translator::instance();
	
    $activeLocale = $translator->getLocale();

    if ($activeLocale=='en')
       {
        $idioma=1;
       }
    if ($activeLocale=='es')
    {
        $idioma=2;

    }    
    dd($idioma);
        
    $myfile = fopen("/var/www/html/themes/baba-adminlte/assets/assets4/src/htmlqB.js", "r") or die("Unable to open file!");
    $contenido= fread($myfile,filesize("/var/www/html/themes/baba-adminlte/assets/assets4/src/htmlqB.js"));

    fclose($myfile);
    

$syntax = SyntaxParser::parse($contenido);
$respuesta= $syntax->render(['websiteName' => $estudio,'idioma'=>$idioma]);

return Response::make($respuesta)->header('Content-Type', 'text/javascript');
});

Route::get('/xml/{id}/{idioma}', function ($id,$idioma) 
{
	
$afirmaciones=Afirma::where('estudio_id',$id)->get();


//creating object of SimpleXMLElement



$xml_statemets = new SimpleXMLElement('<?xml version="1.0" encoding="utf-8"?><statements></statements>');
$xml_statemets->addAttribute('version','1.0');
$xml_statemets->addAttribute('htmlParse','false');
foreach ($afirmaciones as $key=>$value){
	if ($idioma==1)
       {
		$value->translateContext('en');
		
       }
    if ($idioma==2)
    {
        $value->translateContext('es');
		
    }
	
$xml_statemets -> addChild('statement',$value->texto)->addAttribute('id',$key+1);;
}


$xml_file = $xml_statemets->asXML('/var/www/html/statements.xml');
$myfile = fopen("/var/www/html/statements.xml", "r") or die("Unable to open file!");
$contenido= fread($myfile,filesize("/var/www/html/statements.xml"));

fclose($myfile);

//success and error message based on xml creation
if($xml_file){

    return Response::make( $contenido)->header('Content-Type', 'text/xml');


      

}else{
    echo 'XML file generation error.';
}

});


?>