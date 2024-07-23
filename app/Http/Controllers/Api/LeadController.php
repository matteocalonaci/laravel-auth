<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Lead;
use App\Mail\NewContact;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Validator;

class LeadController extends Controller
{
    public function store(Request $request)
    {
        // dd($request->all());
        $data = $request->all();

        //validare gli use input
        $validator = Validator::make($data, [
            'name' => 'required| min:5',
            'email' => 'required|email',
            'message' => 'required|min:10'
        ]);

        //controllare eventuali errori di validazione e stamparli formato json
        //darà accesso ad eventuali errori di validazione
        if ($validator->fails()) {
            return response()->json([
                'success' => false,
                'errors' => $validator->errors(),
            ]);
        }

        //salvare lead nel db
        $newLead = new Lead();
        $newLead->fill($data);
        $newLead->save();


        //inviamo la mail al sito -> stiamo usando https://mailtrap.io/

        Mail::to('info@boolean.com')->send(new NewContact($newLead));

        //return un response positivo in formato json
        return response()->json([
            'success' => true
        ]);
    }
}
