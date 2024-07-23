<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\DashboardController; //<---- Import del controller precedentemente creato!
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\TechnologyController;
use App\Http\Controllers\TypeController;
use App\Models\Lead;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::resource('/project', ProjectController::class);

Route::get('/', function () {
    return view('welcome');
});

Route::middleware(['auth'])
    ->prefix('admin') //definisce il prefisso "admin/" per le rotte di questo gruppo
    ->name('admin.') //definisce il pattern con cui generare i nomi delle rotte cioè "admin.qualcosa"
    ->group(function () {

        //Siamo nel gruppo quindi:
        // - il percorso "/" diventa "admin/"
        // - il nome della rotta ->name("dashboard") diventa ->name("admin.dashboard")
        Route::get('/', [DashboardController::class, 'index'])->name('dashboard');
        Route::resource('/project', ProjectController::class);
        Route::resource('/type', TypeController::class);
        Route::resource('/technology', TechnologyController::class);

        //DA COMMENTARE ALLA FINE
        Route::get('/mailable', function () {
            // $lead =
            //     [
            //         'name' => 'Matteo Calonaci',
            //         'email' => 'matteo.calonaci@example.com',
            //         'message' => 'Buongiorno,
            //                     Sono Calonaci della prenotazione non rimborsabile 686/2024 in arrivo l’11/08.
            //                     Una sesta e forse una settima persona sarebbero interessate ad unirsi alla
            //                     vacanza.
            //                     È possibile aggiungerle alla prenotazione pagando chiaramente il supplemento?
            //                     Oppure riesce gentilmente a consigliare un’alternativa per chi si aggiunge?

            //                     Perdoni il disturbo,
            //                     Cordiali saluti '
            //     ];
            $lead = Lead::first();
            return new App\Mail\NewContact($lead);
        });
        //-----------------//
    });

require __DIR__ . '/auth.php';
