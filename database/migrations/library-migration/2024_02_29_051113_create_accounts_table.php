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
        Schema::create('accounts', function (Blueprint $table) {
            // $table->id();
            $table->string('username', 25)->primary();
            $table->string('password');
            $table->tinyInteger('role')->default('0');
            $table->tinyInteger('verify_email')->default('0');
            $table->integer('token');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('accounts');
    }
};
