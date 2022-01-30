<?php
use Illuminate\Database\Seeder;
use App\Models\Tag;
use Faker\Generator as Faker;

class TagSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for ($i=0; $i < 7; $i++) { 
            $newTag = new Tag();
            $newTag->keyword = $faker->word(); 
            $newTag->save();
        }
    }
}
