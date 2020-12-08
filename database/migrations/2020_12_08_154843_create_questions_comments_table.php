<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateQuestionsCommentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('questions_comments', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer("question_id");
            $table->integer("user_id");
            $table->char("comment")->nullable();
            $table->char("create_user")->nullable();
            $table->datetime("create_date")->nullable():
            $table->char("update_user")->nullable();
            $table->datetime("update_date")->nullable():
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
        Schema::dropIfExists('questions_comments');
    }
}
