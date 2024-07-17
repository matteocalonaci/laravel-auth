<?php

namespace App\Http\Controllers;

use App\Models\Project;
use App\Models\Type;
use App\Models\Technology;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ProjectController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $catalogo = Project::all();
        $data =
            [
                'catalogo' => $catalogo,

            ];
        return view('project.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(){
        $catalogo = Type::all();
        $catalog = Technology::all();
        $data =
        [
            'catalogo' => $catalogo,
            'catalog' => $catalog,

        ];
        return view('admin.project.create', $data);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //sono i dati che attivano dal form
        $data = $request->validate([
            "name" => "required|min:5|max:50",
            "thumb" => "required|image",
            "description" => "required|min:10|max:200",
            "creation_date" => "required|date",
            "type_id" => "required",

        ]);

        $data['thumb'] = $request->thumb;

        if($request->has("thumb")){

            $img_path= Storage::put('images', $request->thumb);
            $data['thumb'] = $img_path;

        }


        $newProject = new Project();
        $newProject->is_completed=false;
        $newProject->fill($data);

        $newProject->save();
        return redirect()->route('admin.project.show', ['project' => $newProject]);
    }
    /**
     * Display the specified resource.
     */
    public function show(Project $project)
    {
        $data = [
            'project' => $project,
        ];
        return view('admin.project.show', $data);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Project $project)
    {
        $catalogo = Type::all();
        $catalog = Technology::all();
        $data = [
            'project' => $project,
            'catalogo' => $catalogo,
            'catalog' => $catalog,
        ];
        return view('admin.project.edit', $data);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Project $project)
    {
        $data = $request->all();

        $project->name= $data['name'];
        $project->description= $data['description'];
        $project->creation_date= $data['creation_date'];
        $project->type_id= $data['type_id'];

        $project->save();

        return redirect()->route('admin.project.show', ['project'=> $project] );
    }


    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Project $project)
    {
        $project->delete();
        return redirect()->route('admin.project.index');
    }
}
