<?php namespace Fede\Profile;

use System\Classes\PluginBase;

use Rainlab\User\Controllers\Users as UsersController;

use Rainlab\User\Models\User as UsersModel;

class Plugin extends PluginBase
{
    public function registerComponents()
    {
    }

    public function registerSettings()
    {
    }

    public function boot (){
        //parent::boot();
       
        \Event::listen('backend.form.extendFieldsBefore', function($widget) {
            if(!$widget->model instanceof \Rainlab\User\Models\User) {
                return;
            }
            $widget->tabs['fields']['bio'] = [
               'label' => 'bio',
               'type' => 'textarea',
               'tab' => 'profile'
            ];
         });
        UsersModel::extend(function ($model){
            $model->bindEvent('model.saveInternal', function() use($model) {
                $model->purgeAttributes('translatable');
            });
            $model->addFillable([
                'bio'
            ]);
            if (!$model->propertyExists('translatable')) {
                $model->addDynamicProperty('translatable', []);
                $model->addJsonable('translatable');
                
             }
             $model->translatable = array_merge($model->translatable, ['bio']);
            

             if (!$model->isClassExtendedWith('RainLab.Translate.Behaviors.TranslatableModel')) {
                $model->extendClassWith('RainLab.Translate.Behaviors.TranslatableModel');
           }
           /* $model->addFillable([
                'bio'
            ]);
            $model->addDynamicProperty('translatable', []);
            $model->translatable = array_merge($model->translatable, ['bio']);
            //$model->extendClassWith('RainLab.Translate.Behaviors.TranslatableModel');
            */
        });
       /* UsersController::extendFormFields(function($form,$model,$context){
            $form->addTabFields([
                'bio' => [
                    'label'=>'bio',
                    'type'=>'textarea',
                    'tab'=>'profile'
                ]
            ]);
            
                  });*/
    }
}
