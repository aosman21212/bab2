<?php

namespace App\Models;

use Eloquent as Model;

use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * Class vendordata
 * @package App\Models
 * @version February 2, 2024, 1:44 pm UTC
 *
 * @property \App\Models\User $addedby
 * @property \App\Models\productservices $productserviceid
 * @property integer $productServiceId
 * @property string $invoiceNo
 * @property number $invoiceAmount
 * @property integer $invoiceMonth
 * @property integer $invoiceYear
 * @property string $invoiceDate
 * @property integer $addedBy
 */
class vendordata extends Model
{

    use HasFactory;

    public $table = 'vendor_data';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';




    public $fillable = [
        'productServiceId',
        'invoiceNo',
        'invoiceAmount',
        'invoiceMonth',
        'invoiceYear',
        'invoiceDate',
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
        'invoiceNo' => 'string',
        'invoiceAmount' => 'float',
        'invoiceMonth' => 'integer',
        'invoiceYear' => 'integer',
        'invoiceDate' => 'date',
        'addedBy' => 'integer'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'productServiceId' => 'required',
        'invoiceNo' => 'required|string|max:255',
        'invoiceAmount' => 'required|numeric',
        'invoiceMonth' => 'required|integer',
        'invoiceYear' => 'required|integer',
        'invoiceDate' => 'required',
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
    public function productserviceid()
    {
        return $this->belongsTo(\App\Models\productservices::class, 'productServiceId');
    }
}
