<?php

namespace App\Http\Controllers;

use App\Models\DashboardWisata;
use App\Http\Requests\StoreDashboardWisataRequest;
use App\Http\Requests\UpdateDashboardWisataRequest;
use App\Models\Wisata;

class DashboardWisataController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('dashboard.wisata.index', [
            'title' => 'Dashboard Wisata',
            'wisatas' => Wisata::where('user_id', auth()->user()->id)->latest()->paginate(5),
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
     * @param  \App\Http\Requests\StoreDashboardWisataRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreDashboardWisataRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\DashboardWisata  $dashboardWisata
     * @return \Illuminate\Http\Response
     */
    public function show(DashboardWisata $dashboardWisata)
    {
        return view('dashboard.wisata.show', [
            'title' => 'Detail Wisata',
            'wisata' => $dashboardWisata,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\DashboardWisata  $dashboardWisata
     * @return \Illuminate\Http\Response
     */
    public function edit(DashboardWisata $dashboardWisata)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateDashboardWisataRequest  $request
     * @param  \App\Models\DashboardWisata  $dashboardWisata
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateDashboardWisataRequest $request, DashboardWisata $dashboardWisata)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\DashboardWisata  $dashboardWisata
     * @return \Illuminate\Http\Response
     */
    public function destroy(DashboardWisata $dashboardWisata)
    {
        //
    }
}
