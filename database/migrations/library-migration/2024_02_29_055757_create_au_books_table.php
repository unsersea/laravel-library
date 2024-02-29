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
        Schema::create('au_books', function (Blueprint $table) {
            $table->bigIncrements('id');
            /**
             * FK
             */
            $table->integer('author_id')->unsigned();
            $table->integer('book_id')->unsigned();

            // $table->foreign('author_id')->references('id')->on('authors')->onDelete('cascade');
            // $table->foreign('book_id')->references('id')->on('books')->onDelete('cascade');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('au_books');
    }
};
