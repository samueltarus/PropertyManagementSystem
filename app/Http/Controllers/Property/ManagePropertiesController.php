<?php

namespace App\Http\Controllers;

use App\ManageProperties;
use Illuminate\Http\Request;

class ManagePropertiesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('property.manageproperties.index');
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
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\ManageProperties  $manageProperties
     * @return \Illuminate\Http\Response
     */
    public function show(ManageProperties $manageProperties)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\ManageProperties  $manageProperties
     * @return \Illuminate\Http\Response
     */
    public function edit(ManageProperties $manageProperties)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\ManageProperties  $manageProperties
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ManageProperties $manageProperties)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\ManageProperties  $manageProperties
     * @return \Illuminate\Http\Response
     */
    public function destroy(ManageProperties $manageProperties)
    {
        //
    }
}
