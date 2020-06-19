<?php

namespace App\Http\Controllers;
use DB;
use App\ManageProperties;
use App\Houses;
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
        //$propertyName =DB::table('properties')->select('properties.propertyName')->get();
        // $Units =DB::table('units')
             
        // ->select('units.propertyName','units.unitNumber','units.bedrooms','units.bathrooms', 'propertyManager')
        // ->get();
       
        // dd($propertyName);
        

        //$Units = Units::orderBy('id')->paginate(10);

        return view('property.addhouses.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

       

        //$propertyManager =DB::table('properties')->select('properties.propertyManager')->get();
        $property_name =DB::table('properties')->select('property_id','property_name')->get();
        $house_type =DB::table('house_type')->select('id','house_type')->get();
        
        return view('property.addhouses.create',compact('property_name','house_type'));

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
            'property_name'=>'required',
            'house_number'=>'required',
            'house_type'=>'required',
            'monthly_rent'=>'required',
            'house_status'=>'required',



        ]);


        $Houses = new  Houses();
      
        $Houses->property_name= $request['property_name'];
        $Houses->house_number= $request['house_number'];
        $Houses->house_type= $request['house_type'];
        $Houses->monthly_rent= $request['monthly_rent'];
        $Houses->house_status= $request['house_status'];
        
   
        $Houses->save();
    return redirect()->to('property')-> with('message','Successfully created Property');
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
        $Houses =Houses::find($id);

        return view('property.addhouses.edit',compact('addhouse','id'));
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
            'property_name'=>'required',
            'house_number'=>'required',
            'house_type'=>'required',
            'monthly_rent'=>'required',
           



        ]);
        $Houses = Houses::find($id);
        $Houses->property_name= $request['property_name'];
        $Houses->house_number= $request['house_number'];
        $Houses->house_type= $request['house_type'];
        $Houses->monthly_rent= $request['monthly_rent'];
        


        $Houses->save();
    return redirect()->to('property.addhouses')-> with('message','Successfully created Property');
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
