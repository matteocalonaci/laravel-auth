<?php

namespace Database\Seeders;

use App\Models\Type;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $newType = new Type();
        $newType->name = 'Front-end';
        $newType->description = 'A Front-End Developer is someone who creates websites and web applications. The difference between Front-End and Back-End is that Front-End refers to how a web page looks, while back-end refers to how it works.';
        $newType->icon ="fa-solid fa-laptop";
        $newType->save();

        $newType = new Type();
        $newType->name = 'Back-end';
        $newType->description = 'The Back-end developer works "behind the scenes" of a site or web application and takes care of its operation on the data and server side, therefore on what users do not see when visiting the site.';
        $newType->icon ="fa-solid fa-database";
        $newType->save();

        $newType = new Type();
        $newType->name = 'Full stack';
        $newType->description = "Full-stack developers design and create websites and applications for various platforms. A full-stack developer's job description might include the following: Develop and maintain web services and interfaces. Contribute to front-end and back-end development processes. Build new product features or APIs.";
        $newType->icon ='fa-solid fa-graduation-cap';
        $newType->save();

        $newType = new Type();
        $newType->name = 'Designer';
        $newType->description = 'The design engineer, also known as a design engineer, is the professional figure responsible for carrying out complex tasks in the design, development and testing of the physical components of products and systems.';
        $newType->icon ="fa-solid fa-pen-nib";
        $newType->save();
    }
}
