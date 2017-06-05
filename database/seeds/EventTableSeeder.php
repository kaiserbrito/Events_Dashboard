<?php

use Illuminate\Database\Seeder;

class EventTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $event = new \App\Event([
            'imagePath' => 'http://technext.github.io/Evento/images/demo/bg-slide-01.jpg',
            'title' => 'Event Title',
            'detail' => 'Event Details'
        ]);
        $event->save();

        $event = new \App\Event([
            'imagePath' => 'http://technext.github.io/Evento/images/demo/bg-slide-01.jpg',
            'title' => 'Event Title',
            'detail' => 'Event Details'
        ]);
        $event->save();

        $event = new \App\Event([
            'imagePath' => 'http://technext.github.io/Evento/images/demo/bg-slide-01.jpg',
            'title' => 'Event Title',
            'detail' => 'Event Details'
        ]);
        $event->save();

        $event = new \App\Event([
            'imagePath' => 'http://technext.github.io/Evento/images/demo/bg-slide-01.jpg',
            'title' => 'Event Title',
            'detail' => 'Event Details'
        ]);
        $event->save();
    }
}
