<?php

namespace App\Http\Controllers;
use DB;
use Illuminate\Http\Request;
use\App\AssignHouses;

class ManageTenantController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view ('tenant.assignhouses.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
     { 

        $house_number=DB::table('houses')->select('house_number')->get();
       $monthly_rent=DB::table('houses')->select('monthly_rent')->get();
         $property_name =DB::table('houses')->select('property_name')->get();

        return view ('tenant.assignhouses.create',compact('property_name','monthly_rent','house_number'));
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
            'predifened_monthly_rent'=>'required',
            'tenant_ID'=>'required',
            'tenant_name'=>'required',
            'deposit'=>'required',
            'rent_paid'=>'required',
            



        ]);


        $AssignHouses = new  AssignHouses();
      
        $AssignHouses->property_name= $request['property_name'];
        $AssignHouses->house_number= $request['house_number'];
        $AssignHouses->predifened_monthly_rent= $request['predifened_monthly_rent'];
        $AssignHouses->tenant_ID= $request['tenant_ID'];
        $AssignHouses->tenant_name= $request['tenant_name'];
        $AssignHouses->deposit= $request['deposit'];
        $AssignHouses->rent_paid= $request['rent_paid'];
           
        $AssignHouses->save();
    return redirect()->to('/tenant')-> with('message','Successfully created Property');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
          
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
  
    public function property_name($id){

    	// Fetch Users by Departmentid
        $userData['data'] = houses::orderby("name","asc")
        			->select('id','apartment_name')
        			->where('properties',$id)
        			->get();
  
        echo json_encode($userData);
        exit;
    }
    
}
