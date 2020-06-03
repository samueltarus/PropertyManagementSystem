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
        $landlords =  Landlord::orderBy('id','DESC')->paginate(15);
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
            'phone_number'=>'required',
            'email'=>'required',
            
           


        ]);
        $landlord= new  Landlord();
        $landlord->firstname= $request['firstname'];
        $landlord->lastname= $request['lastname'];
        $landlord->username= $request['username'];
        $landlord->passport= $request['passport'];
        $landlord->email= $request['email'];
        $landlord->phone_number= $request['phone_number'];
   
    $landlord->save();
    return redirect()->to('/landlord')-> with("Successfully created landlord");
 
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Landlord  $landlord
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        
        $landlords =Landlord::find($id);
        return view ('landlord.show',compact('landlords','id'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Landlord  $landlord
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        
        $landlords = Landlord::find($id);

        return view ('landlord.edit',compact('landlords'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Landlord  $landlord
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,  $id)
    {
        $request->validate([

            'firstname'=>'required',
            'lastname'=>'required',
            'username'=>'required',
            'passport'=>'required',
            'phone_number'=>'required',
            'email'=>'required',
                      


        ]);
        $landlords= Landlord::find($id);
        
        
        $landlords->firstname= $request->get('firstname');
        $landlords->lastname= $request->get('lastname');
        $landlords->username= $request->get('username');
        $landlords->passport= $request->get('passport');
        $landlords->email= $request->get('email');
        $landlords->phone_number= $request->get('phone_number');
   
    $landlords->save();
    return redirect()->to('/landlord')-> with("Successfully created landlord");
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
