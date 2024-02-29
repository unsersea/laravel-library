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
        Schema::create('books', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('number_of_copy');
            $table->text('images');
            $table->text('thumbnail');
            $table->tinyInteger('isShow')->default('0');

            /**
             * FK
             */
            $table->integer('publisher_id')->unsigned();
            // $table->foreign('publisher_id')->references('id')->on('publishers')->onDelete('cascade');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('books');
    }
};
