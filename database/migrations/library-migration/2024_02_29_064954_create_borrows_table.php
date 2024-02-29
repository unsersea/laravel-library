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
        Schema::create('borrows', function (Blueprint $table) {
            $table->bigIncrements('id');

            $table->date('borrow_day');
            $table->date('due_day');

            $table->string('account_id', 25);
            $table->integer('book_id')->unsigned();

            // $table->foreign('account_id')->references('username')->on('accounts')->onDelete('cascade');
            // $table->foreign('book_id')->references('id')->on('books')->onDelete('cascade');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('borrows');
    }
};
