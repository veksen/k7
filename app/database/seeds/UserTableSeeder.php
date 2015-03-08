<?php

class UserTableSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		Eloquent::unguard();

		$user = new User;
		$user->email = 'jp@veksen.net';
		$user->password = Hash::make('m0np4s5');
		$user->save();

		$user = new User;
		$user->email = 'bab_thegreat@hotmail.com';
		$user->password = Hash::make('fr4k7');
		$user->save();

		$user = new User;
		$user->email = 'joey@droetto.com';
		$user->password = Hash::make('j0eyk7');
		$user->save();
	}

}