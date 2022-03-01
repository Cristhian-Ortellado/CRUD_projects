<?php

namespace App\Http\Controllers;

use App\Http\Requests\SaveProjectRequest;
use App\Models\Project;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use Illuminate\View\View;

class ProjectController extends Controller
{
    public function __construct()
    {
//        $this->middleware('auth')->except('index','show');
    }

    /**
     * Display a listing of the resource.
     *
     * @return View
     */
    public function index()
    {
        $projects = Project::latest()->paginate(5);
        return view('projects.index',compact('projects'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return View
     */
    public function create()
    {
        return view('projects.create', ['project' => new Project]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     */
    public function store(SaveProjectRequest $request)
    {

        Project::create($request->validated());
        return redirect()->route('projects.index')->with('status', 'Project Created');;
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return view
     */
    public function show(Project $project)
    {
        return view('projects.show',[
            'project' => $project
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  Project
     */
    public function edit(Project $project)
    {
        return view('projects.edit',[
            'project' => $project
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Project $project)
    {
        $fields = request()->validate([
            'title' => 'required',
            'url' => ['required', Rule::unique('projects')->ignore($project->id)],
            'description' => 'required',
        ]);
        $project->update($fields);

        return redirect()->route('projects.show',$project)->with('status', 'Project Updated');;
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Project $project)
    {

        $project->delete();
        return redirect()->route('projects.index')->with('status', 'Project Deleted');;
    }
}
