<?php

use App\Topic;
use Illuminate\Database\Seeder;

class TopicsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $topic = new Topic();
        $topic->title = 'Laravel';
        $topic->save();

        $topic = new Topic();
        $topic->title = 'React';
        $topic->save();

        $topic = new Topic();
        $topic->title = 'Bootstrap';
        $topic->save();
    }
}
