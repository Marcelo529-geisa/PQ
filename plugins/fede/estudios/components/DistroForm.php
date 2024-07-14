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


class DistroForm extends ComponentBase
{

    public function componentDetails(){
        return [
            'name' => 'Distro Form',
            'description' => 'Columnas distro'
        ];
    }
    public function onRun($id = null)
    {
        $formController = new EstudioController();
        $config = $formController->makeConfig('$/fede/estudios/models/estudio/fields-distro.yaml');

        //$config->model = new \Fede\Estudios\Models\Estudio;  
        $config->model = new \Fede\Estudios\Models\Estudio;  
        $widget = $formController->makeWidget('Backend\Widgets\Form', $config);
        $widget->bindToController($formController);
   // form's assets loading
   $this->addCss('http://localhost/PQ2/modules/system/assets/ui/storm.css', 'core');
   $this->addCss('http://localhost/PQ2/modules/backend/assets/css/october.css', 'core');
   $this->addCss('http://localhost/PQ2/modules/backend/assets/css/controls.css', 'core');
   $this->addCss('http://localhost/PQ2/modules/backend/formwidgets/repeater/assets/css/repeater.css', 'core');
   $this->addJs('http://localhost/PQ2/modules/system/assets/js/framework.extras.js', 'core');
   $this->addJs('http://localhost/PQ2/modules/backend/assets/js/october-min.js', 'core');
   $this->addJs('http://localhost/PQ2/modules/backend/widgets/form/assets/js/october.form.js', 'core');
   $this->addJs('http://localhost/PQ2/modules/backend/formwidgets/repeater/assets/js/repeater.js', 'core');
   foreach ($formController->getAssetPaths() as $type => $assets) {
    foreach ($assets as $asset){
        $this->{'add' . ucfirst($type)}($asset);
    }
}
        $this->page['widget'] = $widget;
    
      
    }
    public function onSave()
    {
        dd(Input::all());
      
    }


}
