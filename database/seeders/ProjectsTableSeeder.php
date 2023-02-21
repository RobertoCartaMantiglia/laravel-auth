<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Project;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;
use Illuminate\Support\Str;

class ProjectsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        //
        for ($i = 0; $i < 20; $i++) {
            $newProject = new Project();
            $newProject->slug = Str::slug($newProject->title);
            $newProject->title = $faker->unique()->realTextBetween(4, 100);
            $newProject->description = $faker->realTextBetween(300, 1000);
            $newProject->thumb = $faker->imageUrl(640, 480, 'animals', true);
            $newProject->author = $faker->name();
            $newProject->used_technology = $faker->name();
            $newProject->save();
        }
    }
}
