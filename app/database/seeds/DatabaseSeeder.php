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
		$this->command->info('Standart uyeler Olusturuldu !');
		
		$this->call('defaultsArticles');
		$this->command->info('Giris Makaleleri Olusturuldu !');

        $this->call('defaultimages');
        $this->command->info('Test Resimleri Olusturuldu !');
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
				'head'=>'Test Bloğuna Hoşgeldiniz',
				'text'=>'Bu site Laravel 4.1 kullanalarak Yusuf Demir tarafından yazılmıştır. iletişim : 4yusufdemir@gmail',
				'tags'=>'laravel,yusuf demir,4spannen,2013,framework',
				'user_id'=>1,
				'created_at'=>date('Y-m-d H:i:s')
			)
		);
	
	}

}

class defaultimages extends  Seeder{

    public function run(){
        DB::table('images')->delete();
        DB::table('images')->insert(array(
            array(
                'head'=>'Test Resim 1',
                'text'=>'Resim Açıklaması',
                'tags'=>'laravel,yusuf demir,4spannen,2013,framework',
                'src'=>'http://nexthon.com/vmp/uploads/54229abfcfa5649e7003b83dd4755294.jpg',
                'user_id'=>1,
                'created_at'=>date('Y-m-d H:i:s')
            ),
            array(
                'head'=>'Test Resim 2',
                'text'=>'Resim Açıklaması 2',
                'tags'=>'laravel,yusuf demir,4spannen,2013,framework',
                'src'=>'http://nexthon.com/vmp/uploads/92cc227532d17e56e07902b254dfad10.jpg',
                'user_id'=>1,
                'created_at'=>date('Y-m-d H:i:s')
            )
            )
        );
    }
}