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
        Schema::create('pemancars', function (Blueprint $table) {
            $table->id();
            $table->string('address');
            $table->decimal('longitude');
            $table->decimal('latitute');
            $table->decimal('service');
            $table->decimal('height');
            $table->decimal('modullation');
            $table->decimal('gain');
            $table->decimal('frequency');
            $table->decimal('transmit_power');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pemancars');
    }
};
