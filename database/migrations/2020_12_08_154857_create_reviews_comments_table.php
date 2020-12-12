<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateReviewsCommentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reviews_comments', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->number("review_id");
            $table->number("user_id");
            $table->char("comment")->nullable();
            $table->number("game_score")->nullable();
            $table->char("create_user")->nullable();
            $table->dateTime('create_date')->nullable();
            $table->char("update_user")->nullable();
            $table->dateTime('update_date')->nullable();
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
        Schema::dropIfExists('reviews_comments');
    }
}
