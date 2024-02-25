<?php
namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Support\Facades\Storage;

/**
 * Class clients
 * @package App\Models
 * @version February 1, 2024, 7:39 pm UTC
 *
 * @property \App\Models\User $addedby
 * @property \Illuminate\Database\Eloquent\Collection $clientData
 * @property \Illuminate\Database\Eloquent\Collection $productServices
 * @property string $clientName
 * @property string $clientLogo
 * @property string $contactName
 * @property string $mobileNo
 * @property string $email
 * @property integer $babAcctManagerId
 * @property string $orderDate
 * @property string $startDate
 * @property string $bill_to
 * @property integer $addedBy
 * @property string $addedDate
 * @property string $clientStatus
 */
class clients extends Model
{
    use HasFactory;

    public $table = 'clients';

    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';

    public $fillable = [
        'clientName',
        'clientLogo',
        'contactName',
        'mobileNo',
        'email',
        'babAcctManagerId',
        'orderDate',
        'startDate',
        'bill_to',
        'addedBy',
        'clientStatus',
    ];

    protected $casts = [
        'id' => 'integer',
        'clientName' => 'string',
        'clientLogo' => 'string',
        'contactName' => 'string',
        'mobileNo' => 'string',
        'email' => 'string',
        'babAcctManagerId' => 'integer',
        'orderDate' => 'date',
        'startDate' => 'date',
        'bill_to' => 'string',
        'addedBy' => 'integer',
        'clientStatus' => 'string',
    ];

    public static $rules = [
        'clientName' => 'required|string|max:255',
        'clientLogo' => 'nullable|image|mimes:jpeg,png,jpg,gif',
        'contactName' => 'required|string|max:255',
        'mobileNo' => 'required|string|max:255',
        'email' => 'required|string|max:255',
        'babAcctManagerId' => 'required',
        'orderDate' => 'required',
        'startDate' => 'required',
        'bill_to' => 'required|string|max:255',
        'addedBy' => 'required',
        'clientStatus' => 'required|string',
        'created_at' => 'nullable',
        'updated_at' => 'nullable',
    ];

    public function addedby()
    {
        return $this->belongsTo(\App\Models\User::class, 'addedBy');
    }

    public function clientData()
    {
        return $this->hasMany(\App\Models\clientdata::class, 'clientId');
    }

    public function productServices()
    {
        return $this->hasMany(\App\Models\productservices::class, 'clientId');
    }
    public function babAcctManager()
{
    return $this->belongsTo(\App\Models\babacctmanagers::class, 'babAcctManagerId');
}


    // Mutator for handling the 'clientLogo' attribute
    // public function setClientLogoAttribute($value)
    // {
    //     // Check if a valid file is provided
    //     if ($value && $value->isValid()) {
    //         // Delete old file if it exists
    //         if ($this->attributes['clientLogo']) {
    //             Storage::disk('public')->delete($this->attributes['clientLogo']);
    //         }
    
    //         // Store the new file and update the attribute
    //         $imagePath = $value->store('clientLogos', 'public');
    //         $this->attributes['clientLogo'] = $imagePath;
    //     }
    // }
    
}
