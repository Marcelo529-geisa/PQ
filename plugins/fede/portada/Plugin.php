<?php namespace Fede\Portada;

use System\Classes\PluginBase;

class Plugin extends PluginBase
{
    public function registerComponents()
    {
        return [
            'Fede\Portada\Components\PortadaForm' => 'Portada',
            'Fede\Portada\Components\Update' => 'Update',
        ];
    }

    public function registerSettings()
    {
    }
}
