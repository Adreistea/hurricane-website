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
        Schema::create('merchants', function (Blueprint $table) {
            $table->id();
            $table->string('first_name', 100);
            $table->string('last_name', 100);
            $table->string('business_name', 255);
            $table->string('phone_number', 20);
            $table->string('business_email', 255);
            $table->string('monthly_volume', 50);
            $table->decimal('average_sale', 10, 2);
            $table->decimal('high_ticket', 10, 2);
            $table->boolean('privacy_agreement')->default(false);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('merchants');
    }
};
