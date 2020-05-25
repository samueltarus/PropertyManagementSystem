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
            'phoneNumber'=>'required',
            'propertyManager'=>'required',



        ]);
        $Property = new  Property();

        $Property->propertyName= $request['propertyName'];
        $Property->propertyType= $request['propertyType'];
        $Property->propertyDescription= $request['propertyDescription'];
        $Property->numberOfUnits= $request['numberOfUnits'];
        $Property->address= $request['address'];
        $Property->phoneNumber= $request['phoneNumber'];
        $Property->propertyManager= $request['propertyManager'];


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
            'propertyType'=>'required',
            'propertyDescription'=>'required',
            'numberOfUnits'=>'required',
            'address'=>'required',
            'phoneNumber'=>'required',
            'propertyManager'=>'required',

        ]);

        $property  =Property::find($id);
        $property ->propertyName =$request->get('propertyName');
        $property ->propertyType =$request->get('propertyType');
        $property ->propertyDescription =$request->get('propertyDescription');
        $property ->numberOfUnits =$request->get('numberOfUnits');
        $property ->address =$request->get('address');
        $property ->phoneNumber =$request->get('phoneNumber');
        $property ->propertyManager =$request->get('propertyManager');

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
