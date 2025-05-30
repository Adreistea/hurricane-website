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
            // Change other_companies_involved_shipping from boolean to string
            $table->string('other_companies_involved_shipping')->nullable()->change();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('business_details', function (Blueprint $table) {
            // Revert back to boolean
            $table->boolean('other_companies_involved_shipping')->default(false)->change();
        });
    }
};
