<?php namespace Fede\Estudios\Components;

use Cms\Classes\ComponentBase;
use Input;
use Validator;
use Redirect;
use ValidationException;
use Fede\Estudios\Models\Info;
use Flash;
use Auth;


class EditarInfo extends ComponentBase
{

    public function componentDetails(){
        return [
            'name' => 'Editar Info Form',
            'description' => 'Simple editar Info form'
        ];
    }
    public function onRun($id = null)
    { 
        $this->page['ident']=$id;
    }


    public function onSave(){
        
        $estudio= Info::find( Input::get('id'));
        $estudio->update(['titulo'=>Input::get('titulo')]);
        $estudio->update(['etiqueta'=>Input::get('etiqueta')]);
        
        $estudio->update(['cuerpo'=>Input::get('descripcion')]);
        //$estudio->user_id=Auth::getUser()->id;
        
        
        Flash::success('Info acutalizada');
    }

}