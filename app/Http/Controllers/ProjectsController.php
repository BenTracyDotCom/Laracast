<?php

namespace App\Http\Controllers;

use App\Project;
use App\Mail\ProjectCreated;
use Illuminate\Http\Request;

class ProjectsController extends Controller
{
    public function __construct()
    {
        $this->middleware("auth");
    }
    public function index()
    {
        return view('projects.index', [
            'projects' => auth()->user()->projects,
        ]);
    }

    public function create()
    {
        return view('projects.create');
    }
    public function show(Project $project)
    {
        $this->authorize('update', $project);

        return view('projects.show', compact('project'));
    }

    public function store()
    {
        $attributes = $this->validateProject();
        $attributes['owner_id'] = auth()->id();

        $project = Project::create($attributes);

        \Mail::to('b.rob.tracy@gmail.com')->send(
            new ProjectCreated($project)
        );

        return redirect('/projects');
    }


    public function edit(Project $project)
    {

        $this->authorize('update', $project);
        return view('projects.edit', compact('project'));
    }
    public function update(Request $request, Project $project)
    {
        $this->authorize('update', $project);

        $this->validateProject();

        $project->update(request(['title', 'description']));

        return redirect('/projects');
    }

    public function destroy(Project $project)
    {
        $this->authorize('update', $project);
        $project->delete();
        return redirect('/projects');
    }

    protected function validateProject()
    {
        return request()->validate([
            'title' => ['required', 'min:3'],
            'description' => ['required', 'min:3'],
        ]);
    }
}