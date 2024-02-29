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
        Schema::create('cate_book_lists', function (Blueprint $table) {
            $table->bigIncrements('id');
            
            $table->integer('category_id')->unsigned();
            $table->integer('book_id')->unsigned();

            /**
             * FK
             */
            // $table->foreign('category_id')->references('id')->on('categories')->onDelete('cascade');
            // $table->foreign('book_id')->references('id')->on('books')->onDelete('cascade');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('cate_book_lists');
    }
};
