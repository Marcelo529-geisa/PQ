<?php namespace Fede\CrearUsuario\Components;

use Cms\Classes\ComponentBase;
use Response;

use Input;
use Mail;
use Validator;
use Redirect;
use ValidationException;
use Auth;
use Flash;
use System\Models\File;
use Fede\Estudios\Models\Respuesta as Responde;

use RainLab\User\Models\UserGroup as UserGroup;

use RainLab\User\Models\User as User;
use Fede\Estudios\Models\Estudio as Estudio;
use Illuminate\Support\Facades\DB;



class EnviarMail extends ComponentBase
{

    public function componentDetails(){
        return [
            'name' => 'Enviar Mail',
            'description' => 'Enviar Mail'
        ];
    }
    public function onRun($id = null)
    {        

        $estudio=Estudio::find($this->param('id'));
        $usuarios_estudio=$estudio->users()->get();
                 
        $todos_part= UserGroup::find(1)->users()->pluck('id');
        $estudio_part = $usuarios_estudio ->whereIn('id',$todos_part);
        $estudio_part_id = $estudio_part->pluck('id')->all();

        $respuestas=Responde::where('estudios_id',$this->param('id'))->pluck('user_id')->toArray();
        /*marcelo*/
        $respuestas_3=$estudio->respuesta_user();

        $this->page['participantes']=$estudio_part;
        $this->page['respuestas']=$respuestas;
        $this->page['estudio_part_id']= $respuestas_3;
        
                  
    }
    public function onSendMasivo(){
    
        //$respuestas=Responde::where('estudios_id',$this->param('id'))->pluck('user_id')->toArray();
        //$respuestas=Responde::select('')ere('estudios_id',$this->param('id'))->count('user_id')->toArray();
        
        $estudio=Estudio::find($this->param('id'));
        $usuarios_estudio=$estudio->users()->get();
        $todos_part= UserGroup::find(1)->users()->pluck('id');
        $estudios_part = $usuarios_estudio ->whereIn('id',$todos_part);
        //dd($estudios_part);
        $pendientes = $estudios_part-> except($respuestas)->pluck('id');
        $tags=array();
        foreach($pendientes as $key=>$value)
            {
            
            
            $userio1=User::find($value);        

            $vars = ['name'=>$userio1->name,'user_id' => $value, 'estudio' => $estudio];
            
            Mail::send('fede.crearusuario::mail.correo', $vars, function($message) use ($value,$tags) {
                $userio=User::find($value);        
                $message->to(trim($userio->email), $userio->name);
                $message->subject('This is a reminder');
            
            });
            if (count(Mail::failures()) > 0) {
                Flash::error('Problema!');
            } else {
                // Mail sent
                $userio=User::find($value);        
                $estudio=Estudio::find($this->param('id'));
                $estudio->users()->detach($userio->id);
                $estudio->users()->attach($userio->id,['enviado'=>1]);
                $tag="#enviado-".$userio->id;
                $tags[]=$tag;
                //Flash::success('Correo  enviado!');
                
               
    
            }
            
                
            }
            
            
        return Redirect::to('correo/'.$this->param('id'));
    }

    public function onSend(){
        $userio1=User::find(Input::get('user-id'));        
        $estudio=Estudio::find($this->param('id'));

        $vars = ['name'=>$userio1->name,'user_id' => Input::get('user-id'), 'estudio' => $estudio];
            
        
        Mail::send('fede.crearusuario::mail.correo', $vars, function($message) use ($userio1,$vars) {
        
            $message->to($userio1->email, $userio1->name);
            $message->subject("PlataformaQ - ".$vars['estudio']->titulo);
        
        });
        if (count(Mail::failures()) > 0) {
            Flash::error('Problema!');
        } else {
            // Mail sent
            $estudio=Estudio::find($this->param('id'));
            $estudio->users()->detach(Input::get('user-id'));
            $estudio->users()->attach(Input::get('user-id'),['enviado'=>1]);
            $tag="#enviado-".Input::get('user-id');
            Flash::success('Correo  enviado!');
            return [ $tag => "<td>enviado</td>"];
                                  

        }
        
            
        }
    public function onDelete() {
        $tag="#usuario-".Input::get('user-id');

        $usuario=User::find(Input::get('user-id'));
        $usuario->groups()->detach(1);
        return [ $tag => ""];
    }
        

        

    
    

}