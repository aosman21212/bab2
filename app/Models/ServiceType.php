<?php

namespace App\Models;

use Eloquent as Model;

use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * Class ServiceType
 * @package App\Models
 * @version February 28, 2024, 1:24 pm UTC
 *
 * @property string $TypeName
 */
class ServiceType extends Model
{

    use HasFactory;

    public $table = 'servicetype';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';




    public $fillable = [
        'TypeName'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'TypeName' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'TypeName' => 'nullable|string|max:225',
        'created_at' => 'nullable',
        'updated_at' => 'nullable'
    ];

    
}
