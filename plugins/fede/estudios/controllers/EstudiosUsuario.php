<?php namespace Fede\Estudios\Controllers;

use Backend\Classes\Controller;
use BackendMenu;
use Auth;

class EstudiosUsuario extends Controller
{
    public $implement = [        'Backend\Behaviors\ListController',        'Backend\Behaviors\FormController',        'Backend\Behaviors\ReorderController'    ];
    
    public $listConfig = 'config_list.yaml';
    public $formConfig = 'config_form.yaml';
    public $reorderConfig = 'config_reorder.yaml';

    public function __construct()
    {
        parent::__construct();
    }
    public function listExtendQuery($query)
    {
        $query->where('user_id', Auth::getUser()->id); // you can add whatever filter you need here
    }
}
