<?php

use Illuminate\Database\Seeder;

class RepliesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $r1=[
          'user_id' => 1,
          'discussion_id'=>1,
          'content'=>'Now you may use the db:seed Artisan command to seed your database. By default, the'
        ];
        $r2=[
          'user_id' => 1,
          'discussion_id'=>2,
          'content'=>'Now you may use the db:seed Artisan command to seed your database. By default, the'
        ];
        $r3=[
          'user_id' => 1,
          'discussion_id'=>3,
          'content'=>'Now you may use the db:seed Artisan command to seed your database. By default, the'
        ];
        $r4=[
          'user_id' => 1,
          'discussion_id'=>4,
          'content'=>'Now you may use the db:seed Artisan command to seed your database. By default, the'
        ];
        $r5=[
          'user_id' => 1,
          'discussion_id'=>5,
          'content'=>'Now you may use the db:seed Artisan command to seed your database. By default, the'
        ];

        App\Reply::create($r1);
        App\Reply::create($r2);
        App\Reply::create($r3);
        App\Reply::create($r4);
        App\Reply::create($r5);
    }
}
