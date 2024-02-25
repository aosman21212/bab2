<?php

namespace App\Models;

use Eloquent as Model;

use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * Class babacctmanagers
 * @package App\Models
 * @version February 1, 2024, 8:01 pm UTC
 *
 * @property \App\Models\User $addedby
 * @property string $AcctManagerName
 * @property string $AcctManagerContact
 * @property string $AcctManagerEmail
 * @property string $AcctManagerStatus
 * @property integer $addedBy
 */
class babacctmanagers extends Model
{

    use HasFactory;

    public $table = 'babacctmanagers';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';




    public $fillable = [
        'AcctManagerName',
        'AcctManagerContact',
        'AcctManagerEmail',
        'AcctManagerStatus',
        'addedBy'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'AcctManagerName' => 'string',
        'AcctManagerContact' => 'string',
        'AcctManagerEmail' => 'string',
        'AcctManagerStatus' => 'string',
        'addedBy' => 'integer'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'AcctManagerName' => 'required|string|max:255',
        'AcctManagerContact' => 'required|string|max:255',
        'AcctManagerEmail' => 'required|string|max:255',
        'AcctManagerStatus' => 'required|string',
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

    public function clients()
    {
        return $this->hasMany(clients::class, 'babAcctManagerId');
    }

    // Method to check if there are related clients
    public function hasClients()
    {
        return $this->clients()->exists();
    }
}
