<?php

namespace App\Http\Controllers;

use App\financeandAccounts;
use Illuminate\Http\Request;

class FinanceandAccountsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('accountsFinance.dashboard');
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
     * @param  \App\financeandAccounts  $financeandAccounts
     * @return \Illuminate\Http\Response
     */
    public function show(financeandAccounts $financeandAccounts)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\financeandAccounts  $financeandAccounts
     * @return \Illuminate\Http\Response
     */
    public function edit(financeandAccounts $financeandAccounts)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\financeandAccounts  $financeandAccounts
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, financeandAccounts $financeandAccounts)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\financeandAccounts  $financeandAccounts
     * @return \Illuminate\Http\Response
     */
    public function destroy(financeandAccounts $financeandAccounts)
    {
        //
    }
}
