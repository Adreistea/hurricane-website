<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BusinessProfile extends Model
{
    use HasFactory;

    protected $fillable = [
        'merchant_id',
        'profile_type',
        'current_pos_status',
        'order_management_method',
        'customer_engagement_tools',
        'staff_confidence',
        'technical_support',
        'complete_solution_response',
    ];

    /**
     * Get the merchant that owns the business profile.
     */
    public function merchant()
    {
        return $this->belongsTo(Merchant::class);
    }
} 