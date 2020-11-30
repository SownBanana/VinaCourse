<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TopicSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $baseTopics = ["Programming", "Java", "C/C++", "C#", "Laravel",
        "PHP", "AI", "Machine Learning", "Computer Vision", "Science", "Life", "Art",
        "Adobe", "Design", "Photoshop", "Illustrator", "Premiere", "Maths", "Physics"];

        for ($i = 0; $i < count($baseTopics); $i++) {
            DB::table('topics')->insert([
                'name' => $baseTopics[$i]
            ]);
        }
    }
}
