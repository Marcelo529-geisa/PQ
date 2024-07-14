<?php namespace Fede\Contact\Components;

use Cms\Classes\ComponentBase;
use Input;
use Mail;
use Validator;
use Redirect;
use ValidationException;
use Fede\Contact\Models\Contacto as Contacto;
use Flash;



class ContactForm extends ComponentBase
{

    public function componentDetails(){
        return [
            'name' => 'Contact Form',
            'description' => 'Simple contact form'
        ];
    }
    
    public function onSend(){
        
        $data = post();

        $rules = [
            'name' => 'required|min:5',
            'email' => 'required|email'
        ];

        $validator = Validator::make($data, $rules);

        if($validator->fails()){
            throw new ValidationException($validator);
        } else {
            $vars = ['name' => Input::get('name'), 'email' => Input::get('email'), 'mensaje' => Input::get('mensaje')];
            $contacto = new Contacto();
            $contacto->update($vars);
            $contacto->save();
            Mail::send('fede.contact::mail.message', $vars, function($message) {

                $message->to('federico.j.albesa@gmail.com', 'Fede');
                $message->subject('New message from contact form');

            });
            Flash::success('Mail enviado correctamente!');

        }

    }

}