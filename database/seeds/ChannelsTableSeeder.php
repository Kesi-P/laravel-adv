<?php

use App\Channel;
use Illuminate\Database\Seeder;

class ChannelsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $channel1 =['title' => 'Laravel'];
        $channel2 =['title' => 'Vuejs'];
        $channel3 =['title' => 'css3'];
        $channel4 =['title' => 'Javascript'];
        $channel5 =['title' => 'PHP'];

        App\Channel::create($channel1);
        App\Channel::create($channel2);
        App\Channel::create($channel3);
        App\Channel::create($channel4);
        App\Channel::create($channel5);
    }
}
