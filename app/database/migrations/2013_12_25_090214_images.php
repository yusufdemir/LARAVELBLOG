<?php
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Images extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
    public function up()
    {
        //Articles tablosu
        Schema::create('images',function(Blueprint $table)
        {
            $table->engine ='InnoDB';
            $table->increments('id');
            $table->string('head',240);
            $table->string('text')->nullable();
            $table->string('tags')->nullable();
            $table->string('src');
            $table->integer('user_id')->unsigned();
            $table->timestamps();

            $table->foreign('user_id')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('images');
    }

}