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
        Schema::table('chats', function (Blueprint $table) {
            $table->enum('persistence_type', ['forever', '15_days', '30_days', 'on_logout'])->default('30_days');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {//
        Schema::table('chats', function (Blueprint $table) {
            $table->dropColumn('persistence_type');
        });
    }
};//
