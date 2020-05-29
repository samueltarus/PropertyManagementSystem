<?php

namespace App\Http\Controllers;
use DB;
// use App\Managetenant;
use Illuminate\Http\Request;

class ManagetenantController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view ('tenant.assignhouses.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view ('tenant.assignhouses.create');
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
     * @param  \App\Managetenant  $managetenant
     * @return \Illuminate\Http\Response
     */
    public function show(Managetenant $managetenant)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Managetenant  $managetenant
     * @return \Illuminate\Http\Response
     */
    public function edit(Managetenant $managetenant)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Managetenant  $managetenant
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Managetenant $managetenant)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Managetenant  $managetenant
     * @return \Illuminate\Http\Response
     */
    public function destroy(Managetenant $managetenant)
    {
        //
    }
}
