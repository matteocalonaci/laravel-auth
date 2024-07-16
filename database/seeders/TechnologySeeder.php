<?php

namespace Database\Seeders;

use App\Models\Technology;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TechnologySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $newTechnology = new Technology();
        $newTechnology->name = 'Laravel';
        $newTechnology->description = 'Laravel è un framework open source di tipo MVC scritto in PHP per lo sviluppo di applicazioni web, creato nel 2011 da Taylor Otwell come derivazione di Symfony.';
        $newTechnology->icon ="fa-brands fa-laravel";
        $newTechnology->save();

        $newTechnology = new Technology();
        $newTechnology->name = 'Java-Script';
        $newTechnology->description = 'In informatica JavaScript è un linguaggio di programmazione multi paradigma orientato agli eventi, utilizzato sia nella programmazione lato client web che lato server per la creazione di RESTful API, ...';
        $newTechnology->icon ="fa-brands fa-js";
        $newTechnology->save();

        $newTechnology = new Technology();
        $newTechnology->name = 'PHP';
        $newTechnology->description = "PHP è un linguaggio di scripting interpretato, originariamente concepito per la programmazione di pagine web dinamiche. L'interprete PHP è un software libero distribuito sotto la licenza PHP.";
        $newTechnology->icon = "fa-brands fa-php";
        $newTechnology->save();

        $newTechnology = new Technology();
        $newTechnology->name = 'Vue JS';
        $newTechnology->description = 'Vue.js è un framework JavaScript open source in configurazione Model–view–viewmodel per la creazione di interfacce utente e single-page applications. È stato creato da Evan You ed è gestito da lui stesso e i membri attivi del core team, provenienti da varie società come Netlify e Netguru. ';
        $newTechnology->icon ="fa-brands fa-vuejs";
        $newTechnology->save();
    }
}
