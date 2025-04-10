<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Lightbox extends Model
{
    use HasFactory;

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'lightboxes';

    /**
     * The primary key for the model.
     *
     * @var string
     */
    protected $primaryKey = 'lightbox_id';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'header',
        'description',
        'image',
        'status',
        'display_pages',
        'close_on_overlay',
        'show_once',
        'show_on_exit',
        'start_date',
        'end_date',
        'cta_text',
        'cta_url',
        'impressions',
        'clicks'
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array
     */
    protected $casts = [
        'display_pages' => 'array',
        'close_on_overlay' => 'boolean',
        'show_once' => 'boolean',
        'show_on_exit' => 'boolean',
        'start_date' => 'datetime',
        'end_date' => 'datetime',
        'impressions' => 'integer',
        'clicks' => 'integer',
    ];
    
    /**
     * Increment the impression count for this lightbox.
     *
     * @return void
     */
    public function recordImpression()
    {
        $this->increment('impressions');
    }
    
    /**
     * Increment the click count for this lightbox.
     *
     * @return void
     */
    public function recordClick()
    {
        $this->increment('clicks');
    }
    
    /**
     * Scope a query to only include active lightboxes.
     *
     * @param  \Illuminate\Database\Eloquent\Builder  $query
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function scopeActive($query)
    {
        return $query->where('status', 'active')
            ->where(function($q) {
                $q->whereNull('start_date')
                  ->orWhere('start_date', '<=', now());
            })
            ->where(function($q) {
                $q->whereNull('end_date')
                  ->orWhere('end_date', '>=', now());
            });
    }
}
