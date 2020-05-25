<?php

namespace App\Http\Controllers;

use App\tenant;
use Illuminate\Http\Request;

class TenantController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {   

   // $tenant  =tenant::where('id',$tenant)->leftJoin('appartmentName' )->select('tenant.id','tenant.username')->first();
        $tenant = tenant::orderBy('id')->paginate(10);
        return view('tenant.index')->with('tenant',$tenant);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('tenant.create');
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
            'propertyName'=>'required',
            'unitNumber'=>'required',
            'phoneNumber'=>'required',
            'status'=>'required',
            'rent'=>'required',
            'services'=>'required',



        ]);
        $tenant = new  tenant();

        $tenant->firstname= $request['firstname'];
        $tenant->lastname= $request['lastname'];
        $tenant->propertyName= $request['propertyName'];
        $tenant->unitNumber= $request['unitNumber'];
        $tenant->phoneNumber= $request['phoneNumber'];
        $tenant->status= $request['status'];
        $tenant->rent= $request['rent'];
        $tenant->services= $request['services'];


        $tenant->save();
    return redirect()->to('/tenant')-> with('message','Successfully created  Tenant');
        
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\tenant  $tenant
     * @return \Illuminate\Http\Response
     */
    public function show(tenant $tenant)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\tenant  $tenant
     * @return \Illuminate\Http\Response
     */
    public function edit( $id)
    {
        $tenant = tenant::find($id);

        return view ('tenant.edit',compact('tenant',$tenant));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\tenant  $tenant
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request ->validate([
            'firstname'=>'required',
            'lastname'=>'required',
            'propertyName'=>'required',
            'unitNumber'=>'required',
            'phoneNumber'=>'required',
            'status'=>'required',
            'rent'=>'required',
            'services'=>'required',

        ]);

        $tenant =tenant::find($id);

        $tenant->firstname =$request->get('firstname');
        $tenant->lastname =$request->get('lastname');
        $tenant->propertyName =$request->get('propertyName');
        $tenant->unitNumber =$request->get('unitNumber');
        $tenant->phoneNumber =$request->get('phoneNumber');
        $tenant->status =$request->get('status');
        $tenant->rent =$request->get('rent');
        $tenant->services =$request->get('services');

        $tenant->save();
        return redirect()->route('tenant.index')->with('success','Tenant Updated successfully');
        

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\tenant  $tenant
     * @return \Illuminate\Http\Response
     */
    public function destroy(tenant $tenant)
    {
        //
    }
}
