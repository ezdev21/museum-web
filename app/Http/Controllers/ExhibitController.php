<?php

namespace App\Http\Controllers;

use App\Models\Exhibit;
use App\Http\Requests\StoreExhibitRequest;
use App\Http\Requests\UpdateExhibitRequest;

class ExhibitController extends Controller
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
     * @param  \App\Http\Requests\StoreExhibitRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreExhibitRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Exhibit  $exhibit
     * @return \Illuminate\Http\Response
     */
    public function show(Exhibit $exhibit)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Exhibit  $exhibit
     * @return \Illuminate\Http\Response
     */
    public function edit(Exhibit $exhibit)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateExhibitRequest  $request
     * @param  \App\Models\Exhibit  $exhibit
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateExhibitRequest $request, Exhibit $exhibit)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Exhibit  $exhibit
     * @return \Illuminate\Http\Response
     */
    public function destroy(Exhibit $exhibit)
    {
        //
    }
}
