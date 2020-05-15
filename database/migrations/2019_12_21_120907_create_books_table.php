<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBooksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('books', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('book_id')->default(null)->nullable();
            $table->integer('best_book_id')->default(0)->nullable();
            $table->integer('work_id')->default(0)->nullable();

            $table->integer('books_count')->default(0)->nullable();

            $table->string('isbn')->default("none")->nullable();

            $table->bigInteger('isbn13')->default(0)->nullable();

            $table->longText('authors')->default("none")->nullable();

            $table->integer('original_publication_year')->default(0000)->nullable();

            $table->longText('original_title')->default("none")->nullable();

            $table->longText('title')->default("none")->nullable();

            $table->string('language_code')->default("none")->nullable();

            $table->float('average_rating')->default(0.0)->nullable();

            $table->integer('ratings_count')->default(0)->nullable();

            $table->integer('work_ratings_count')->default(0)->nullable();

            $table->integer('work_text_reviews_count')->default(0)->nullable();

            $table->bigInteger('ratings_1')->default(0.0)->nullable();

            $table->bigInteger('ratings_2')->default(0.0)->nullable();

            $table->bigInteger('ratings_3')->default(0.0)->nullable();

            $table->bigInteger('ratings_4')->default(0.0)->nullable();

            $table->bigInteger('ratings_5')->default(0.0)->nullable();

            $table->string('image_url')->default("none")->nullable();

            $table->string('small_image_url')->default("none")->nullable();

            $table->timestamps();
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
}
