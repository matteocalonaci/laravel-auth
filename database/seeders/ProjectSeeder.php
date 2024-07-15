<?php

namespace Database\Seeders;

use App\Models\Project;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;


class ProjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(Faker $faker): void
    {
        for($i=0; $i<9;$i++){

        $newProject=new Project();
        $newProject->name= $faker->name();
        $newProject->thumb= "https://picsum.photos/id/" . rand(1, 500) . "/800/200";
        $newProject->description=$faker->paragraph();
        $newProject->creation_date=$faker->date();
        $newProject->type_id = $faker->numberBetween(1 , 4);
        $newProject->is_completed=false;

        $newProject->save();
        }
    }
}


