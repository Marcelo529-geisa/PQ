<?php 
class Cms6699e96643a1b622876138_b3a2efad0f2d7f7bcd4ca37e4c42bba1Class extends Cms\Classes\PageCode
{
public function onTest()
{
  
    Session::put('estudio-id',Input::get('estudio-id') );
    return Redirect::to('/editar-estudio/'.Input::get('estudio-id'));
}
}
