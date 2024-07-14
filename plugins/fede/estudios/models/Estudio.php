<?php namespace Fede\Estudios\Models;

use Model;
use Auth;
use RainLab\User\Models\User as User;
use RainLab\User\Models\UserGroup as UserGroup;


/**
 * Model
 */
class Estudio extends Model
{
    use \October\Rain\Database\Traits\Validation;
    
    use \October\Rain\Database\Traits\SoftDelete;
    public $implement = ['RainLab.Translate.Behaviors.TranslatableModel'];

    public $translatable = ['titulo','descripcion'];   

    protected $dates = ['deleted_at'];


    /**
     * @var string The database table used by the model.
     */
    public $table = 'fede_estudios_';

    protected $jsonable = ['distribucion'];
    /**
     * @var array Validation rules
     */
    public $rules = [
    ];

    public $morphToMany = [
 
        'users' => [
            'RainLab\User\Models\User',
            'table'=>'fede_estudios_users',
            'pivot' => ['enviado'],
            'name'=>'usable'
        ]
    ];
    public $hasMany= [
        'info'=>
            'Fede\Estudios\Models\Info',
        'afirma'=>
            'Fede\Estudios\Models\Afirma',
        
            
        
    ];
    public $belongsTo = [
        'user'=> [
            'RainLab\User\Models\User',
            

        ]
    ];

    
    
    public function scopeUsuario($query){
        $user_id = Auth::getUser()->id;
        return $query->where('user_id',$user_id);
    }
    
}
