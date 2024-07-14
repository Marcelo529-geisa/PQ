<?php 
class Cms667df2e9a1b43604464698_6ff913b9efc64e096da14a0d8c5fa179Class extends Cms\Classes\PageCode
{
public function onTest()
{
  
    Session::put('estudio-id',Input::get('estudio-id') );
    return Redirect::to('/editar-estudio/'.Input::get('estudio-id'));
}
}
