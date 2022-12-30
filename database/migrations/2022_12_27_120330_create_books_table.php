<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('books', function (Blueprint $table) {
            $table->id('id_book');
            $table->string('title');
            $table->foreignId('author')->references('id_author')->on('authors');
            $table->foreignId('publisher_id')->references('id_publisher')->on('publishers');
            $table->foreignId('cathegory_id')->references('id_cathegory')->on('cathegories');
            $table->integer('age_to_rent');
            $table->boolean('is_rented')->default(0);
            $table->boolean('active')->default(1);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('books');
    }
};
