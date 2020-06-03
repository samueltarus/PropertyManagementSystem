<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Landlord;
use DB;
use App\User;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $admins =  User::orderBy('id')->paginate(10);
        return view('admin.index')->with('admins',$admins);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $role =DB::table('roles')->select('id','role')->get();
        return view ('admin.create',compact('role'));
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
            'name'=>'required',
            'username'=>'required',
            'email'=>'required',
            'role'=>'required',
            'password'=>'required',



        ]);


            $admins = new  User();
        $admins->name= $request['name'];
        $admins->username= $request['username'];
        $admins->email= $request['email'];
        $admins->role= $request['role'];
        $admins->password= $request['password'];
       
        $admins->save();
        return redirect()->to('/admin')-> with('message','Successfully created Property');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $admins =User::findOrFail($id);
        $role =DB::table('roles')->select('id','role')->get();
        return view('admin.edit',compact('admins','id','role'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)

    {   
        $this ->validate($request,[
            'name'=>'required',
            'username'=>'required',
            'email'=>'required',
            'role'=>'required',
            'password'=>'required',



        ]);
        $admins =User::findOrFail($id);

        $admins->name= $request->get('name');
        $admins->username= $request->get('username');
        $admins->email= $request->get('email');
        $admins->role= $request->get('role');
        $admins->password= $request->get('password'); 

        $admins->save();
        return redirect()->to('/admin')-> with('message','Successfully created Property');

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
}
