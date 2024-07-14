<?php namespace Fede\Afirmaciones;

use System\Classes\PluginBase;
use Backend\Classes\WidgetManager;

class Plugin extends PluginBase
{
    
    public function registerComponents()
    {
      return [
            
        'Fede\Afirmaciones\Components\Afirmaciones' => 'afirmaciones',
       

    ];
    }

    public function registerSettings()
    {
    }
    public function registerFormWidgets() {
      // die("meurt");
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
        // $manager->registerFormWidget('Backend\FormWidgets\Repeater', 'repeater');
        // $manager->registerFormWidget('Backend\FormWidgets\TagList', 'taglist');
        // $manager->registerFormWidget('Backend\FormWidgets\MediaFinder', 'mediafinder');
        // $manager->registerFormWidget('Backend\FormWidgets\NestedForm', 'nestedform');
      });
    }
 

    public function register() {
      
        return WidgetManager::instance()->registerFormWidgets(function ($manager) {
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
          // $manager->registerFormWidget('Backend\FormWidgets\Repeater', 'repeater');
          // $manager->registerFormWidget('Backend\FormWidgets\TagList', 'taglist');
          // $manager->registerFormWidget('Backend\FormWidgets\MediaFinder', 'mediafinder');
          // $manager->registerFormWidget('Backend\FormWidgets\NestedForm', 'nestedform');
        });
      }
   
}
