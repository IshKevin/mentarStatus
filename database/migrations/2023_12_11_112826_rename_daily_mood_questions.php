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
        Schema::rename('_daily_mood_questions', 'mood-questions');
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::rename('mood-questions', '_daily_mood_questions');
    }
};
