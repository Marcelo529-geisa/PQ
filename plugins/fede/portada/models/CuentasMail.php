<?php namespace Fede\Portada\Models;

use Model;

/**
 * Model
 */
class CuentasMail extends Model
{
    use \October\Rain\Database\Traits\Validation;
    
    /*
     * Disable timestamps by default.
     * Remove this line if timestamps are defined in the database table.
     */
    public $timestamps = false;


    /**
     * @var string The database table used by the model.
     */
    public $table = 'fede_portada_mail';

    /**
     * @var array Validation rules
     */
    public $rules = [
    ];
}
