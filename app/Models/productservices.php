<?php

namespace App\Models;

use Eloquent as Model;

use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * Class productservices
 * @package App\Models
 * @version February 1, 2024, 9:11 pm UTC
 *
 * @property \App\Models\User $addedby
 * @property \App\Models\Client $clientid
 * @property \App\Models\Vendor $vendorid
 * @property \Illuminate\Database\Eloquent\Collection $clientData
 * @property \Illuminate\Database\Eloquent\Collection $vendorData
 * @property string $productServiceName
 * @property integer $initiatedQuantity
 * @property number $recurringFees
 * @property number $additionalFees
 * @property string $recurringPeriod
 * @property integer $addedBy
 * @property string|\Carbon\Carbon $addedDate
 * @property integer $clientId
 * @property string $productServiceStatus
 * @property integer $vendorId
 */
class productservices extends Model
{

    use HasFactory;

    public $table = 'product_services';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';




    public $fillable = [
        'productServiceName',
        'initiatedQuantity',
        'recurringFees',
        'additionalFees',
        'recurringPeriod',
        'addedBy',
        'clientId',
        'productServiceStatus',
        'vendorId'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'productServiceName' => 'string',
        'initiatedQuantity' => 'integer',
        'recurringFees' => 'float',
        'additionalFees' => 'float',
        'recurringPeriod' => 'string',
        'addedBy' => 'integer',
        'clientId' => 'integer',
        'productServiceStatus' => 'string',
        'vendorId' => 'integer'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'productServiceName' => 'required|string|max:255',
        'initiatedQuantity' => 'required|string',
        'recurringFees' => 'required|string',
        'additionalFees' => 'required|string',
        'recurringPeriod' => 'required|string',
        'addedBy' => 'required',
        'clientId' => 'required',
        'productServiceStatus' => 'required|string',
        'vendorId' => 'required',
        'created_at' => 'nullable',
        'updated_at' => 'nullable'
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     **/
    public function addedby()
    {
        return $this->belongsTo(\App\Models\User::class, 'addedBy');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     **/
    public function clientid()
    {
        return $this->belongsTo(\App\Models\clients::class, 'clientId');
    }
  
    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     **/
    public function vendorid()
    {
        return $this->belongsTo(\App\Models\vendors::class, 'vendorId');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     **/
    public function clientData()
    {
        return $this->hasMany(\App\Models\clientdata::class, 'productServiceId');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     **/
    public function vendorData()
    {
        return $this->hasMany(\App\Models\vendordata::class, 'productServiceId');
    }
}
