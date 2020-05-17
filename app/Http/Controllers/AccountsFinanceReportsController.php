<?php

namespace App\Http\Controllers;

use App\AccountsFinanceReports;
use Illuminate\Http\Request;

class AccountsFinanceReportsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('accountsFinance.reports.index');
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
     * @param  \App\AccountsFinanceReports  $accountsFinanceReports
     * @return \Illuminate\Http\Response
     */
    public function show(AccountsFinanceReports $accountsFinanceReports)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\AccountsFinanceReports  $accountsFinanceReports
     * @return \Illuminate\Http\Response
     */
    public function edit(AccountsFinanceReports $accountsFinanceReports)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\AccountsFinanceReports  $accountsFinanceReports
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, AccountsFinanceReports $accountsFinanceReports)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\AccountsFinanceReports  $accountsFinanceReports
     * @return \Illuminate\Http\Response
     */
    public function destroy(AccountsFinanceReports $accountsFinanceReports)
    {
        //
    }
}
