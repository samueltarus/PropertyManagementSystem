<?php

namespace App\Http\Controllers;
use App\Houses;
use Illuminate\Support\Facades\Redirect;
use DB;
use Illuminate\Http\Request;

class HousesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       

      

            $house = DB::table('houses')
            ->join('properties', 'houses.property_id',  '=', 'properties.property_id')
            ->select('houses.*', 'properties.property_name','properties.apartments_type','properties.county','properties.town','properties.location','properties.username')
            ->get();
    

        return view('houses.index',compact('house'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view ('houses.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
        $houses =Houses::find($id);
        //$houses =DB::table('assign_houses')->select('id','house_number','monthly_rent','property_name')->get();
        return view ('houses.edit',compact('houses'));
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
        $request ->validate([

            'house_number'=>'required',
            'monthly_rent'=>'required',
            'property_name'=>'required',
            ]);
           
    
    $assign_houses = assign_houses::find($id);
    $assign_houses->house_number= $request['house_number'];
    $assign_houses->monthly_rent= $request['monthly_rent'];
    $assign_houses->property_name= $request['property_name'];

    


    $Houses->save();
return redirect()->to('houses.index')-> with('message','Successfully created Property');
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
    public function unactive_house($id){

        $Houses= DB::table('houses')
                        ->where('id',$id)
                        ->update(['house_status'=>1]);
                        //  Session::put('message','Category Unactive Successfully');
        return Redirect::to('all-houses');
        // return view('admin.all_category');
     }
     public function active_house($id){

        $Houses= DB::table('houses')
                        ->where('id',$id)
                        ->update(['house_status'=>0]);
                        // Session::put('message','Category Activated Successfully');
        return Redirect::to('all-houses');
        // return view('admin.all_category');
     }
}
