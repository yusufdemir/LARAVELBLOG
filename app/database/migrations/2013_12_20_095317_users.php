<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Users extends Migration {

	/**
	 * Run the migrations.
	 * 
	 * @return void
	 */
	 //Migrate işleminte oluşturulacak veritabanına ait özellikler eklenir...
	public function up()
	{
		Schema::create('users',function(Blueprint $table)
			{
                $table->engine ='InnoDB';
				$table->increments('id');
				$table->string('username',64)->unique();
				$table->string('email',128)->unique();
				$table->string('password');
				$table->string('name')->nullable();
				$table->string('surname')->nullable();
				$table->timestamps();
				$table->string('created_ip',15);
			});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	 //migrate işlemi rolback yapıldığında kaldırılacak işlemler yapılır. genellikle drop(sil işlemi yapılır...)
	public function down()
	{
		Schema::drop('users');
	}

}