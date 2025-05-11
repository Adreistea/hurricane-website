<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Merchant extends Model
{
    use HasFactory;

    protected $fillable = [
        'first_name',
        'last_name',
        'business_name',
        'phone_number',
        'business_email',
        'monthly_volume',
        'average_sale',
        'high_ticket',
        'privacy_agreement',
    ];

    /**
     * Get the business details associated with the merchant.
     */
    public function businessDetails()
    {
        return $this->hasOne(BusinessDetails::class);
    }

    /**
     * Get the owner information associated with the merchant.
     */
    public function ownerInformation()
    {
        return $this->hasOne(OwnerInformation::class);
    }

    /**
     * Get the system configuration associated with the merchant.
     */
    public function systemConfiguration()
    {
        return $this->hasOne(SystemConfiguration::class);
    }

    /**
     * Get the business profile associated with the merchant.
     */
    public function businessProfile()
    {
        return $this->hasOne(BusinessProfile::class);
    }

    /**
     * Get the payment details associated with the merchant.
     */
    public function paymentDetails()
    {
        return $this->hasOne(PaymentDetails::class);
    }

    /**
     * Get the selected bundles associated with the merchant.
     */
    public function selectedBundles()
    {
        return $this->hasMany(SelectedBundle::class);
    }

    /**
     * Get the handheld features associated with the merchant.
     */
    public function handheldFeatures()
    {
        return $this->hasMany(HandheldFeature::class);
    }
} 