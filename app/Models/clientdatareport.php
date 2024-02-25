<?php

namespace App\Models;

use Eloquent as Model;

use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * Class clientdatareport
 * @package App\Models
 * @version February 20, 2024, 2:56 pm UTC
 *
 * @property \App\Models\User $addedby
 * @property \App\Models\clients $clientid
 * @property \App\Models\productservices $productserviceid
 * @property integer $productServiceId
 * @property integer $clientId
 * @property integer $month
 * @property integer $year
 * @property integer $quantity
 * @property number $additionalQuantity
 * @property number $additionalCost
 * @property number $totalMonthlyDue
 * @property number $outstandingBalance
 * @property number $totalDue
 * @property integer $addedBy
 */
class clientdatareport extends Model
{

    use HasFactory;

    public $table = 'client_data';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';




    public $fillable = [
        'productServiceId',
        'clientId',
        'month',
        'year',
        'quantity',
        'additionalQuantity',
        'additionalCost',
        'totalMonthlyDue',
        'outstandingBalance',
        'totalDue',
        'addedBy'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'productServiceId' => 'integer',
        'clientId' => 'integer',
        'month' => 'integer',
        'year' => 'integer',
        'quantity' => 'integer',
        'additionalQuantity' => 'decimal:3',
        'additionalCost' => 'decimal:2',
        'totalMonthlyDue' => 'decimal:2',
        'outstandingBalance' => 'decimal:2',
        'totalDue' => 'decimal:2',
        'addedBy' => 'integer'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'productServiceId' => 'required',
        'clientId' => 'required',
        'month' => 'required|integer',
        'year' => 'required|integer',
        'quantity' => 'required|integer',
        'additionalQuantity' => 'required|numeric',
        'additionalCost' => 'required|numeric',
        'totalMonthlyDue' => 'required|numeric',
        'outstandingBalance' => 'required|numeric',
        'totalDue' => 'required|numeric',
        'addedBy' => 'required',
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
    public function productserviceid()
    {
        return $this->belongsTo(\App\Models\productservices::class, 'productServiceId');
    }
}
