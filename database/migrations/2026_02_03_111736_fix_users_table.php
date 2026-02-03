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
        Schema::table('users', function (Blueprint $table) {
            $table->string('first_name');
            $table->string('last_name');
            $table->string('phone_number')->unique();
            $table->enum('role', ['admin', 'user'])->default('user');
            $table->string('bio')->nullable();
            $table->enum('gender', ['male', 'female', 'prefer_not_to_say'])->default('prefer_not_to_say');
            $table->string('profile_image_url')->nullable();
            $table->boolean('is_active')->default(true);
            $table->timestamp('last_login_at')->nullable();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    // when rollback
    public function down(): void
    {
        Schema::table('users', function (Blueprint $table) {
            $table->dropColumn('first_name');
            $table->dropColumn('last_name');
            $table->dropColumn('phone_number');
            $table->dropColumn('role');
            $table->dropColumn('bio');
            $table->dropColumn('gender');
            $table->dropColumn('profile_image_url');
            $table->dropColumn('is_active');
            $table->dropColumn('last_login_at');
        });
    }
};
