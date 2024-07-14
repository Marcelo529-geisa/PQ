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


class FrontForm extends ComponentBase
{

    public function componentDetails(){
        return [
            'name' => 'Front Form',
            'description' => 'Lleva en back form al front'
        ];
    }
    public function onRun()
    {
      
        
         // New back-end form with the context of 'frontend'
        $formController = new EstudioController();
        
        $formController->create('frontend');
        $formController->makeLists();
        foreach ($formController->getAssetPaths() as $type => $assets) {
            foreach ($assets as $asset){
                $this->{'add' . ucfirst($type)}($asset);
            }
        }
        // Append the entryController to the page
        $this->page['palos'] = $formController;

        // Add backend styles to the form

           // form's assets loading
           $this->addCss('http://localhost/PQ2/modules/system/assets/ui/storm.css', 'core');
           $this->addCss('http://localhost/PQ2/modules/backend/assets/css/october.css', 'core');
           $this->addCss('http://localhost/PQ2/modules/backend/assets/css/controls.css', 'core');
           $this->addCss('http://localhost/PQ2/modules/backend/formwidgets/repeater/assets/css/repeater.css', 'core');
           $this->addJs('http://localhost/PQ2/modules/system/assets/js/framework.extras.js', 'core');
           $this->addJs('http://localhost/PQ2/modules/backend/assets/js/october-min.js', 'core');
           $this->addJs('http://localhost/PQ2/modules/backend/widgets/form/assets/js/october.form.js', 'core');
           $this->addJs('http://localhost/PQ2/modules/backend/formwidgets/repeater/assets/js/repeater.js', 'core');
        
    }
    public function onSave()
    {
        return ['error' => Estudio::insert(Input::all())];
    }


}
