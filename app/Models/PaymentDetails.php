<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PaymentDetails extends Model
{
    use HasFactory;

    protected $fillable = [
        'merchant_id',
        'payment_method',
        'terms_agreement',
        'signature_name',
        'signature_data',
        'signature_date',
        'total_amount',
    ];

    /**
     * Get the merchant that owns the payment details.
     */
    public function merchant()
    {
        return $this->belongsTo(Merchant::class);
    }
} 