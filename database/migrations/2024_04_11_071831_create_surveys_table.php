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
        Schema::create('surveys', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('address');
            $table->string('question_1');
            $table->string('question_2');
            $table->string('question_3');
            $table->string('question_4');
            $table->integer('question_5');
            $table->integer('question_6');
            $table->integer('question_7');
            $table->integer('question_8');
            $table->string('question_9');
            $table->integer('question_10');
            $table->integer('question_11');
            $table->integer('question_12');
            $table->integer('question_13');
            $table->integer('question_14');
            $table->integer('question_15');
            $table->integer('question_16');
            $table->integer('question_17');
            $table->integer('question_18');
            $table->integer('question_19');
            $table->integer('question_20');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('surveys');
    }
};
