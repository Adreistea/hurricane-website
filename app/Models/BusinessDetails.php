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
        'building_type',
        'merchant_status',
        'area_zoned',
        'square_footage',
        // Bank account fields
        'routing_number_1',
        'account_number_1',
        'bank_account_1_purpose',
        'bank_account_1_other_description',
        'routing_number_2',
        'account_number_2',
        'bank_account_2_purpose',
        'bank_account_2_other_description',
        // Refund/Return Policy
        'refund_return_policy',
        // E-commerce and MOTO fields
        'inventory_maintained',
        'inventory_off_site_address',
        'has_fulfillment_center',
        'fulfillment_agreement_file',
        'service_only_no_products',
        'other_companies_involved_shipping',
        'other_companies_fulfillment_details',
        'other_companies_agreement_provided',
    ];

    /**
     * Get the merchant that owns the business details.
     */
    public function merchant()
    {
        return $this->belongsTo(Merchant::class);
    }
} 