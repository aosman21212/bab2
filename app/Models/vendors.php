<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Support\Facades\Storage;

use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * Class vendors
 * @package App\Models
 * @version February 1, 2024, 6:07 pm UTC
 *
 * @property \App\Models\User $addedby
 * @property \Illuminate\Database\Eloquent\Collection $productServices
 * @property string $vendorName
 * @property string $vendorLogo
 * @property integer $addedBy
 * @property string $vendorStatus
 */
class vendors extends Model
{

    use HasFactory;

    public $table = 'vendors';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';




    public $fillable = [
        'vendorName',
        'vendorLogo',
        'addedBy',
        'vendorStatus'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'vendorName' => 'string',
        'vendorLogo' => 'string',
        'addedBy' => 'integer',
        'vendorStatus' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'vendorName' => 'required|string|max:255',
        'vendorLogo' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048', // Allow only image files
        'addedBy' => 'required',
        'vendorStatus' => 'required|string',
        'created_at' => 'nullable',
        'updated_at' => 'nullable'
    ];

    public function addedby()
    {
        return $this->belongsTo(\App\Models\User::class, 'addedBy');
    }

    public function productServices()
    {
        return $this->hasMany(\App\Models\productservices::class, 'vendorId');
    }

    // Mutator for handling the 'vendorLogo' attribute
  
}