<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBulletinBoardsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bulletin_boards', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer("bulletin_board_id");
            $table->integer("user_id");
            $table->char("title");
            $table->char("text");
            $table->char("area")->nullable();
            $table->char("member")->nullable();
            $table->char("created_user")->nullable();
            $table->dateTime('created_at')->nullable();
            $table->char("updated_user")->nullable();
            $table->dateTime('updated_at')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('bulletin_boards');
    }
}
