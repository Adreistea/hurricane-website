<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ConsultationRequest extends Model
{
    use HasFactory;

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'consultation_requests';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'full_name',
        'business_name',
        'phone_number',
        'email',
        'industry_type',
        'num_locations',
        'num_terminals',
        'processing_volume',
        'preferred_date',
        'start_hour',
        'start_minute',
        'start_period',
        'end_hour',
        'end_minute',
        'end_period',
        'time_zone',
        'goal_fee_elimination',
        'goal_pos',
        'goal_mobile',
        'goal_ecommerce',
        'goal_integration',
        'goal_funding',
        'goal_other',
        'other_goal_specification',
        'integration_software',
        'comments',
        'status',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array
     */
    protected $casts = [
        'preferred_date' => 'date',
        'goal_fee_elimination' => 'boolean',
        'goal_pos' => 'boolean',
        'goal_mobile' => 'boolean',
        'goal_ecommerce' => 'boolean',
        'goal_integration' => 'boolean',
        'goal_funding' => 'boolean',
        'goal_other' => 'boolean',
        'num_locations' => 'integer',
        'num_terminals' => 'integer',
    ];
}
