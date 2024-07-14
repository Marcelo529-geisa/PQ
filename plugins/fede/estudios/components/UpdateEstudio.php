<?php namespace Fede\Estudios\Components;

use Cms\Classes\ComponentBase;
use Input;
use Validator;
use Redirect;
use ValidationException;
use Fede\Estudios\Models\Estudio as Estudio;
use Fede\Estudios\Controllers\Estudios as EstudioController; 
use Flash;
use Auth;


class UpdateEstudio extends ComponentBase
{

    public function componentDetails(){
        return [
            'name' => 'Update Form',
            'description' => 'form actualizar'
        ];
    }
    public function onRun($id = null)
    {
        $estudio=Estudio::find($this->param('id'));  
        $this->page['estudio']=$estudio;
        /*
        $formController = new EstudioController();
        $config = $formController->makeConfig('$/fede/estudios/models/estudio/fields.yaml');

        //$config->model = new \Fede\Estudios\Models\Estudio;  
        $config->model =  \Fede\Estudios\Models\Estudio::find($this->param('id'));  
        $widget = $formController->makeWidget('Backend\Widgets\Form', $config);
        $widget->bindToController($formController);

        $this->page['widget'] = $widget;
    */
      
    }
    public function onUpdate()
    {
        $data = post();
        $estudio=  \Fede\Estudios\Models\Estudio::find($this->param('id'));
        $estudio->update($data);
        Flash::success('Estudio actualizado');
        
        //return Redirect::back();
    }


}
