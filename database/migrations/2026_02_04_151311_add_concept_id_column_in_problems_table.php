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
        Schema::table('problems', function (Blueprint $table) {
            // concept id as bigint
            $table->unsignedBigInteger('concept_id');

            // set it as foreign key
            $table->foreign('concept_id')->references('id')->on('concepts')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('problems', function (Blueprint $table) {
            // remove the foreign key and index created..
            $table->dropForeign(['concept_id']);

            // then, remove column
            $table->dropColumn('concept_id');
        });
    }
};
