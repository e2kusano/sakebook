<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDrinksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('drinks', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name',50)->comment('名前');
            $table->integer('abv')->comment('アルコール度数')->nullable();
            $table->integer('color')->comment('色')->nullable();
            $table->integer('split')->comment('割り物')->nullable();
            $table->integer('taste')->comment('テイスト')->nullable();
            $table->integer('glass_type')->comment('グラスタイプ')->nullable();
            $table->integer('recipe')->comment('製法')->nullable();
            $table->integer('flavor')->comment('味')->nullable();
            $table->string('image_url')->comment('画像')->nullable();
            $table->string('detail',1500)->comment('作り方');
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
        Schema::dropIfExists('drinks');
    }
}
