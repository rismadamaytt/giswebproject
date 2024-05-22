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
        Schema::create('locations', function (Blueprint $table) {
            $table->id();
            $table->string('alamat');
            $table->double('longitude');
            $table->double('latitude');
            $table->string('metode');
            $table->unsignedBigInteger('kategori_id');
            $table->string('kategori');
            $table->unsignedBigInteger('wilayah_id');
            $table->string('wilayah');
            $table->double('jarak');
            $table->double('vqm');
            $table->double('ssim');
            $table->double('psnr');
            $table->double('pathloss');
            $table->double('link_budget');
            $table->double('field_strength');
            $table->double('cnr');
            $table->double('snr');
            $table->double('ber');
            $table->string('kesimpulan');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('locations');
    }
};
