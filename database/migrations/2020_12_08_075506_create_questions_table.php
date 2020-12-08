<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateQuestionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('questions', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->number("question_id");
            $table->integer("user_id");
            $table->char("title")->nullable();
            $table->char("text")->nullable();
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
        Schema::dropIfExists('questions');
    }
}