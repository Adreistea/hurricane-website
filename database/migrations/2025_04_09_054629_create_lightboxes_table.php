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
        Schema::create('lightboxes', function (Blueprint $table) {
            $table->id('lightbox_id');
            $table->string('header');
            $table->text('description')->nullable();
            $table->string('image')->nullable();
            $table->enum('status', ['draft', 'active', 'inactive'])->default('draft');
            $table->json('display_pages')->nullable();
            $table->boolean('close_on_overlay')->default(true);
            $table->boolean('show_once')->default(false);
            $table->boolean('show_on_exit')->default(false);
            $table->timestamp('start_date')->nullable();
            $table->timestamp('end_date')->nullable();
            $table->string('cta_text')->default('Request a Consultation Now');
            $table->string('cta_url')->nullable();
            $table->integer('impressions')->default(0);
            $table->integer('clicks')->default(0);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('lightboxes');
    }
};
