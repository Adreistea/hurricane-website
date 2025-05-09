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
        Schema::create('business_profiles', function (Blueprint $table) {
            $table->id();
            $table->foreignId('merchant_id')->constrained()->onDelete('cascade');
            $table->string('profile_type', 50); // "Restaurant", "Retail", "Service", "Mobile", "Online"
            $table->string('current_pos_status', 255)->nullable();
            $table->string('order_management_method', 255)->nullable();
            $table->string('customer_engagement_tools', 255)->nullable();
            $table->string('staff_confidence', 255)->nullable();
            $table->string('technical_support', 255)->nullable();
            $table->string('complete_solution_response', 255)->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('business_profiles');
    }
};
