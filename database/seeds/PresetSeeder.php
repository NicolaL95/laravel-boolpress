<?php
use App\Models\Preset;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;

class PresetSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for ($i=0; $i < 10; $i++) { 
             $new_preset= new Preset();
        $new_preset->name = $faker->sentence();
          $new_preset->price = $faker->randomFloat(2,300,99999);
        $new_preset->preview = $faker->imageUrl(200,300,'animals');
        $new_preset->description = $faker->text(); 
        $new_preset->save();
        }
       
    }
}
