<?php

namespace App\Http\Controllers;

use App\Models\Landing;
use App\Http\Requests\StoreLandingRequest;
use App\Http\Requests\UpdateLandingRequest;
use App\Models\Kota;
use App\Models\Wisata;

class LandingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('welcome', [
            'title' => 'Home',
            'wisatas' => Wisata::with(['author', 'kota'])->latest()->paginate(6),
            'kotas' => Kota::all()
        ]);
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
     * @param  \App\Http\Requests\StoreLandingRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreLandingRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Landing  $landing
     * @return \Illuminate\Http\Response
     */
    public function show(Landing $landing)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Landing  $landing
     * @return \Illuminate\Http\Response
     */
    public function edit(Landing $landing)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateLandingRequest  $request
     * @param  \App\Models\Landing  $landing
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateLandingRequest $request, Landing $landing)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Landing  $landing
     * @return \Illuminate\Http\Response
     */
    public function destroy(Landing $landing)
    {
        //
    }
}
