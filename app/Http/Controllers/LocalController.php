<?php

namespace App\Http\Controllers;

use App\Models\Local;
use App\Http\Requests\LocalRequest;

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
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function portfolio()
    {
        $local = Local::where('is_selected', 1)->with('projects')->get()->first();
        if ($local)
            return response()->view('root', compact('local'));
        else
            return response()->view('original');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function dashboard()
    {
        $locals = Local::all();
        return response()->view('dashboard', compact('locals'));
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
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(LocalRequest $request, Local $local): \Illuminate\Http\RedirectResponse
    {
        $validatedRequests = $request->validated();
        $validatedRequests['is_selected'] = $request->has('is_selected');
        $local->update($validatedRequests);

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
