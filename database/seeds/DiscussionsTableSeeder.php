<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
class DiscussionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      $t1 ='Introduction';
      $t2 ='Writing Seeders';
      $t3 ='Using Model Factories';
      $t4 ='Calling Additional Seeders';
        $d1=[
        'title' => $t1,
        'content' => 'Laravel includes a simple method of seeding your database with test data using seed',
        'channel_id' =>1,
        'user_id' => 1,
        'slug' => Str::slug($t1)
        ];
        $d2=[
        'title' => $t2,
        'content' => 'For example, lets create 50 users and attach a relationship to each user:',
        'channel_id' =>2,
        'user_id' => 1,
        'slug' => Str::slug($t2)
        ];
        $d3=[
        'title' => $t3,
        'content' => 'seed classes. Using the call method allows you to break up your database seeding',
        'channel_id' =>3,
        'user_id' => 1,
        'slug' => Str::slug($t3)
          ];
        $d4=[
        'title' => $t4,
        'content' => 'into multiple files so that no single seeder class becomes overwhelmingly large. Pass',
        'channel_id' =>4,
        'user_id' => 1,
        'slug' => Str::slug($t4)
        ];

        App\Discussion::create($d1);
        App\Discussion::create($d2);
        App\Discussion::create($d3);
        App\Discussion::create($d4);
        }
}
