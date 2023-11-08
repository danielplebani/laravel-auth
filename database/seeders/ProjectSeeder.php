<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Project;
use Faker\Generator as Faker;
use Illuminate\Support\Str;

class ProjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(Faker $faker): void
    {
        for ($i=0; $i < 12; $i++) { 
            $project = new Project();
            $project->name = $faker->realText(50);
            //$project->cover_image = 'placeholders/' . $faker->image('public/storage/placeholders', category:'projects' , fullPath:false);
            //$project->slug = Str::slug($project->name, '-');
            $project->content = $faker->realText();
            $project->save();
        }
    }
}
