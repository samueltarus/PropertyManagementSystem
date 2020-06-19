<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Auth;
use DB;
use App\Property;


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
        $properties =  Property::orderBy('property_id')->paginate(10);
        return view('property.dashboard')->with('properties',$properties);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $apartments_type =DB::table('apartment_types')->select('id','apartments_type')->get();
        $username =DB::table('landlords')->select('landlord_id','username')->get();
        return view ('property.create',compact('apartments_type','username'));
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
            'apartments_type'=>'required',
            'county'=>'required',
            'town'=>'required',
            'location'=>'required',
            'property_description'=>'required',
            'username'=>'required',
            'management_fee'=>'required',



        ]);
        $Property = new  Property();

        $Property->property_name= $request['property_name'];
        $Property->apartments_type= $request['apartments_type'];
        $Property->county= $request['county'];
        $Property->town= $request['town'];
        $Property->location= $request['location'];
        $Property->property_description= $request['property_description'];
        $Property->username= $request['username'];
        $Property->management_fee= $request['management_fee'];


        $Property->save();
    return redirect()->to('/property')-> with('message','Successfully created Property');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Property  $property
     * @return \Illuminate\Http\Response
     */
    public function show($property_id)
    {
        $property =Property::find($property_id);
        return view ('property.show',compact('property','property_id'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Property  $property
     * @return \Illuminate\Http\Response
     */
    public function edit( $property_id)
    {   
        $property =Property::find($property_id);
        $apartments_type =DB::table('apartment_types')->select('id','apartments_type')->get();
        $username =DB::table('landlords')->select('landlord_id','username')->get();

        return view('property.edit',compact('property','property_id','apartments_type','username'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Property  $property
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $property_id)
    {
        $this->validate($request,[
            'property_name'=>'required',
            'apartments_type'=>'required',
            'county'=>'required',
            'town'=>'required',
            'location'=>'required',
            'property_description'=>'required',
            'username'=>'required',
            'management_fee'=>'required',


        ]);

        $property  =Property::find($property_id);
       
        $property->property_name= $request->get('property_name');
        $property->apartments_type= $request->get('apartments_type');
        $property->county= $request->get('county');
        $property->town= $request->get('town');
        $property->location= $request->get('location');
        $property->property_description= $request->get('property_description');
        $property->username= $request->get('username');
        $property->management_fee= $request->get('management_fee');

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
        $property =Property::find($property_id);
        $property->delete();

        return redirect()->route('property.index')->with('success','Property Deleted');
    }
    
    public function apartment_type( )
    {
       
        return Redirect::to ('apartments_type');
        
    }


    public function create_apartments_type( Request $request ,$id)
    {
        $data =array();

        $data=$request->get('apartments_type');
 
        DB::table('apartment_types')->update($data);
        
 
        return Redirect::to('all-landlord');
    }
}
