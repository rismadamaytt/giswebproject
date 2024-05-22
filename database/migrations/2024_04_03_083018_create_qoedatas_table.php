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
        Schema::create('qoedatas', function (Blueprint $table) {
            $table->id();
            $table->decimal('longitude');
            $table->decimal('latitute')->default(0);
            $table->string('wilayah');
            $table->string('kelurahan');
            $table->decimal('vqm');
            $table->decimal('ssim');
            $table->decimal('psnr');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('qoedatas');
    }
};
