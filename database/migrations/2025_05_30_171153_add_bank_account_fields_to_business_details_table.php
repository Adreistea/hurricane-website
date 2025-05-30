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
            // Primary Bank Account
            $table->string('routing_number_1')->nullable();
            $table->string('account_number_1')->nullable();
            $table->enum('bank_account_1_purpose', ['debits', 'deposits', 'both', 'other'])->nullable();
            $table->string('bank_account_1_other_description')->nullable();
            
            // Secondary Bank Account
            $table->string('routing_number_2')->nullable();
            $table->string('account_number_2')->nullable();
            $table->enum('bank_account_2_purpose', ['debits', 'deposits', 'both', 'other'])->nullable();
            $table->string('bank_account_2_other_description')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('business_details', function (Blueprint $table) {
            $table->dropColumn([
                'routing_number_1',
                'account_number_1',
                'bank_account_1_purpose',
                'bank_account_1_other_description',
                'routing_number_2',
                'account_number_2',
                'bank_account_2_purpose',
                'bank_account_2_other_description'
            ]);
        });
    }
};
