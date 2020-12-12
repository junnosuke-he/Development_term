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
            $table->number("user_id");
            $table->number("prefecture_id");
            $table->char("name")->nullable();
            $table->char("gender")->nullable();
            $table->char("introduction")->nullable();
            $table->char('image_path')->nullable();
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
        Schema::dropIfExists('profiles');
    }
}
