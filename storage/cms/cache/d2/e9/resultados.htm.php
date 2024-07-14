<?php 
use Fede\Estudios\Models\Estudio as Estudio;use Fede\Estudios\Models\Respuesta as Respuesta;use October\Rain\Auth\Models\User as User;class Cms66801d18a47f1360081723_f38ed071545556e363624bf3342bba8eClass extends Cms\Classes\PageCode
{



public function onInit() {
    $id=$this->param('id');
    $this['jotason']=  array();
    $this['respuestas']=Respuesta::where('estudios_id',$id)->get();
    
//die();    
}
}
