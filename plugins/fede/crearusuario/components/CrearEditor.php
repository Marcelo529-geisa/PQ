<?php namespace Fede\CrearUsuario\Components;

use Cms\Classes\ComponentBase;
use Input;
use Mail;
use Validator;
use Redirect;
use ValidationException;
use Auth;
use Flash;
use RainLab\User\Models\User as User;
use Fede\Estudios\Models\Estudio as Estudio;
use System\Models\File;



class CrearEditor extends ComponentBase
{

    public function componentDetails(){
        return [
            'name' => 'Crear Editor',
            'description' => 'Simple Crear Editor'
        ];
    }


    public function onSend(){
        $data=post();
        $rules = [
            'name' => 'required|min:5',
            'email' => 'required|email',

        ];

        $validator = Validator::make($data, $rules);

        if($validator->fails()){
            throw new ValidationException($validator);
            Flash::success('Usuario invalidadeo');
            } 
        else 
            {
                $usuario_actual=Auth::getUser();

            $posible_user=User::where('email',Input::get('email'))->get();
            // dd($posible_user->first()->groups()->pluck('id')->toArray());
            
            if ($posible_user->count()>0)
                 {//dd($posible_user->first()->groups()->pluck('id')->toArray());
                     //dd(in_array(1,$posible_user->first()->groups()->pluck('id')->toArray()));
                 if (!in_array(4,$posible_user->first()->groups()->pluck('id')->toArray())){
                     $posible_user->first()->groups()->attach(4);
                    }
                 

                    $this->enviarMail($posible_user->first(),null);

                    Flash::success('Administrador agregado felizmente!');
                   // return Redirect::to('/actualizar-user/' . $posible_user->first()->id);
                }
            else
                {
                    $passw='changeme';

            $user = Auth::register([
                'name' =>  Input::get('name'),
                'email' =>  Input::get('email'),
                
                'password' => $passw,
                'password_confirmation' => 'changeme',
            ],true);
            $user->groups()->attach(4);
            $user->bio = $data['bio'];
            if (Input::file('avatar') != "")
                $user->avatar = Input::file('avatar');
            $user->save();
            Auth::login($usuario_actual);
            $this->enviarMail($user,$passw);

           
            Flash::success('Editor agregado felizmente!');
            return Redirect::to('/actualizar-user/' . $user->id);
                }
             }
        

        

    
    }
    public function enviarMail($user,$pass){
        $remitente=Auth::getUser();
        $vars = ['user' => $user,'pass' => $pass , 'remitente'=>$remitente];
        
            Mail::send('fede.contact::mail.nuevo_usuario', $vars, function($message) use ($vars){

                $message->to($vars['user']->email, 'Fede');
                $message->subject('Invitación de '.$vars['remitente']->name);

            });
    }
    public function onImageUpload(){
        $image= Input::all();
        $file = (new File())->fromPost($image['foto']);
        return['#imageResult'=>'<img src="'.$file->getThumb(200,200,['mode'=>'crop']).'" data-request="onImageUpload"  data-request-files data-request-flash style="width: 200px; height: auto;" alt="" >'];
    }

}