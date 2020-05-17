<?php

namespace App\Http\Controllers;

use App\Updates;
use Illuminate\Http\Request;

class UpdatesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('accountsFinance.updates.index');
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
     * @param  \App\Updates  $updates
     * @return \Illuminate\Http\Response
     */
    public function show(Updates $updates)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Updates  $updates
     * @return \Illuminate\Http\Response
     */
    public function edit(Updates $updates)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Updates  $updates
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Updates $updates)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Updates  $updates
     * @return \Illuminate\Http\Response
     */
    public function destroy(Updates $updates)
    {
        //
    }
}
