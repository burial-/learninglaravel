<?php

class UsersTableSeeder extends Seeder {

	public function run()
	{
		User::truncate();
		
		User::create([
			'username' 	=> 'Leroy',
			'email'		=> 'leroy@dogs.com',
			'password'	=> '1234'
		]);

		User::create([
			'username' 	=> 'Lassie',
			'email'		=> 'lassie@dogs.com',
			'password'	=> '1234'
		]);
	}

}