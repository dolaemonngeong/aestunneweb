<?php

namespace Database\Seeders;

use App\Models\Answer;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AnswerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Answer::create([
            'sentence' => "I think it depends on what perfume she usually use, it also depends on what she doing. As example I use YSL for wedding party or formal company meeting, then I use Calvin Klein for casual meeting with friends.",                    'question_id' => 4,
            'question_id' => 4,
            'user_id' => 1,
        ]);
        
        Answer::create([
            'sentence' => "Use acne medicine if u got acne",
            'question_id' => 1,
            'user_id' => 2,
        ]);
    
        Answer::create([
            'sentence' => "Just use Gatsby or something, don’t waste your money too much for something not permanent. You need to refill and more and it cost a lot of money.",
            'question_id' => 3,
            'user_id' => 3,
        ]);
        
        Answer::create([
            'sentence' => "Wash ur face only",
            'question_id' => 2,
            'user_id' => 4,
        ]);
    }
        
}

