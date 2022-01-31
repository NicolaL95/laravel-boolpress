<?php

use Illuminate\Database\Seeder;
use Faker\Generator as Faker;
use App\Models\Post;
use Illuminate\Support\Str;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for ($i=0; $i < 10 ; $i++) { 
            $newpost = new Post();
            $newpost->title = $faker->sentence(5);
            $newpost->cover = 'placeholders/' .  $faker->image('public/storage/placeholders/',300, 200,'Posts',true,$newpost->title);
            $newpost->slug = Str::slug($newpost->title);
            $newpost->subtitle = $faker->sentence(3);
             $newpost->body = $faker->sentence(10); 
            $newpost->save();
                                    }
    }
}
