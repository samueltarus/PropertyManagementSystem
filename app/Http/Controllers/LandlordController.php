<?php

namespace App\Http\Controllers;

use App\Landlord;
//use App\ManageLandlord;
use Illuminate\Http\Request;

class LandlordController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $landlords =  Landlord::orderBy('id')->paginate(10);
        return view('landlord.dashboard')->with('landlords',$landlords);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
        return view('landlord.create');
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
            'passport'=>'required',
            'phoneNumber'=>'required',
            'email'=>'required',
            
           


        ]);
        $landlord= new  Landlord();
        $landlord->firstname= $request['firstname'];
        $landlord->lastname= $request['lastname'];
        $landlord->username= $request['username'];
        $landlord->passport= $request['passport'];
        $landlord->email= $request['email'];
        $landlord->phoneNumber= $request['phoneNumber'];
   
    $landlord->save();
    return redirect()->to('/landlord')-> with("Successfully created landlord");
 
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Landlord  $landlord
     * @return \Illuminate\Http\Response
     */
    public function show(Landlord $landlord)
    {
        //return view('register');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Landlord  $landlord
     * @return \Illuminate\Http\Response
     */
    public function edit(Landlord $landlord)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Landlord  $landlord
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Landlord $landlord)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Landlord  $landlord
     * @return \Illuminate\Http\Response
     */
    public function destroy(Landlord $landlord)
    {
        
        $deletelandlord = Landlord::find(input::get('id'));

        $deletelandlord->delete();

        return redirect('/landlord')->with('message','Successfully')->back();
    }
}
