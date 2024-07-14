<?php namespace Fede\Estudios\Components;

use Cms\Classes\ComponentBase;
use Input;
use Validator;
use Redirect;
use ValidationException;
use Fede\Estudios\Models\Estudio;
use Fede\Estudios\Controllers\Estudios as EstudioController; 

use Flash;
use Auth;


class Lista extends ComponentBase
{

    public function componentDetails(){
        return [
            'name' => 'Listar Estudios ',
            'description' => 'listar estudios modo backend'
        ];
    }


    public function onSave(){
        
    }
    public function onRun(){
       // $usuario=Auth::getUser()->estudios();
        //foreach ($usuario->estudios()->get() as $key => $value)
          
        $formController = new EstudioController();
        $config = $formController->makeConfig('$/fede/estudios/models/estudio/columns2.yaml');
        //die("chau");
        $config->model = new \Fede\Estudios\Models\Estudio;
        
      
        $config->recordUrl = 'editar-estudio/:id';
        $widget = $formController->makeWidget('Backend\Widgets\Lists', $config);
       
        $this->page['widget'] = $widget;
    }
    

}