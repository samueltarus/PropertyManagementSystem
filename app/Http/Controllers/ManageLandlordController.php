<?php

namespace App\Http\Controllers;

use App\ManageLandlord;
use Illuminate\Http\Request;

class ManageLandlordController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $manage_landlords =  ManageLandlord::orderBy('id')->paginate(10);
        return view('landlord.managelandlords.index')->with('manage_landlords',$manage_landlords);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        

        return view('landlord.managelandlords.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request ->validate([
            'firstname'=>'required',
            'lastname'=>'required',
            'username'=>'required',
            'phonenumber'=>'required',
            'email'=>'required',
            'no_apartments'=>'required',
            'no_units'=>'required',
            'rent'=>'required',
            'services_amount'=>'required',


        ]);
        $landlord= new  ManageLandlord();
        $landlord->firstname= $request['firstname'];
        $landlord->lastname= $request['lastname'];
        $landlord->username= $request['username'];
        $landlord->phonenumber= $request['phonenumber'];
        $landlord->email= $request['email'];
        $landlord->no_apartments= $request['no_apartments'];
        $landlord->no_units= $request['no_units'];
        $landlord->rent= $request['rent'];
        $landlord->services_amount= $request['services_amount'];
    
    $landlord->save();
    return redirect()->to('/landlord/managelandlords')-> with("Successfully created landlord");
 

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\ManageLandlord  $manageLandlord
     * @return \Illuminate\Http\Response
     */
    public function show(ManageLandlord $manageLandlord)
    {   
       // return view('landlord.managelandlords.show');
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\ManageLandlord  $manageLandlord
     * @return \Illuminate\Http\Response
     */
    public function edit(ManageLandlord $manageLandlord)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\ManageLandlord  $manageLandlord
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ManageLandlord $manageLandlord)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\ManageLandlord  $manageLandlord
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {


            $deletelandlord = ManageLandlord::find(input::get('id'));

            $deletelandlord->delete();

            return redirect('/landlord/managelandlords')->with('message','Successfully')->back();
    }
    // public function suspend()
    // {
    //     return view ('landlord.managelandlords.suspend')
    // }
}
