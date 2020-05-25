<?php

namespace App\Http\Controllers;

use App\ManageProperties;
use App\Units;
use Illuminate\Http\Request;

class ManagePropertiesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
                
        
        $Units = Units::orderBy('id')->paginate(10);

        return view('manageUnits.index')->with('Units',$Units);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('manageUnits.create');
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
            'unitNumber'=>'required',
            'bedrooms'=>'required',
            'bathrooms'=>'required',
            'propertyManager'=>'required',



        ]);
        $Units = new  Units();

        $Units->propertyName= $request['propertyName'];
        $Units->unitNumber= $request['unitNumber'];
        $Units->bedrooms= $request['bedrooms'];
        $Units->bathrooms= $request['bathrooms'];
        $Units->propertyManager= $request['propertyManager'];


        $Units->save();
    return redirect()->to('/manageUnits')-> with('message','Successfully created Property');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\ManageProperties  $manageProperties
     * @return \Illuminate\Http\Response
     */
    public function show(ManageProperties $manageProperties)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\ManageProperties  $manageProperties
     * @return \Illuminate\Http\Response
     */
    public function edit(ManageProperties $manageProperties)
    {
        $Units =Units::find($id);

        return view('manageUnits.edit',compact('manageUnits','id'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\ManageProperties  $manageProperties
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,  $id)
    {
         
        $request ->validate([
            'propertyName'=>'required',
            'unitNumber'=>'required',
            'bedrooms'=>'required',
            'bathrooms'=>'required',
            'propertyManager'=>'required',



        ]);
        $Units = Units::find($id);
        $Units->propertyName= $request['propertyName'];
        $Units->unitNumber= $request['unitNumber'];
        $Units->bedrooms= $request['bedrooms'];
        $Units->bathrooms= $request['bathrooms'];
        $Units->propertyManager= $request['propertyManager'];


        $Units->save();
    return redirect()->to('/manageUnits')-> with('message','Successfully created Property');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\ManageProperties  $manageProperties
     * @return \Illuminate\Http\Response
     */
    public function destroy(ManageProperties $manageProperties)
    {
        //
    }
}
