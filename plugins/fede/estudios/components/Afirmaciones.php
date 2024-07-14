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

use Session;
class Afirmaciones extends ComponentBase
{

    public function componentDetails(){
        return [
            'name' => 'Update Afirmacion Form',
            'description' => 'update afirmacion form'
        ];
    }
    public function onRun($id = null)
    {        $afirma=  \Fede\Estudios\Models\Afirma::find($this->param('id'));
        $afirma->translateContext('es');
        $this->page['espanol']=$afirma->texto;
        $afirma->translateContext('en');
        $this->page['ingles']=$afirma->texto;
        $this->page['estudio_id']=Session::get('estudio-id');
        
        /*
        $formController = new AfirmaController();
        
        $formController->create('frontend');
        //$formController->makeForm();
        foreach ($formController->getAssetPaths() as $type => $assets) {
            foreach ($assets as $asset){
                $this->{'add' . ucfirst($type)}($asset);
            }
        }
        // Append the entryController to the page
        $this->page['palos'] = $formController;

        // Add backend styles to the form
/*
           // form's assets loading
           $this->addCss('http://localhost/PQ2/modules/system/assets/ui/storm.css', 'core');
           $this->addCss('http://localhost/PQ2/modules/backend/assets/css/october.css', 'core');
           $this->addCss('http://localhost/PQ2/modules/backend/assets/css/controls.css', 'core');
           $this->addCss('http://localhost/PQ2/modules/backend/formwidgets/repeater/assets/css/repeater.css', 'core');
           $this->addJs('http://localhost/PQ2/modules/system/assets/js/framework.extras.js', 'core');
           $this->addJs('http://localhost/PQ2/modules/backend/assets/js/october-min.js', 'core');
           $this->addJs('http://localhost/PQ2/modules/backend/widgets/form/assets/js/october.form.js', 'core');
           $this->addJs('http://localhost/PQ2/modules/backend/formwidgets/repeater/assets/js/repeater.js', 'core');
        
       
        $formController = new AfirmaController();

        $config = $formController->makeConfig('$/fede/estudios/models/afirma/fields.yaml');

        //$config->model = new \Fede\Estudios\Models\Estudio;  
        $config->model =  \Fede\Estudios\Models\Afirma::find($this->param('id'));  
        $widget = $formController->makeWidget('Backend\Widgets\Form', $config);
        $widget->bindToController($formController);
        $formController_en = new AfirmaController();
        $config_en = $formController_en->makeConfig('$/fede/estudios/models/afirma/fields.yaml');

        $traduccion =  \Fede\Estudios\Models\Afirma::find($this->param('id'));
        $traduccion->translateContext('es');  
        

        $traduccion->translateContext('en');  
       /*  foreach ($formController->getAssetPaths() as $type => $assets) {
            foreach ($assets as $asset){
                $this->{'add' . ucfirst($type)}($asset);
            }}
            $this->addCss('http://localhost/PQ2/modules/backend/widgets/mediamanager/assets/css/mediamanager.css?v473', 'core');
        
            $this->addCss('http://localhost/PQ2/plugins/rainlab/translate/assets/css/multilingual.css?v1.9.2', 'core');
            $this->addCss('http://localhost/PQ2/plugins/rainlab/translate/assets/css/multilingual-v1.css?v1.9.2', 'core');
            $this->addJs('http://localhost/PQ2/modules/backend/widgets/mediamanager/assets/js/mediamanager-browser-min.js?v473', 'core');
            $this->addJs('http://localhost/PQ2/modules/backend/widgets/form/assets/js/october.form.js?v473', 'core');
            $this->addJs('http://localhost/PQ2/plugins/rainlab/translate/assets/js/multilingual.js?v1.9.2', 'core');

        $this->page['widget'] = $widget;
        //$this->page['widget2'] = $widget2;
*/
      
    }
    public function onUpdate()
    {
        $data = post();
        
        $afirma=  \Fede\Estudios\Models\Afirma::find($this->param('id'));
        $afirma->translateContext('es');
        $afirma->texto=$data['espanol'];
        $afirma->save();
        $afirma->translateContext('en');
        $afirma->texto=$data['ingles'];
        $afirma->save();
        Flash::success('Afirmacion Modificada!');
        
        //return Redirect::back();
    }


}
