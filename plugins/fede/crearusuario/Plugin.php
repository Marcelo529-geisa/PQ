<?php namespace Fede\Crearusuario;

use System\Classes\PluginBase;
use Backend\Classes\WidgetManager;


class Plugin extends PluginBase
{
    public function registerComponents()
    {
        return [
            'Fede\CrearUsuario\Components\CrearUsuario' => 'CrearUsuario',
            'Fede\CrearUsuario\Components\ActualizarUsuario' => 'ActualizarUsuario',

            'Fede\CrearUsuario\Components\UpdateUsuario' => 'UpdateUsuario',
            'Fede\CrearUsuario\Components\UpdateContra' => 'UpdateContra',

            'Fede\CrearUsuario\Components\CrearParticipante' => 'CrearParticipante',
            'Fede\CrearUsuario\Components\CrearEditor' => 'CrearEditor',
            'Fede\CrearUsuario\Components\CrearAdmin' => 'CrearAdmin',
            'Fede\CrearUsuario\Components\Crear' => 'Crear',

            'Fede\CrearUsuario\Components\EnviarMail' => 'EnviarMail',


        ];
    }

    public function registerSettings()
    {
    }
}
