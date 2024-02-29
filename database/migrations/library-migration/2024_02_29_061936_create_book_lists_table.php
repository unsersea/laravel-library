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
        Schema::create('book_lists', function (Blueprint $table) {
            $table->bigIncrements('id');
            
            $table->string('account_id', 25);
            $table->string('fullname', 25);

            /**
             * FK
             */
            // $table->foreign('account_id')->references('username')->on('accounts')->onDelete('cascade');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('book_lists');
    }
};
