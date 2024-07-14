<?php namespace Fede\Respuestas;

use System\Classes\PluginBase;

class Plugin extends PluginBase
{
    public function registerComponents()
    {
        return [
            'Fede\Respuestas\Components\Respuestas' => 'Respuestas',
        ];
    }

    public function registerSettings()
    {
    }
}
