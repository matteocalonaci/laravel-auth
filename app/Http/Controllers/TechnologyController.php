<?php

namespace App\Http\Controllers;

use App\Models\Technology;
use Illuminate\Http\Request;

class TechnologyController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $catalogo = Technology::all();
        $data =
            [
                'catalogo' => $catalogo,

            ];
            return view('admin.technology.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $catalogo = Technology::all();
        $data =
        [
            'catalogo' => $catalogo,

        ];
        return view('admin.technology.create', $data);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //sono i dati che attivano dal form
        $data = $request->validate([
            "name" => "required|min:5|max:50",
            "description" => "required|min:10|max:2000",
            "icon" => "required|min:5|max:50",
        ]);
        $newTechnology = new Technology();
        $newTechnology->fill($data);
        $newTechnology->save();
        return redirect()->route('admin.technology.show', ['technology' => $newTechnology]);
    }

    /**
     * Display the specified resource.
     */
    public function show(Technology $technology)
    {
        $data = [
            'technology' => $technology,
        ];
        return view('admin.technology.show', $data);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Technology $technology)
    {
        $data = [
            'technology' => $technology,
        ];
        return view('admin.technology.edit', $data);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Technology $technology)
    {
        $data = $request->all();

        $technology->name= $data['name'];
        $technology->description= $data['description'];
        $technology->icon= $data['icon'];

        $technology->save();

        return redirect()->route('admin.technology.show', ['technology'=> $technology] );
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Technology $technology)
    {
        $technology->delete();
        return redirect()->route('admin.technology.index');
    }
}
