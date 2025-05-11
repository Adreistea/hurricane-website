<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SystemConfiguration extends Model
{
    use HasFactory;

    protected $fillable = [
        'merchant_id',
        'number_of_locations',
        'number_of_registers',
        'number_of_servers',
        'handhelds_needed',
        'number_of_handhelds',
        'customer_displays_needed',
        'additional_requirements',
    ];

    /**
     * Get the merchant that owns the system configuration.
     */
    public function merchant()
    {
        return $this->belongsTo(Merchant::class);
    }
} 