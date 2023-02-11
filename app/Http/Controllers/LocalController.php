<?php

namespace App\Http\Controllers;

use App\Models\Local;
use App\Http\Requests\LocalRequest;
use App\Models\LocalProject;
use App\Models\LocalSocialMedia;

class LocalController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $locals = Local::all();
        return response()->view('local.index', compact('locals'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return response()->view('local.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\LocalRequest  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(LocalRequest $request)
    {
        Local::create($request->validated());
        $newName = "project_".date_create()."_".$request->file('image')->extension();
        $request->file('image')->storeAs("public/project",$newName);
        return redirect()->route('local.index')->with('success', 'Data Berhasil Dibuat');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Local  $local
     * @return \Illuminate\Http\Response
     */
    public function show(Local $local)
    {
        return response()->view('local.show', compact('local'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Local  $local
     * @return \Illuminate\Http\Response
     */
    public function edit(Local $local)
    {
        return response()->view('local.edit', compact('local'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\LocalRequest  $request
     * @param  \App\Models\Local  $local
     * @return \Illuminate\Http\Response
     */
    public function update(LocalRequest $request, Local $local)
    {
        $local->update($request->validated());

        return redirect()->route('local.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Local  $local
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy(Local $local)
    {
        $local->delete();

        return redirect()->route('local.index')->with('success', 'Data Berhasil Dihapus');
    }
}
