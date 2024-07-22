<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Project;
use Illuminate\Http\Request;

class ProjectController extends Controller
{
    public function index()
    {
        return  response()->json([
            'success' => true,
            'projects' => Project::with('technologies', 'type')->orderByDesc('id')->paginate()
        ]);
    }
    public function latest()
    {
        return  response()->json([
            'success' => true,
            'projects' => Project::with('technologies', 'type')->orderByDesc('id')->take(3)->get()
        ]);
    }

    public function show($id)
    {
        $projects = Project::with('technologies', 'type')->where('id', $id)->first();

        if ($projects) {
            return response()->json([
                'success' => true,
                'projects' => $projects
            ]);

        } else {
            return response()->json([
                'success' => false,
                'message' => "404 not found"
            ]);
        }
        dd($projects);
    }
}
