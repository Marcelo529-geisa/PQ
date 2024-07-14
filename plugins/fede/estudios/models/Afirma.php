<?php namespace Fede\Estudios\Models;

use Model;

/**
 * Model
 */
class Afirma extends Model
{
    use \October\Rain\Database\Traits\Validation;
    public $implement = ['RainLab.Translate.Behaviors.TranslatableModel'];

    public $translatable = ['texto'];
    /*
     * Disable timestamps by default.
     * Remove this line if timestamps are defined in the database table.
     */
    public $timestamps = false;


    /**
     * @var string The database table used by the model.
     */
    public $table = 'fede_estudios_afirma';

    /**
     * @var array Validation rules
     */
    public $rules = [
    ];

    public $belongsTo = [
        'estudio'=> [
            'Fede\Estudios\Models\Estudio',
            'table'=>'fede_estudios_'

        ]
    ];
}
