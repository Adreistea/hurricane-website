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
        Schema::table('owner_information', function (Blueprint $table) {
            // Make dl_state nullable since it was removed from the form
            $table->string('dl_state')->nullable()->change();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('owner_information', function (Blueprint $table) {
            // Revert back to not nullable
            $table->string('dl_state')->nullable(false)->change();
        });
    }
};
