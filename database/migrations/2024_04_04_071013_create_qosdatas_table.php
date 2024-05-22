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
        Schema::create('qosdatas', function (Blueprint $table) {
            $table->id();
            $table->decimal('longitude');
            $table->decimal('latitute');
            $table->string('wilayah');
            $table->string('kelurahan');
            $table->decimal('pathloss');
            $table->decimal('link_budget');
            $table->decimal('field_strength');
            $table->decimal('cnr');
            $table->decimal('snr');
            $table->decimal('ber');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('qosdatas');
    }
};
