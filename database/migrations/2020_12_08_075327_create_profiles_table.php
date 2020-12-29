<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProfilesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('profiles', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer("user_id");
            $table->integer("prefecture_id");
            $table->char("name");
            $table->char("gender")->nullable();
            $table->char("introduction")->nullable();
            $table->char('image_path')->nullable();
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
        Schema::dropIfExists('profiles');
    }
}
