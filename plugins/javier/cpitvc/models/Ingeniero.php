<?php namespace Javier\Cpitvc\Models;

use Model;

/**
 * Model
 */
class Ingeniero extends Model
{
    use \October\Rain\Database\Traits\Validation;
    

    /**
     * @var string The database table used by the model.
     */
    public $table = 'javier_cpitvc_ingeniero';
    
    /**
     * @var array Validation rules
     */
    public $rules = [
    ];

    
    public $belongsTo = [
        'ciudad_id' => [ 'Javier\Cpitvc\Models\Ciudad' ],
        'pago_id' => ['Javier\Cpitvc\Models\Pago'],
        'titulo_id' => ['Javier\Cpitvc\Models\Titulo'],
        'universidad_id' => ['Javier\Cpitvc\Models\Universidad']
    ];
}
