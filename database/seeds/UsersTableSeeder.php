<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        App\User::create([
          'name' =>'admin',
          'avatar'=>'some link',
          'password'=>bcrypt('admin'),
          'email'=>'admin@test.com',
          'admin'=> 1
        ]);
    }
}
