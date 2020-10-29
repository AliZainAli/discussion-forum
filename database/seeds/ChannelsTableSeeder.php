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
        $channels = Channel::create ([
            'name' => 'Laravel 7.24',
            'slug' => str_slug('Laravel 7.24')
        ]);

        $channels = Channel::create([
            'name' => 'Vue js 3',
            'slug' => str_slug('Vue js 3')
        ]);

        $channels = Channel::create([
            'name' => 'Angular 8',
            'slug' => str_slug('Angular 8')
        ]);

        $channels = Channel::create([
            'name' => 'Node JS',
            'slug' => str_slug('Node JS')
        ]);
    }
}
