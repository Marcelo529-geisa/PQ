<?php namespace Fede\Estudios\Components;

use Cms\Classes\ComponentBase;
use Input;
use Validator;
use Redirect;
use ValidationException;
use Fede\Estudios\Models\Estudio;
use Fede\Estudios\Controllers\Estudios as EstudioController; 
use Backend\Formwidgets\Repeater as Repite;
use Backend\Classes\FormField;
use Flash;
use Auth;


class FormDistribucion extends ComponentBase
{
    public $numero=0;

    public function componentDetails(){
        return [
            'name' => 'FormDistribucion',
            'description' => 'Form distrobuc'
        ];
    }
    public function onRun($id = null)
    {
        $formController = new EstudioController();
        $config = $formController->makeConfig('$/fede/estudios/models/estudio/fields-distro.yaml');

        //$config->model = new \Fede\Estudios\Models\Estudio;  
        $config->model =  \Fede\Estudios\Models\Estudio::find($this->param('id'));
        $config->alias = 'Form';  
        $widget = $formController->makeWidget('Backend\Widgets\Form', $config);
        $widget->bindToController();
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
    public function onAddItem()

    {   $data = post();

        // Check storage/logs/system.log
        if(isset($data['distribucion']))
            $contador=count($data['distribucion']);
        else
            $contador=0;
        $groupCode = post('_repeater_group');
        

        
        $itemContainer = '@#Repeater-FormDistribucion-items-distribucion';
        return [
            $itemContainer => $this->renderPartial('@_repeater_item.htm',['numero'=>$contador])
        ];
         
      
    }
    public function onUpdate()
    {
        $data = post();
        //trace_log(json_encode($data['distribucion']));
        
        $estudio=  \Fede\Estudios\Models\Estudio::find($this->param('id'));
       
        $estudio->distribucion= $data['distribucion'];
        $estudio->save();
        Flash::success('Estudio creado');
        
        return Redirect::back();
        
    }
    public function onRemoveItem()
    {
        $data = post();

        
        $estudio=  \Fede\Estudios\Models\Estudio::find($this->param('id'));
        unset ($data['distribucion'][$data['_repeater_index']]);

        
        $estudio->distribucion= $data['distribucion'];
        $estudio->save();
        Flash::success('Estudio creado');
        
        return Redirect::back();
        
    }

}
