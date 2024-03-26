<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Article;
use Faker\Factory as Faker;
class ArticleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create();
        for ($i = 0; $i < 60; $i++) {
            Article::create([
                "id"=> $faker->randomNumber(5),
                "title"=> $faker->title,
                "content"=> $faker->sentence(250,true),
                "author"=>$faker->text(20)
                
            ]);
        }
    }
}
