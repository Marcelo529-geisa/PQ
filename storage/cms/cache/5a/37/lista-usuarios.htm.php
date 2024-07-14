<?php 
use RainLab\User\Models\UserGroup as UserGroup;use Fede\Estudios\Models\Estudio as Estudio;use RainLab\User\Models\User as User;class Cms667df2e0995b5479678299_c0f3f6849039b460efe20f734cf4c0f3Class extends Cms\Classes\PageCode
{





public function onInit() {
  if ($this->param('estudioid')!='null'){
    $this['estudio']=Estudio::find($this->param('estudioid'));
    $this['estudio_id']=$this->param('estudioid');
    $this['usuarios_estudio']=$this['estudio']->users()->get();
     
    
      $this['todos_grupo'] = UserGroup::find($this->param('grupo'))->users()->pluck('id');
      $this['estudio_grupo'] = $this['usuarios_estudio'] ->whereIn('id',$this['todos_grupo']);
    
  }
  else{
    $this['estudio_grupo'] = UserGroup::find($this->param('grupo'))->users()->get();
    $this['estudio_id']='null';
  }
     $grup=UserGroup::where('id',$this->param('grupo'))->get()->first()->toArray();
            
     $this['grupo'] =$grup['name'];
     $this['grupo_id']=$grup['id'];

}
public function onTest()
{
  
    Session::put('user-id',Input::get('user-id') );
    return Redirect::to('http://localhost/PQ2/actualizar-user/'.Input::get('user-id'));
}
public function onDelete()
{

  $usuario=  User::find(Input::get('user-id'));
  
  $tag="#usuario-".$usuario->id;
  $usuario->groups()->detach($this->param('grupo'));
  return [ $tag => ""];
}
}
