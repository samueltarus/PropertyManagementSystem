<?php

namespace App\Http\Controllers;

use DB;
use App\Property;
use Illuminate\Http\Request;

class PropertyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //return view('property.dashboard');
        $properties =  Property::orderBy('id')->paginate(10);
        return view('property.dashboard')->with('properties',$properties);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $apartmentsType =DB::table('apartment_types')->select('id','apartmentsType')->get();
        $username =DB::table('landlords')->select('id','username')->get();
        return view ('property.create',compact('apartmentsType','username'));
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
            'propertyName'=>'required',
            'apartmentsType'=>'required',
            'townLocation'=>'required',
            'location'=>'required',
            'propertyDescription'=>'required',
            'username'=>'required',
            'managementFee'=>'required',



        ]);
        $Property = new  Property();

        $Property->propertyName= $request['propertyName'];
        $Property->apartmentsType= $request['apartmentsType'];
        $Property->townLocation= $request['townLocation'];
        $Property->location= $request['location'];
        $Property->propertyDescription= $request['propertyDescription'];
        $Property->username= $request['username'];
        $Property->managementFee= $request['managementFee'];


        $Property->save();
    return redirect()->to('/property')-> with('message','Successfully created Property');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Property  $property
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        /*$properties = Property::find($id);
        return view('property.dashboard')->withProperties(property);*/
        // $property = Property::find($id);
        // return view('property.show', ['property' => $property]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Property  $property
     * @return \Illuminate\Http\Response
     */
    public function edit( $id)
    {
        $property =Property::find($id);

        return view('property.edit',compact('property','id'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Property  $property
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request,[
            'propertyName'=>'required',
            'apartmentsType'=>'required',
            'townLocation'=>'required',
            'location'=>'required',
            'propertyDescription'=>'required',
            'username'=>'required',
            'managementFee'=>'required',


        ]);

        $property  =Property::find($id);
       
        $property->propertyName= $request->get('propertyName');
        $property->apartmentsType= $request->get('apartmentsType');
        $property->townLocation= $request->get('townLocation');
        $property->location= $request->get('location');
        $property->propertyDescription= $request->get('propertyDescription');
        $property->username= $request->get('username');
        $property->managementFee= $request->get('managementFee');

        $property->save();
        return redirect()->route('property.index')->with('success','Data Updated');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Property  $property
     * @return \Illuminate\Http\Response
     */
    public function destroy(Property $property)
    {
        $property =Property::find($id);
        $property->delete();

        return redirect()->route('property.index')->with('success','Property Deleted');
    }
}
