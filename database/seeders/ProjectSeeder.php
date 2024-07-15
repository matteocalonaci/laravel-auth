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
        $newProject=new Project();
        $newProject->name="e-commerce";
        $newProject->description="un bellissimo sito di e-commerce per compare cose belle";
        $newProject->creation_date="2024-05-03";
        $newProject->type_id = $faker->numberBetween(1 , 4);
        $newProject->is_completed=false;

        $newProject->save();
    }
}
