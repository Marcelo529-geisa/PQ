<?php 
use RainLab\User\Models\UserGroup as UserGroup;use Fede\Estudios\Models\Estudio as Estudio;use Fede\Estudios\Models\Afirma;use  Fede\Estudios\Models\Respuesta as Responde;class Cms669af56688a53172238612_dc2e3204c5855c7535830698905337b3Class extends Cms\Classes\PageCode
{




public function onInit() {

  
  $this['estudio']=Estudio::find($this->param('id'));
  $this['usuarios_estudio']=$this['estudio']->users()->get();
   $this['columnas']=$this['estudio']->distribucion;
   
   if (null!=$this['columnas'])
   {
     
    $elementos=0;
     $this['num_columnas'] =count($this['columnas']);
     foreach ($this['columnas'] as $columna)
        $elementos=$elementos+$columna['elementos'];
        
    $this['num_elementos'] =$elementos; 
   }  
   else{
    $this['num_elementos'] =0;
   }
    
    $this['todos_colabor'] = UserGroup::find(3)->users()->pluck('id');
    $this['estudio_colabor'] = $this['usuarios_estudio'] ->whereIn('id',$this['todos_colabor']);
   $this['numero_colab']=$this['estudio_colabor']->count();
  
  $this['numero_afirma']=$this['estudio']->afirma->count();


  $respuestas=Responde::where('estudios_id',$this->param('id'))->get();
  $this['answersCount']=count($respuestas);
  
  $this['usuarios_estudio']=$this['estudio']->users()->get();
   
  
    $this['todos_guests'] = UserGroup::find(1)->users()->pluck('id');
    $this['estudio_guests'] = $this['usuarios_estudio'] ->whereIn('id',$this['todos_guests']);
    $this['num_guests'] = $this['estudio_guests'] -> count();
  }
public function onDelete(){
    $estudio_id=Input::get('estudio-id');
    echo $estudio_id;
    $estudio=Estudio::find($estudio_id);
    $estudio->delete();
    return Redirect::to('/tusestudios');
  }
}
