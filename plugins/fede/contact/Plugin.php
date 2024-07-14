<?php namespace Fede\Contact;

use System\Classes\PluginBase;

class Plugin extends PluginBase
{
    public function registerComponents()
    {
        return [
            'Fede\Contact\Components\ContactForm' => 'contactform',
        ];
    }

    public function registerSettings()
    {
    }
}
