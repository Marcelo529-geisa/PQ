<?php namespace Fede\Afirmaciones\Components;

use Cms\Classes\ComponentBase;
use Fede\Estudios\Models\Afirma;

use Fede\Estudios\Controllers\Afirma as AfirmaController; 


class Afirmaciones extends ComponentBase
{

    public function componentDetails(){
        return [
            'name' => 'Update Afirmaciones Form',
            'description' => 'Update Afirmaciones form'
        ];
    }
    public function onRun($id = null)
    {
        
        $formController = new AfirmaController();
        $config = $formController->makeConfig('$/fede/estudios/models/afirma/fields.yaml');

        //$config->model = new \Fede\Estudios\Models\Estudio;  
        $config->model =  \Fede\Estudios\Models\Afirma::find($this->param('id'));  
        $widget = $formController->makeWidget('Backend\Widgets\Form', $config);
        $widget->bindToController($formController);

        $this->page['widget'] = $widget;
    
      
    }
}
