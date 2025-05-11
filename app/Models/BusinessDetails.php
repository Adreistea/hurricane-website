<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BusinessDetails extends Model
{
    use HasFactory;

    protected $fillable = [
        'merchant_id',
        'business_entity_type',
        'industry_type',
        'dba',
        'product_service',
        'business_phone',
        'year_started',
        'website',
        'address_line1',
        'address_line2',
        'state',
        'zip',
    ];

    /**
     * Get the merchant that owns the business details.
     */
    public function merchant()
    {
        return $this->belongsTo(Merchant::class);
    }
} 