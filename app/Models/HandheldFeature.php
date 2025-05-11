<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HandheldFeature extends Model
{
    use HasFactory;

    protected $fillable = [
        'merchant_id',
        'feature',
    ];

    /**
     * Get the merchant that owns the handheld feature.
     */
    public function merchant()
    {
        return $this->belongsTo(Merchant::class);
    }
} 