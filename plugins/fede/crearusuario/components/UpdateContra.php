<?php namespace Fede\CrearUsuario\Components;

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



class UpdateContra extends ComponentBase
{

    public function componentDetails(){
        return [
            'name' => 'Update Contra',
            'description' => 'Simple Update Contra'
        ];
    }


    public function onSend(){
        
        $data=post();
        $rules = [
          
            'password'=>'min:8|same:password_confirmation',
        ];

        $validator = Validator::make($data, $rules);

        if($validator->fails()){
            throw new ValidationException($validator);
            Flash::success('Usuario invalidadeo');
        } else {
            $user = User::find(Input::get('id'));
           
           
                $user -> update([
                    'password'=> Input::get('password'),
                    'password_confirmation'=> Input::get('password_confirmation'),
                    
                ]); 
            
            
            //$colab=User::find($user->id);
            if (null!=$this->param('id')){
                $estudio=Estudio::find($this->param('id'));
                $estudio->users()->attach($user->id);
                $estudio->save();
                };
            
            Flash::success('Usuario actualizado correctamente!');
        }
        

        

    
    }
    public function onImageUpload(){
        $image= Input::all();
        $file = (new File())->fromPost($image['avatar']);
        return['#imageResult'=>'<img src="'.$file->getThumb(200,200,['mode'=>'crop']).'" data-request="onImageUpload"  data-request-files data-request-flash style="width: 200px; height: auto;" alt="" >'];
    }

}