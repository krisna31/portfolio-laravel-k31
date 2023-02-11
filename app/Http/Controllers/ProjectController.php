<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProjectRequest;
use App\Http\Requests\ProjectStoreRequest;
use App\Http\Requests\ProjectUpdateRequest;
use App\Models\Local;
use App\Models\Project;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;

class ProjectController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $projects = Project::all();
        return response()->view('project.index', compact('projects'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $projects = Project::all();
        $locals = Local::all();
        return response()->view('project.create', compact('projects', 'locals'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(ProjectStoreRequest $request)
    {
        // Store the validated input data.
        $validated = $request->validated();

        // Create a unique path for the image.
        $path = "project_" . uniqid() . "." . $request->file('image')->extension();

        // Store the image at the specified path.
        $request->file('image')->storeAs("public/project", $path);

        // Get the image file name.
        $validated['image'] = basename($path);

        // Create a project with the validated data.
        Project::create($validated);

        // Redirect the user to the project list.
        return redirect()->route('project.index')->with('success', 'Data Berhasil Dibuat');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Project  $project
     * @return \Illuminate\Http\Response
     */
    public function show(Project $project)
    {
        return response()->view('project.show', compact('project'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Project  $project
     * @return \Illuminate\Http\Response
     */
    public function edit(Project $project)
    {
        $locals = Local::all();
        return response()->view('project.edit', compact('project','locals'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Project  $project
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(ProjectUpdateRequest $request, Project $project)
    {
        $validated = $request->validated();
        if ($request->file('image')) {
            $image_path = 'public/project/'.$project->image;
            Storage::exists($image_path) && Storage::delete($image_path);
            $path = "project_" . uniqid() . "." . $request->file('image')->extension();
            $request->file('image')->storeAs("public/project", $path);
            $validated['image'] = basename($path);
        }
        
        $project->update($validated);

        // Redirect the user to the project list.
        return redirect()->route('project.index')->with('success', 'Data Berhasil Diubah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Project  $project
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy(Project $project)
    {
        $image_path = 'public/project/'.$project->image;
        Storage::exists($image_path) && Storage::delete($image_path);
        $project->delete();
        return redirect()->route('project.index')->with('success', 'Data Berhasil Dihapus');
    }
}
