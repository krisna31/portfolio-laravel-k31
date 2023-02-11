<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProjectRequest;
use App\Models\LocalProject;
use Illuminate\Http\Request;

class ProjectController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $localProjects = LocalProject::all();
        return response()->view('project.index', compact('localProjects'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return response()->view('project.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(ProjectRequest $request)
    {
        LocalProject::create($request->validated());
        return redirect()->route('project.index')->with('success', 'Data Berhasil Dibuat');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\LocalProject  $localProject
     * @return \Illuminate\Http\Response
     */
    public function show(LocalProject $localProject)
    {
        return response()->view('project.show', compact('localProject'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\LocalProject  $localProject
     * @return \Illuminate\Http\Response
     */
    public function edit(LocalProject $localProject)
    {
        return response()->view('project.edit', compact('localProject'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\LocalProject  $localProject
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(ProjectRequest $request, LocalProject $localProject)
    {
        $localProject->update($request->validated());
        return redirect()->route('project.index')->with('success', 'Data Berhasil Diubah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\LocalProject  $localProject
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy(LocalProject $localProject)
    {
        $localProject->delete();
        return redirect()->route('project.index')->with('success', 'Data Berhasil Dihapus');
    }
}
