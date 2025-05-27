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
            Schema::create('business_details', function (Blueprint $table) {
                $table->id();
                $table->unsignedBigInteger('merchant_id');
                $table->string('business_entity_type', 50);
                $table->string('industry_type', 100);
                $table->string('dba', 255)->nullable();
                $table->string('product_service', 255);
                $table->string('business_phone', 20);
                $table->integer('year_started');
                $table->string('website', 255)->nullable();
                $table->string('address_line1', 255);
                $table->string('address_line2', 255)->nullable();
                $table->string('city', 100);
                $table->string('state', 2);
                $table->string('zip', 10);
                
                // Payment acceptance fields
                $table->boolean('accept_visa_mastercard_discover')->default(false);
                $table->boolean('accept_amex_optblue')->default(false);
                $table->boolean('accept_amex_esa')->default(false);
                $table->string('amex_esa_number', 50)->nullable();
                $table->boolean('accept_pin_debit')->default(false);
                $table->boolean('accept_ebt')->default(false);
                $table->string('ebt_fns_number', 50)->nullable();
                $table->text('notes')->nullable();
                
                // Sales Method Percentages
                $table->decimal('in_person_percentage', 5, 2)->default(90.00);
                $table->decimal('mail_phone_percentage', 5, 2)->default(0.00);
                $table->decimal('ecommerce_percentage', 5, 2)->default(10.00);
                
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
        Schema::dropIfExists('business_details');
    }
};
