<?php

namespace Fede\CrearUsuario\Components;

use Cms\Classes\ComponentBase;
use Input;
use Mail;
use Validator;
use Redirect;
use ValidationException;
use Auth;
use Flash;
use System\Models\File;

use RainLab\User\Models\User as User;
use Fede\Estudios\Models\Estudio as Estudio;



class ActualizarUsuario extends ComponentBase
{

    public function componentDetails()
    {
        return [
            'name' => 'Actualizar Usuario',
            'description' => 'Simple Actualizar Usuario'
        ];
    }
    public function onRun($id = null)
    {
        $usuario =  User::find($this->param('id'));

        $this->page['userio'] = $usuario;
    }

    public function onSend()
    {
        $data = post();
        $rules = [
            'name' => 'required|min:5',
            'email' => 'required|email',
            'id' => 'required',

        ];

        $validator = Validator::make($data, $rules);

        if ($validator->fails()) {
            throw new ValidationException($validator);
            Flash::success('Usuario invalidadeo');
        } else {
            $user = User::find(Input::get('id'));
            $user->name =  Input::get('name');
            $user->email =  Input::get('email');
            $user->bio =  Input::get('bio');
            $user->save();
            if (Input::file('avatar') != "")
                $user->avatar = Input::file('avatar');
            $user->save();

            Flash::success('Usuario actualizado');
        }
    }
    public function onImageUpload()
    {
        $image = Input::all();
        $file = (new File())->fromPost($image['avatar']);
        return ['#imageResult' => '<img src="' . $file->getThumb(200, 200, ['mode' => 'crop']) . '" data-request="onImageUpload"  data-request-files data-request-flash style="width: 200px; height: auto;" alt="" >'];
    }
}
