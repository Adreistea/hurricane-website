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
        Schema::create('system_configurations', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('merchant_id');
            $table->string('number_of_locations', 10);
            $table->string('number_of_registers', 10);
            $table->string('number_of_servers', 10)->nullable();
            $table->boolean('handhelds_needed')->nullable();
            $table->integer('number_of_handhelds')->nullable();
            $table->boolean('customer_displays_needed')->nullable();
            $table->text('additional_requirements')->nullable();
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
        Schema::dropIfExists('system_configurations');
    }
};
