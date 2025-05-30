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
        Schema::table('business_details', function (Blueprint $table) {
            // Building Type
            $table->enum('building_type', ['shopping_center', 'office_building', 'industrial_building', 'residence'])->nullable();
            
            // Merchant
            $table->enum('merchant_status', ['owns', 'rents'])->nullable();
            
            // Area Zoned
            $table->enum('area_zoned', ['commercial', 'industrial', 'residential'])->nullable();
            
            // Square Footage
            $table->enum('square_footage', ['0-500', '501-2500', '2501-5000', '5001-10000', '10000+'])->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('business_details', function (Blueprint $table) {
            $table->dropColumn([
                'building_type',
                'merchant_status', 
                'area_zoned',
                'square_footage'
            ]);
        });
    }
};
