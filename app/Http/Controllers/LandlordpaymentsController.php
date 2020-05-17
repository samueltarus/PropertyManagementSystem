<?php

namespace App\Http\Controllers;

use App\landlordpayments;
use Illuminate\Http\Request;

class LandlordpaymentsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('landlord.payments.index');
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
     * @param  \App\landlordpayments  $landlordpayments
     * @return \Illuminate\Http\Response
     */
    public function show(landlordpayments $landlordpayments)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\landlordpayments  $landlordpayments
     * @return \Illuminate\Http\Response
     */
    public function edit(landlordpayments $landlordpayments)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\landlordpayments  $landlordpayments
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, landlordpayments $landlordpayments)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\landlordpayments  $landlordpayments
     * @return \Illuminate\Http\Response
     */
    public function destroy(landlordpayments $landlordpayments)
    {
        //
    }
}
