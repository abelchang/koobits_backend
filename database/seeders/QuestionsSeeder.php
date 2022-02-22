<?php

namespace Database\Seeders;

use App\Models\Questions;
use App\Models\Answers;
use CreateQuestionsTable;
use Illuminate\Database\Seeder;
use Symfony\Component\Console\Question\Question;

class QuestionsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //

        for ($i = 0; $i < 100; $i++) {
            $q1 = rand(1, 99);
            $q2 = rand(1, 99);
            $ans = $q1 + $q2;
            $id = 100900 + $i;
            $title = $q1 . '+' . $q2 . '=';
            $difficulty = rand(1, 5);

            Questions::create(['id' => $id, 'question' => $title, 'difficulty' => $difficulty]);
            Answers::create(['id' => $id, 'answer' => $ans]);
        }
    }
}
