<?php namespace Fede\Portada\Components;

use Cms\Classes\ComponentBase;
use Input;
use Validator;
use Redirect;
use ValidationException;
use Fede\Portada\Models\Portada;
use Flash;
use Auth;


class PortadaForm extends ComponentBase
{

    public function componentDetails(){
        return [
            'name' => 'Portada Form',
            'description' => 'Simple Portada form'
        ];
    }


    public function onSave(){
        $portada= new Portada();
        $portada->titulo=Input::get('titulo');
        $portada->fileupload1=Input::file('foto');
        
        $portada->save();
        Flash::success('portada creado');
        return Redirect::back();
    }

}