<?php

use Illuminate\Database\Seeder;
use App\Task;
class TagSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $task = new Task([
            'title'=>"Salom IUT, Hello"
        ]);
        $task->save();
        
        $task = new Task([
            'title'=>"Stay at home"
        ]);
        $task->save();
    }
}
