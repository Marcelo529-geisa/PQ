<?php namespace Fede\Estudios\Components;

use Cms\Classes\ComponentBase;
use Input;
use Validator;
use Redirect;
use ValidationException;
use Fede\Estudios\Models\Estudio;
use Flash;
use Auth;


class EditarEstudio extends ComponentBase
{

    public function componentDetails(){
        return [
            'name' => 'Editar Estudio Form',
            'description' => 'Simple editar estudios form'
        ];
    }


    public function onSave(){
        
        $estudio= Estudio::find( Input::get('id'));
        $estudio->update(['titulo'=>Input::get('titulo')]);
        $estudio->update(['descripcion'=>Input::get('descripcion')]);
        //$estudio->user_id=Auth::getUser()->id;
        
        
        Flash::success('Estudio acutalizado');
    }

}