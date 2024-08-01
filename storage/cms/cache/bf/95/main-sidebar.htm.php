<?php 
use RainLab\User\Models\User as User;use Fede\Estudios\Models\Estudio as Estudio;class Cms6699e9228a7ea902831813_6f92da09c45bee9f1b4655950426b033Class extends Cms\Classes\PartialCode
{
public function onStart()
{


if (Session::has('estudio-id'))
  {
    $this['estudio-id'] = Session::get('estudio-id');
    $this['estudio']=Estudio::find(Session::get('estudio-id'));
    Session::put('estudio-titulo',$this['estudio']['titulo'] );

   
  }



}
}
