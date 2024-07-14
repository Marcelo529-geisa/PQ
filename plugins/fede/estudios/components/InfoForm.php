<?php namespace Fede\Estudios\Components;

use Cms\Classes\ComponentBase;
use Input;
use Validator;
use Redirect;
use ValidationException;
use Fede\Estudios\Models\Info;
use Flash;
use Auth;


class InfoForm extends ComponentBase
{

    public function componentDetails(){
        return [
            'name' => 'Info Form',
            'description' => 'Simple Info form'
        ];
    }


    public function onSave(){
        $data = post();

        $rules = [
            'titulo' => 'required',
            'etiqueta' => 'required|max:10',

        ];

        $validator = Validator::make($data, $rules);

        if ($validator->fails()) {
            throw new ValidationException($validator);
            
        }else
        {
        $info= new Info();
        $info->titulo=Input::get('titulo');
        $info->etiqueta=Input::get('etiqueta');

        $info->cuerpo=Input::get('descripcion');
        $info->estudio_id=Input::get('id');
        
        $info->save();
        Flash::success('Pagina creada felizmente');
        return Redirect::to('/paginas/'.Input::get('id'));

        }
    }

}