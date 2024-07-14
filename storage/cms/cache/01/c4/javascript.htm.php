<?php 
use October\Rain\Parse\Syntax\Parser as SyntaxParser;
use RainLab\Translate\Classes\Translator;
class Cms66818144c84c6752359483_721f508f1a24d824e172f345d6d52aabClass extends Cms\Classes\PageCode
{
public function onInit() {
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
    
        
    $myfile = fopen("/var/www/html/themes/baba-adminlte/assets/assets4/src/htmlqB.js", "r") or die("Unable to open file!");
    $contenido= fread($myfile,filesize("/var/www/html/themes/baba-adminlte/assets/assets4/src/htmlqB.js"));

    fclose($myfile);
    

$syntax = SyntaxParser::parse($contenido);
$respuesta= $syntax->render(['websiteName' => $this->param('id'),'idioma'=>$idioma]);
//return Response::make($respuesta);//->header('Content-Type','text/html');
echo $respuesta;
//return Response::make($respuesta)->header('Content-Type','text/javascript');
}
}
