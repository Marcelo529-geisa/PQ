<?php namespace Fede\Contact\Models;

use Model;

/**
 * Model
 */
class Contacto extends Model
{
    use \October\Rain\Database\Traits\Validation;
    

    /**
     * @var string The database table used by the model.
     */
    public $table = 'fede_contact_';

    /**
     * @var array Validation rules
     */
    public $rules = [
    ];
}
