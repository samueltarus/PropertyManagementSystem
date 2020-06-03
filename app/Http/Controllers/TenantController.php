<?php

namespace App\Http\Controllers;
use DB;
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
        return view('/tenant.index')->with('tenant',$tenant);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       
        $occupation =DB::table('occupation')->select('id','occupation')->get();
        return view('/tenant.create',compact('occupation'));
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
            'email'=>'required',
            'address'=>'required',
            'phone_number'=>'required',
            'occupation'=>'required',



        ]);
        $tenant = new  tenant();

        $tenant->firstname= $request['firstname'];
        $tenant->lastname= $request['lastname'];
        $tenant->username= $request['username'];
        $tenant->passport= $request['passport'];
        $tenant->email= $request['email'];
        $tenant->address= $request['address'];
        $tenant->phone_number= $request['phone_number'];
        $tenant->occupation= $request['occupation'];
        
        
            
        $tenant->save();
    return redirect()->to('/tenant')-> with('message','Successfully created  Tenant');
        
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\tenant  $tenant
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $tenant =tenant::find($id);
        return view ('tenant.show',compact('tenant','id')); 
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\tenant  $tenant
     * @return \Illuminate\Http\Response
     */
    public function edit( $id)
    {
         $occupation =DB::table('occupation')->select('id','occupation')->get();
        $tenant = tenant::find($id);

        return view ('tenant.edit',compact('tenant','id','occupation'));
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
        $this->validate($request,[
             
            'firstname'=>'required',
            'lastname'=>'required',
            'username'=>'required',
            'passport'=>'required',
            'email'=>'required',
            'address'=>'required',
            'phone_number'=>'required',
            'occupation'=>'required',

        ]);

        $tenant =tenant::find($id);

        $tenant->firstname =$request->get('firstname');
        $tenant->lastname =$request->get('lastname');
        $tenant->username =$request->get('username');
        $tenant->passport =$request->get('passport');
        $tenant->email =$request->get('email');
        $tenant->address =$request->get('address');
        $tenant->phone_number =$request->get('phone_number');
        $tenant->occupation =$request->get('occupation');

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
