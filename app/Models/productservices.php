<?php

namespace App\Models;

use Eloquent as Model;

use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * Class productservices
 * @package App\Models
 * @version March 9, 2024, 4:37 pm UTC
 *
 * @property \App\Models\Products $productservicename
 * @property \App\Models\Servicetype $servicetypeid
 * @property \App\Models\User $addedby
 * @property \App\Models\clients $clientid
 * @property \App\Models\vendors $vendorid
 * @property \Illuminate\Database\Eloquent\Collection $clientData
 * @property \Illuminate\Database\Eloquent\Collection $vendorData
 * @property integer $initiatedQuantity
 * @property number $recurringFees
 * @property number $additionalFees
 * @property string $recurringPeriod
 * @property integer $addedBy
 * @property integer $clientId
 * @property string $productServiceStatus
 * @property integer $vendorId
 * @property integer $ServiceTypeId
 * @property integer $productServiceName
 */
class productservices extends Model
{

    use HasFactory;

    public $table = 'product_services';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';




    public $fillable = [
        'initiatedQuantity',
        'recurringFees',
        'additionalFees',
        'recurringPeriod',
        'addedBy',
        'clientId',
        'productServiceStatus',
        'vendorId',
        'ServiceTypeId',
        'productServiceName'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'initiatedQuantity' => 'integer',
        'recurringFees' => 'decimal:3',
        'additionalFees' => 'decimal:3',
        'recurringPeriod' => 'string',
        'addedBy' => 'integer',
        'clientId' => 'integer',
        'productServiceStatus' => 'string',
        'vendorId' => 'integer',
        'ServiceTypeId' => 'integer',
        'productServiceName' => 'integer'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'initiatedQuantity' => 'required|integer',
        'recurringFees' => 'required|numeric',
        'additionalFees' => 'required|numeric',
        'recurringPeriod' => 'required|string',
        'addedBy' => 'required',
        'clientId' => 'required',
        'productServiceStatus' => 'required|string',
        'vendorId' => 'required',
        'created_at' => 'nullable',
        'updated_at' => 'nullable',
        'ServiceTypeId' => 'nullable|integer',
        'productServiceName' => 'nullable|integer'
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     **/
    public function productservicename()
    {
        return $this->belongsTo(\App\Models\Products::class, 'productServiceName');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     **/
    public function servicetypeid()
    {
        return $this->belongsTo(\App\Models\Servicetype::class, 'ServiceTypeId');
    }

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
