<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateReviewsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reviews', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer("review_id");
            $table->integer("user_id");
            $table->char("game_title")->nullable();
            $table->char("text")->nullable();
            $table->integer("play_member")->nullable();
            $table->char("game_image")->nullable();
            $table->char("create_user")->nullable();
            $table->dateTime('create_at')->nullable();
            $table->char("update_user")->nullable();
            $table->dateTime('update_at')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('reviews');
    }
}
