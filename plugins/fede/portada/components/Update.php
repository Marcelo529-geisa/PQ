<?php namespace Fede\Portada\Components;

use Cms\Classes\ComponentBase;
use Input;
use Validator;
use Redirect;
use ValidationException;
use Fede\Portada\Models\Portada;
use Flash;
use Auth;
use System\Models\File;
class Update extends ComponentBase
{

    public function componentDetails(){
        return [
            'name' => 'Update Form',
            'description' => 'Simple Updtasd form'
        ];
    }


    public function onSend(){
        $portada = Portada::find( Input::get('id'));
        
        $data=[];
        //$data['titulo']=Input::get('titulo');
        $portada->titulo=Input::get('titulo');
        if (Input::file('foto')!="")
            $portada->update(['fileupload1'=>Input::file('foto')]);
        
        Flash::success('portada actualizadao');


    }

    public function onImageUpload(){
        $image= Input::all();
        $file = (new File())->fromPost($image['foto']);
        return['#imageResult'=>'<img src="'.$file->getThumb(200,200,['mode'=>'crop']).'" data-request="onImageUpload"  data-request-files data-request-flash style="width: 200px; height: auto;" alt="" >'];
    }

}