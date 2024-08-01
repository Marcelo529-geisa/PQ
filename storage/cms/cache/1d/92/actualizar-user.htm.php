<?php 
use RainLab\User\Models\UserGroup as User;class Cms6699ec4e3bebc110349437_48eff5abbce05c510594b21901732e9aClass extends Cms\Classes\PageCode
{

public function onInit() {

$this['user'] = User::find(Session::get('user-id') );
}
}
