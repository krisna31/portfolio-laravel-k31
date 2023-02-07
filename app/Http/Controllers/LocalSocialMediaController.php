<?php

namespace App\Http\Controllers;

use App\Models\LocalSocialMedia;
use App\Http\Requests\StoreLocalSocialMediaRequest;
use App\Http\Requests\UpdateLocalSocialMediaRequest;

class LocalSocialMediaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreLocalSocialMediaRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreLocalSocialMediaRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\LocalSocialMedia  $localSocialMedia
     * @return \Illuminate\Http\Response
     */
    public function show(LocalSocialMedia $localSocialMedia)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\LocalSocialMedia  $localSocialMedia
     * @return \Illuminate\Http\Response
     */
    public function edit(LocalSocialMedia $localSocialMedia)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateLocalSocialMediaRequest  $request
     * @param  \App\Models\LocalSocialMedia  $localSocialMedia
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateLocalSocialMediaRequest $request, LocalSocialMedia $localSocialMedia)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\LocalSocialMedia  $localSocialMedia
     * @return \Illuminate\Http\Response
     */
    public function destroy(LocalSocialMedia $localSocialMedia)
    {
        //
    }
}
