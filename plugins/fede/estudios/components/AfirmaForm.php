<?php namespace Fede\Estudios\Components;

use Cms\Classes\ComponentBase;
use Input;
use Validator;
use Redirect;
use ValidationException;
use Fede\Estudios\Models\Afirma;
use Fede\Estudios\Controllers\Afirma as AfirmaController; 
use Flash;
use Auth;


class AfirmaForm extends ComponentBase
{

    public function componentDetails(){
        return [
            'name' => 'Create Afirmacion Form',
            'description' => 'Create afirmacion form'
        ];
    }
    public function onRun($id = null)
    {
       
        $formController = new AfirmaController();
        $config = $formController->makeConfig('$/fede/estudios/models/afirma/fields.yaml');

        //$config->model = new \Fede\Estudios\Models\Estudio;  
        $config->model = new  \Fede\Estudios\Models\Afirma;  
        $widget = $formController->makeWidget('Backend\Widgets\Form', $config);
        $widget->bindToController($formController);

        $this->page['widget'] = $widget;
    
      
    }
    public function onSave()
    {
        $afirma= new Afirma();

        $afirma->texto=Input::get('texto');
        

        
        $afirma->estudio_id=$this->param('id');
        
        $afirma->save();
        Flash::success('Pagina creada felizmente');

        return Redirect::to('/afirmaciones/'.$this->param('id'));
        
    }


}
