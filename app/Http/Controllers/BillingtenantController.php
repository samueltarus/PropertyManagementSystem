<?php

namespace App\Http\Controllers;

use App\Billingtenant;
use Illuminate\Http\Request;

class BillingtenantController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view ('tenantBilling.index');
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
     * @param  \App\Billingtenant  $billingtenant
     * @return \Illuminate\Http\Response
     */
    public function show(Billingtenant $billingtenant)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Billingtenant  $billingtenant
     * @return \Illuminate\Http\Response
     */
    public function edit(Billingtenant $billingtenant)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Billingtenant  $billingtenant
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Billingtenant $billingtenant)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Billingtenant  $billingtenant
     * @return \Illuminate\Http\Response
     */
    public function destroy(Billingtenant $billingtenant)
    {
        //
    }
}
