<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLikesTable extends Migration
{
    public function up()
    {
        Schema::create('likes', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id')->unsigned();
            $table->integer('create_id')->unsigned();
            $table->timestamps();

            //userが削除されたとき、それに関連するlikeも一気に削除される
            $table->foreign('user_id')
                ->references('id')
                ->on('users')
                ->onDelete('cascade');

            //createが削除されたとき、それに関連するlikeも一気に削除される
            $table->foreign('create_id')
                ->references('id')
                ->on('creates')
                ->onDelete('cascade');
            //一意な値を指定
            $table->unique(['user_id','create_id']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('likes');
    }
}
