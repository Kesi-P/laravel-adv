<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //do migrate refresh to run all these or run db:seed one by one
         $this->call(UsersTableSeeder::class);
         $this->call(ChannelsTableSeeder::class);
         $this->call(DiscussionsTableSeeder::class);
         $this->call(RepliesTableSeeder::class);
    }
}
