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
        'city',
        'state',
        'zip',
        'accept_visa_mastercard_discover',
        'accept_amex_optblue',
        'accept_amex_esa',
        'amex_esa_number',
        'accept_pin_debit',
        'accept_ebt',
        'ebt_fns_number',
        'notes',
        'in_person_percentage',
        'mail_phone_percentage',
        'ecommerce_percentage',
    ];

    /**
     * Get the merchant that owns the business details.
     */
    public function merchant()
    {
        return $this->belongsTo(Merchant::class);
    }
} 