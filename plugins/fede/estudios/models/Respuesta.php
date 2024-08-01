<?php namespace Fede\Estudios\Models;

use Model;

/**
 * Model
 */
class Respuesta extends Model
{
    use \October\Rain\Database\Traits\Validation;
    

    /**
     * @var string The database table used by the model.
     */
    public $table = 'fede_estudios_respuestas';

    protected $fillable = ['estudio_id'];

    /**
     * @var array Validation rules
     */
    public $rules = [
    ];
    protected $jsonable = ['respuestas'];

    public function estudios(){
        return $this->hasMany('Fede\Estudios\Models\Estudio');
       }

}
