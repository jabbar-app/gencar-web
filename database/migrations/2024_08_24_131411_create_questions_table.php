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
        Schema::create('questions', function (Blueprint $table) {
            $table->id();
            $table->text('question');
            $table->string('quiz_stage')->default('penyisihan');
            $table->enum('difficulty', ['easy', 'medium', 'hard'])->default('easy');
            $table->enum('category', ['Sejarah', 'Geografi', 'Budaya Indonesia', 'Pencapaian Indonesia', 'FIM Medan'])->default('Sejarah');
            $table->timestamps();
        });

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('questions');
    }
};
