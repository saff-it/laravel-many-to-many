<?php

use App\Models\Admin\Post;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;

class PostTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for ($i=0; $i < 25; $i++) { 
            $newPost = new Post();
            $newPost->author = $faker->userName();
            $newPost->title = $faker->realText(50);
            $newPost->post_content = $faker->paragraph(10, true);
            $newPost->post_date = $faker->dateTimeThisYear();

            $newPost->save();
        }
    }
}
