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
use RainLab\User\Models\User as User;
use RainLab\User\Models\UserGroup as UserGroup;

use Fede\Estudios\Models\Estudio as Estudio;
use System\Models\File;



class Crear extends ComponentBase
{

    public function componentDetails()
    {
        return [
            'name' => 'Crear ANY',
            'description' => 'Simple Crear ANY'
        ];
    }
    public function onRun (){
       
        if ( $this->param('estudio')!=null)
            $this->page['estudio']=$this->param('estudio');
        if ( $this->param('grupo')!=null)
            {
            $grup=UserGroup::where('id',$this->param('grupo'))->get()->first()->toArray();
            
            $this->page['grupo']=$grup['name'];
            
            };
            /*
        if ( $this->param('usuarioid')!=null){
            $usuario_up=User::find($this->param('usuarioid'));
            $this->page['usuario_up']=$usuario_up;    
        } else {
            $this->page['usuario_up']= new User();
        }*/
            
    }

    public function onSend()
    {
        $tipo_grupo=$this->param('grupo');
        $id_estudio=$this->param('estudio');
        $data = post();

        $rules = [
            'name' => 'required|min:5',
            'email' => 'required|email',

        ];

        $validator = Validator::make($data, $rules);

        if ($validator->fails()) {
            throw new ValidationException($validator);
            
        } else {
            $usuario_actual=Auth::getUser();
            $posible_user=User::where('email',Input::get('email'))->get();
            // dd($posible_user->first()->groups()->pluck('id')->toArray());
            
            if ($posible_user->count()>0)
                {//dd($posible_user->first()->groups()->pluck('id')->toArray());
                     //dd(in_array(1,$posible_user->first()->groups()->pluck('id')->toArray()));
                if (!in_array($tipo_grupo,$posible_user->first()->groups()->pluck('id')->toArray())){
                     $posible_user->first()->groups()->attach($tipo_grupo);
                    }
                    //$posible_user->first()->name=$data['name'];
                if ($tipo_grupo==1 || $tipo_grupo==3)
                {
                    $estudio=Estudio::find($id_estudio);
                    $estudio->users()->attach($posible_user->first()->id);

                 
                }
                if ($tipo_grupo!=1 )
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
                    'password_confirmation' => $passw,
                ], true);
                $user->groups()->attach($tipo_grupo);

                $user->save();
                if ($tipo_grupo==1 or $tipo_grupo==3)
                {
                    $estudio=Estudio::find($id_estudio);
                    $estudio->users()->attach($user->id);
                 
                }
                Auth::login($usuario_actual);
                if ($tipo_grupo!=1 )
                    $this->enviarMail($user,$passw);
                $grup=UserGroup::where('id',$this->param('grupo'))->get()->first()->toArray();
            
            
                Flash::success('Usuario agregado al grupo de '.$grup['name']);
                //return Redirect::to('/actualizar-user/' . $user->id);
                }
            // $usuario=User::find(53);

            //  $usuario->bio=$data['bio'];
            //  $usuario->save();
            

           
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
    public function onImageUpload()
    {
        $image = Input::all();
        $file = (new File())->fromPost($image['avatar']);
        return ['#imageResult' => '<img src="' . $file->getThumb(200, 200, ['mode' => 'crop']) . '" data-request="onImageUpload"  data-request-files data-request-flash style="width: 200px; height: auto;" alt="" >'];
    }
}
