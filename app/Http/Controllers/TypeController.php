<?php

namespace App\Http\Controllers;

use App\Models\Type;
use Illuminate\Http\Request;

class TypeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $catalogo = Type::all();
        $data =
            [
                'catalogo' => $catalogo,

            ];
            return view('admin.type.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.type.create');
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
        $newType = new Type();
        $newType->fill($data);
        $newType->save();
        return redirect()->route('admin.type.show', ['type' => $newType]);
    }

    /**
     * Display the specified resource.
     */
    public function show(Type $type)
    {
        $data = [
            'type' => $type,
        ];
        return view('admin.type.show', $data);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Type $type)
    {
        $data = [
            'type' => $type,
        ];
        return view('admin.type.edit', $data);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Type $type)
    {
        $data = $request->all();

        $type->name= $data['name'];
        $type->description= $data['description'];
        $type->creation_date= $data['icon'];

        $type->save();

        return redirect()->route('admin.type.show', ['type'=> $type] );
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Type $type)
    {
        $type->delete();
        return redirect()->route('admin.type.index');
    }
}
