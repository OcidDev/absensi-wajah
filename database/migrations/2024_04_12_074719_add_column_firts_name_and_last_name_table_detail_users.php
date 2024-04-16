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
        //add column first_name and last_name table detail_users
        Schema::table('detail_users', function (Blueprint $table) {
            $table->string('first_name', 40)->after('user_id');
            $table->string('last_name', 40)->after('first_name');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //drop column first_name and last_name table detail_users
        Schema::table('detail_users', function (Blueprint $table) {
            $table->dropColumn(['first_name', 'last_name']);
        });
    }
};
