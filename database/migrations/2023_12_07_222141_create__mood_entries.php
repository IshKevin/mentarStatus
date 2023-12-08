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
        Schema::create('_mood_entries', function (Blueprint $table) {
            $table->id('entry_id')->autoIncrement()->unique();
            $table->unsignedBigInteger('user_id');
            $table->foreign('user_id')->references('id')->on('subscribers');
            $table->date("entry_date");
            $table->unsignedBigInteger('question_id');
            $table->foreign('question_id')->references('question_id')->on('_daily_mood_questions');
            $table->integer('mood_score');
            $table->string('additional_notes');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('_mood_entries');
    }
};
