<?php namespace Fede\Estudios\Components;

use Cms\Classes\ComponentBase;
use Input;
use Validator;
use Redirect;
use ValidationException;
use Fede\Estudios\Models\Estudio as Estudio;

use Fede\Estudios\Models\Afirma as Afirma;
use Fede\Estudios\Controllers\Afirma as AfirmaController; 
use Flash;
use Auth;


class AfirmaDeArch extends ComponentBase
{

    public function componentDetails(){
        return [
            'name' => 'Crea N Afirmaciones',
            'description' => 'Crea afirma desde archivo'
        ];
    }
    public function onRun($id = null)
    {
        $estudio_dat=Estudio::find($this->param('id'));
        $this->page['estudio_dat']=$estudio_dat;
       /*
        $formController = new AfirmaController();
        $config = $formController->makeConfig('$/fede/estudios/models/afirma/fields.yaml');

        //$config->model = new \Fede\Estudios\Models\Estudio;  
        $config->model = new  \Fede\Estudios\Models\Afirma;  
        $widget = $formController->makeWidget('Backend\Widgets\Form', $config);
        $widget->bindToController($formController);

        $this->page['widget'] = $widget;
    */
      
    }
    public function onSave()
    {
        
        $texto=Input::get('texto');
        $texto_en=Input::get('texto_en');

        
        $elementos= explode(PHP_EOL, $texto);
        //$elementos_en= explode(PHP_EOL, $texto_en);
        foreach ($elementos as $key=>$afirmacion){
            if ($afirmacion){
                $nuevo_elemento= new Afirma();
                

                $nuevo_elemento->texto=$afirmacion;
                
                $nuevo_elemento->estudio_id=$this->param('id');
                $nuevo_elemento->translateContext('es');

                $nuevo_elemento->texto=$afirmacion;
                $nuevo_elemento->translateContext('en');
                $nuevo_elemento->texto=$afirmacion;
               
                $nuevo_elemento->save();
            /*  if (@$elementos_en[$key]){
                    $nuevo_elemento->translateContext('en');
                    $nuevo_elemento->texto=$elementos_en[$key];
                    $nuevo_elemento->save();    
                }
            */    
            }
        }

       
        

        
        Flash::success('Afirmaciones creadas con mucho estilo!');

        return Redirect::to('afirmaciones/'.$this->param('id'));
        
    }


}
