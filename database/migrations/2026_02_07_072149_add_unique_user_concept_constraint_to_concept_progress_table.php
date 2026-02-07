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
        // when migrate..
        Schema::table('concept_progress', function (Blueprint $table) {
            $table->unique(columns: ['user_id', 'concept_id'], name: 'user_concept_progress');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        // when rollback..
        Schema::table('concept_progress', function (Blueprint $table) {
            $table->dropUnique('user_concept_progress');
        });
    }
};
