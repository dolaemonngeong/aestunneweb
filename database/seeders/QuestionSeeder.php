<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Category;
use App\Models\Question;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class QuestionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $index=0;
            foreach(Category::all() as $c){
                if($index==0){
                    Question::create([
                        'sentence' => "What’s the the best skincare for sensitive skin? I used Pond’s before but my skin become reddish due to mild irritation.",
                        'category_id' => $c->id,
                        'user_id' => 1,
                    ]);
                }else if($index==1){
                    Question::create([
                        'sentence' => "What’s the good steps of skincare for morning?",
                        'category_id' => $c->id,
                        'user_id' => 2,
                    ]);
                }else if($index==2){
                    Question::create([
                        'sentence' => "I’ve got a big acne however I used acne medication from A**es.  Is there any recomendation skicare products?",
                        'category_id' => $c->id,
                        'user_id' => 3,
                    ]);
                }else if($index==3){
                Question::create([
                    'sentence' => "What’s the best perfume for a woman? I want to buy a gift for my aunt since she love to use perfume. Is there any recommendation?",
                    'category_id' => $c->id,
                    'user_id' => 4,
                ]);
            }
            $index++;
        }
    
    }
}
