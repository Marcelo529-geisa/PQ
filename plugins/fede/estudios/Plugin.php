<?php namespace Fede\Estudios;

use System\Classes\PluginBase;
use Backend\Classes\WidgetManager;

class Plugin extends PluginBase
{
   
    public function registerComponents()

    { 
        return [
            
            'Fede\Estudios\Components\EstudioForm' => 'estudioform',
            'Fede\Estudios\Components\EditarEstudio' => 'EditarEstudio',
            'Fede\Estudios\Components\EditarInfo' => 'EditarInfo',
            'Fede\Estudios\Components\InfoForm' => 'InfoForm',
            'Fede\Estudios\Components\FrontForm' => 'FrontForm',
            'Fede\Estudios\Components\Lista' => 'Lista',
            'Fede\Estudios\Components\UpdateEstudio' => 'UpdateEstudio',
            'Fede\Estudios\Components\Afirmaciones' => 'Afirmaciones',
            'Fede\Estudios\Components\AfirmaForm' => 'AfirmaForm',
            'Fede\Estudios\Components\DistroForm' => 'DistroForm',
            'Fede\Estudios\Components\DistroUpdate' => 'DistroUpdate',
            'Fede\Estudios\Components\FormDistribucion' => 'FormDistribucion',
            'Fede\Estudios\Components\AfirmaDeArch' => 'AfirmaDeArch',




        ];
    }
    public function register() {
      
         WidgetManager::instance()->registerFormWidgets(function ($manager) {
          // You can add them as per need
          $manager->registerFormWidget('Backend\FormWidgets\RichEditor', 'richeditor');
  
          // $manager->registerFormWidget('Backend\FormWidgets\CodeEditor', 'codeeditor');          
          // $manager->registerFormWidget('Backend\FormWidgets\MarkdownEditor', 'markdown');
          // $manager->registerFormWidget('Backend\FormWidgets\FileUpload', 'fileupload');
          // $manager->registerFormWidget('Backend\FormWidgets\Relation', 'relation');
          // $manager->registerFormWidget('Backend\FormWidgets\DatePicker', 'datepicker');
          // $manager->registerFormWidget('Backend\FormWidgets\TimePicker', 'timepicker');
          // $manager->registerFormWidget('Backend\FormWidgets\ColorPicker', 'colorpicker');
          // $manager->registerFormWidget('Backend\FormWidgets\DataTable', 'datatable');
          // $manager->registerFormWidget('Backend\FormWidgets\RecordFinder', 'recordfinder');
           $manager->registerFormWidget('Backend\FormWidgets\Repeater', 'repeater');
          // $manager->registerFormWidget('Backend\FormWidgets\TagList', 'taglist');
          // $manager->registerFormWidget('Backend\FormWidgets\MediaFinder', 'mediafinder');
          // $manager->registerFormWidget('Backend\FormWidgets\NestedForm', 'nestedform');
        });
      }
      public function registerFormWidgets() {
        return [
            'Backend\FormWidgets\Repeater'=> 'repeater',
            'Backend\FormWidgets\Relation'=> 'relation',
            'Backend\FormWidgets\CodeEditor' => 'codeeditor',
            'Backend\FormWidgets\RichEditor' => 'richeditor'
        ];
      }
    public function registerSettings()
    {
    }
}
