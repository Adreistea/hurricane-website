<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('consultation_requests', function (Blueprint $table) {
            $table->id();
            
            // Contact Information
            $table->string('full_name');
            $table->string('business_name');
            $table->string('phone_number');
            $table->string('email');
            
            // Business Details
            $table->string('industry_type');
            $table->integer('num_locations')->nullable();
            $table->integer('num_terminals')->nullable();
            $table->string('processing_volume')->nullable();
            
            // Scheduling Preferences
            $table->date('preferred_date');
            $table->string('start_hour');
            $table->string('start_minute');
            $table->string('start_period'); // AM/PM
            $table->string('end_hour');
            $table->string('end_minute');
            $table->string('end_period'); // AM/PM
            $table->string('time_zone');
            
            // Goals
            $table->boolean('goal_fee_elimination')->default(false);
            $table->boolean('goal_pos')->default(false);
            $table->boolean('goal_mobile')->default(false);
            $table->boolean('goal_ecommerce')->default(false);
            $table->boolean('goal_integration')->default(false);
            $table->boolean('goal_funding')->default(false);
            $table->boolean('goal_other')->default(false);
            $table->string('other_goal_specification')->nullable();
            $table->string('integration_software')->nullable();
            
            // Additional Comments
            $table->text('comments')->nullable();
            
            // Status
            $table->enum('status', ['pending', 'scheduled', 'completed', 'cancelled'])->default('pending');
            
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('consultation_requests');
    }
};
