<?php 
use Fede\Estudios\Models\Estudio as Estudio;use RainLab\User\Models\UserGroup as UserGroup;class Cms6681eb8567129690417325_6b7da6da5124fac23cca0f49b31e7ec8Class extends Cms\Classes\PageCode
{


public function onInit() {
$this['estudio']=Estudio::find($this->param('id'));
$this['usuarios_estudio']=$this['estudio']->users()->get();


$this['todos_colabor'] = UserGroup::find(3)->users()->pluck('id');
$this['estudio_colabor'] = $this['usuarios_estudio'] ->whereIn('id',$this['todos_colabor']);
}
}
