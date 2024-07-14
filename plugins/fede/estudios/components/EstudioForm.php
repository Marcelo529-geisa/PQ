<?php namespace Fede\Estudios\Components;

use Cms\Classes\ComponentBase;
use Input;
use Validator;
use Redirect;
use ValidationException;
use Fede\Estudios\Models\Estudio;
use Flash;
use Auth;


class EstudioForm extends ComponentBase
{

    public function componentDetails(){
        return [
            'name' => 'Estudio Form',
            'description' => 'Simple estudios form'
        ];
    }


    public function onSave(){
        $estudio= new Estudio();
        $estudio->titulo=Input::get('titulo');
        $estudio->descripcion=Input::get('descripcion');
        $estudio->user_id=Auth::getUser()->id;
        
        $estudio->save();
        Flash::success('Estudio creado');
        return Redirect::to('/afirmaciones-desde-archivo/'.$estudio->id);
    }
    

}