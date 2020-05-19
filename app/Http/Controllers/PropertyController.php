<?php

namespace App\Http\Controllers;

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
        return view('property.dashboard');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view ('property.create');
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
            'propertyType'=>'required',
            'propertyDescription'=>'required',
            'numberOfUnits'=>'required',
            'address'=>'required',
            'phonenumber'=>'required',
            'propertymanager'=>'required',
            


        ]);
        $property= new  Property();

        $property->propertyName= $request['propertyName'];
        $property->propertyType= $request['propertyType'];
        $property->propertyDescription= $request['propertyDescription'];
        $property->numberOfUnits= $request['numberOfUnits'];
        $property->address= $request['address'];
        $property->phonenumber= $request['phonenumber'];
        $property->propertymanager= $request['propertymanager'];
        
    
    $property->save();
    return redirect()->to('/property')-> with("Successfully created landlord");
 
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Property  $property
     * @return \Illuminate\Http\Response
     */
    public function show(Property $property)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Property  $property
     * @return \Illuminate\Http\Response
     */
    public function edit(Property $property)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Property  $property
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Property $property)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Property  $property
     * @return \Illuminate\Http\Response
     */
    public function destroy(Property $property)
    {
        //
    }
}
