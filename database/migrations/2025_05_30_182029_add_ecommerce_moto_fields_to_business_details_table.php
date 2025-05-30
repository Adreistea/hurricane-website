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
            // Inventory Maintained fields
            $table->string('inventory_maintained')->nullable(); // Can store multiple selections as comma-separated
            $table->text('inventory_off_site_address')->nullable(); // Address for off-site warehouse
            $table->boolean('has_fulfillment_center')->default(false); // 3rd party fulfillment center
            $table->text('fulfillment_agreement_file')->nullable(); // Store fulfillment agreement details
            $table->boolean('service_only_no_products')->default(false); // Service Only option
            
            // Other companies involved in shipping/fulfillment
            $table->boolean('other_companies_involved_shipping')->default(false);
            $table->text('other_companies_fulfillment_details')->nullable(); // Details about other companies
            $table->boolean('other_companies_agreement_provided')->default(false);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('business_details', function (Blueprint $table) {
            $table->dropColumn([
                'inventory_maintained',
                'inventory_off_site_address',
                'has_fulfillment_center',
                'fulfillment_agreement_file',
                'service_only_no_products',
                'other_companies_involved_shipping',
                'other_companies_fulfillment_details',
                'other_companies_agreement_provided'
            ]);
        });
    }
};
