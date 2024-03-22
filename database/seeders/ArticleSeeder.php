<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use App\Models\Article;
class ArticleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker=Faker::create('vi');
        for ($i= 0; $i<60; $i++) {
            Article::create([
                "id"=> $faker->randomNumber(2),
                "title"=> "Bài viết số: ".$i,
                "content"=> $faker->sentence(),
                "author"=>$faker->sentence(),
            ]);
    }
}
}
