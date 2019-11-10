<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUserTblsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_tbl', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('login_id');
            $table->string('password');
            $table->string('name');
            $table->string('email');
            $table->string('address')->nullable();
            $table->integer('age')->nullable();;
            $table->integer('gender')->nullable();;
            $table->text('avatar')->nullable();
            $table->string('api_token')->nullable();;
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
        Schema::dropIfExists('user_tbl');
    }
}
