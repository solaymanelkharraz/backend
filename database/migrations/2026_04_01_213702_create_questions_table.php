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
            $table->text('scenario'); // The story/situation
            $table->string('option_a'); // The first choice
            $table->string('option_b'); // The second choice
            $table->string('correct_answer'); // 'A' or 'B'
            $table->text('feedback'); // The 'Dead End' message if they guess wrong
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
