<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OwnerInformation extends Model
{
    use HasFactory;

    protected $fillable = [
        'merchant_id',
        'owner_first_name',
        'owner_last_name',
        'title',
        'date_of_birth',
        'ownership_percentage',
        'drivers_license',
        'dl_state',
        'owner_phone',
        'ssn',
        'home_address_line1',
        'home_address_line2',
        'city',
        'home_state',
        'home_zip',
    ];

    /**
     * Get the merchant that owns the owner information.
     */
    public function merchant()
    {
        return $this->belongsTo(Merchant::class);
    }
} 