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
        Schema::create('owner_information', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('merchant_id');
            $table->string('owner_first_name', 100);
            $table->string('owner_last_name', 100);
            $table->string('title', 100);
            $table->date('date_of_birth');
            $table->decimal('ownership_percentage', 5, 2);
            $table->string('drivers_license', 50);
            $table->string('dl_state', 2);
            $table->string('owner_phone', 20);
            $table->string('ssn', 9);
            $table->string('home_address_line1', 255);
            $table->string('home_address_line2', 255)->nullable();
            $table->string('city', 100);
            $table->string('home_state', 2);
            $table->string('home_zip', 10);
            $table->timestamps();
            
            // Add foreign key separately
            $table->foreign('merchant_id')
                  ->references('id')
                  ->on('merchants')
                  ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('owner_information');
    }
};
