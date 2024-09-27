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
        Schema::create('banner_adsvertisements', function (Blueprint $table) {
            $table->id();
            $table->string('link');
            $table->string('type');
            $table->string('thumbnail');
            $table->enum('is_active',['active', 'non_active'])->default('non_active');
            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('banner_adsvertisements');
    }
};