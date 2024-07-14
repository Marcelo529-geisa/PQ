<?php 
use RainLab\User\Models\User as User;use Fede\Estudios\Models\Estudio as Estudio;class Cms667df2c0c8740387107269_d6471b3a1d43a503c9b758dcdacd8c9cClass extends Cms\Classes\PartialCode
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
