<?php

class DatabaseSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		Eloquent::unguard();

		// $this->call('UserTableSeeder');
		$this->call('defaultUsers');
		$this->command->info('Standart uyeler Olu�turuldu !');
		
		$this->call('defaultsArticles');
		$this->command->info('Giri� Makaleleri Olu�turuldu !');
		
	}

}

class defaultUsers extends Seeder{

	public function run(){
		// �nce tabloyu s�f�rlar
		DB::table('users')->delete();
		// tabloya girilecek veriler
		DB::table('users')->insert(array(
			array(
				'username'=>'4spannen',
				'email'=>'4yusufdemir@gmail.com',
				'password'=>'asdasd',
				'name'=>'yusuf',
				'surname'=>'demir',
				'created_ip'=>'127.0.0.1',
				'created_at'=>date('Y-m-d H:i:s')
			),
            array(
                'username'=>'ysfdmr',
                'email'=>'ysfdmr@gmail.com',
                'password'=>'asdasd',
                'name'=>'yusuf1',
                'surname'=>'demir',
                'created_ip'=>'127.0.0.1',
                'created_at'=>date('Y-m-d H:i:s')
            )
        ));
	
	}

}

class defaultsArticles extends Seeder{

	public function run(){
		// �nce tabloyu s�f�rlar
		DB::table('articles')->delete();
		// tabloya girilecek veriler
		DB::table('articles')->insert(
			array(
				'head'=>'Test Blo�una Ho�geldiniz',
				'text'=>'Bu site Laravel 4.1 kullan�larak Yusuf Demir taraf�ndan yaz�lm��t�r. ileti�im : 4yusufdemir@gmail',
				'tags'=>'laravel,yusuf demir,4spannen,2013,framework',
				'user_id'=>1,
				'created_at'=>date('Y-m-d H:i:s')
			)
		);
	
	}

}