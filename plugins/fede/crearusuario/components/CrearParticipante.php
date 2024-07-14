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
use RainLab\User\Models\UserGroup as UserGroup;

use Fede\Estudios\Models\Estudio as Estudio;
use System\Models\File;



class CrearParticipante extends ComponentBase
{

    public function componentDetails(){
        return [
            'name' => 'Crear Participante',
            'description' => 'Simple Crear Participante'
        ];
    }


    public function onSend()
        {
    
        $data=post();
        $rules = [
            'name' => 'required|min:5',
            'email' => 'required|email',
            'id'=>'required',

        ];

        $validator = Validator::make($data, $rules);

        if($validator->fails())
            {
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
                if (!in_array(1,$posible_user->first()->groups()->pluck('id')->toArray())){
                    $posible_user->first()->groups()->attach(1);
                    }
                                        

                $estudio=Estudio::find(Input::get('id'));
                $usuarios_estudio=$estudio->users()->get();
                $this->enviarMail($posible_user->first(),null);

        
                $todos_part= UserGroup::find(1)->users()->pluck('id');
                $estudio_part = $usuarios_estudio ->whereIn('id',$todos_part);
                if (!in_array($posible_user->first()->id,$estudio_part->pluck('id')->toArray())){

                $estudio->users()->attach($posible_user->first()->id,['enviado'=>false]);

                //$estudio->users()->find($posible_user->first()->id)->pivot->enviado=false;
                
                $estudio->save();
                }                
                
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
                $user->groups()->attach(1);
                //$colab=User::find($user->id);
                $estudio=Estudio::find(Input::get('id'));
                $estudio->users()->attach($user->id,['enviado'=>false]);
                    //Flash::success($estudio->users()->find($user->id)->pivot->enviado);

                //$estudio->users()->find($user->id)->pivot->enviado=false;
                
                $estudio->save();
                Auth::login($usuario_actual);
                $this->enviarMail($user,$passw);

                }
            
            }
            Flash::success('Usuario agregado felizmente!');
        }
        public function enviarMail($user,$pass){
            $remitente=Auth::getUser();
            $vars = ['user' => $user,'pass' => $pass , 'remitente'=>$remitente];
            
                Mail::send('fede.contact::mail.nuevo_usuario', $vars, function($message) use ($vars){
    
                    $message->to($vars['user']->email, 'Fede');
                    $message->subject('Invitación de '.$vars['remitente']->name);
    
                });
        }
}
        

        

    
    
 
