<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SelectedBundle extends Model
{
    use HasFactory;

    protected $fillable = [
        'merchant_id',
        'bundle_name',
        'price',
        'quantity',
    ];

    /**
     * Get the merchant that owns the selected bundle.
     */
    public function merchant()
    {
        return $this->belongsTo(Merchant::class);
    }
} 