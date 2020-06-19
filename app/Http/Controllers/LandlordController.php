<?php

namespace App\Http\Controllers;
use Intervention\Image\ImageManagerStatic as Image;
use App\Landlord;
use Auth;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use DB;

class LandlordController extends Controller
{
    
 public function add_landlord(){

     
    return view('/landlord.add_landlord');
 }


 public function all_landlord(){

    $landlords =DB::table('landlords')->get();
    return view('/landlord.all_landlord',compact('landlords'));
}


public function save_landlord(Request $request ){

    $data =array();

      
       
       $data['firstname']=$request->firstname;
       $data['lastname']=$request->lastname;
       $data['username']=$request->username;
       $data['passport']=$request->passport;
       $data['email']=$request->email;
       $data['phone_number']=$request->phone_number;
       
    //    $data['publication_status']=$request->publication_status;
      
       $image=$request->file('avatar');

       if ($image) {

           $image_name = str_random(20);
           $ext=strtolower($image->getClientOriginalExtension());
           $image_full_name=$image_name.'.'.$ext;
           $upload_path='image_landlords/';
           $image_url=$upload_path.$image_full_name;
           $success=$image->move($upload_path,$image_full_name);
           if ($success) {

               $data['avatar'] = $image_url;
               DB::table('landlords')->insert($data);
            //    Session::put('message','Landlords added Successfully');

               return Redirect::to('all-landlord');

           }
       }

       $data['image']='';
       DB::table('landlords')->insert($data);
    //    Session::put('message', ' Landlords added successfully with out image');

       return Redirect::to('all-landlord');
}

public function show_landlord($id){

    $landlords =Landlord::find($id);
      
    return view('/landlord.show',compact('landlords','id'));
}


public function edit_landlord($id){
    // $this->AdminAuthCheck();
       $landlords=DB::table('landlords')
              ->where('id',$id)
              ->first();



      return view('landlord.edit',compact('landlords'));
      // return view('admin.all_category');
   }
   public function update_landlord(Request $request,$id){
     
        
    $data =array();
       $data['firstname']=$request->firstname;
       $data['lastname']=$request->lastname;
       $data['username']=$request->username;
       $data['passport']=$request->passport;
       $data['email']=$request->email;
       $data['phone_number']=$request->phone_number;
    
    DB::table('landlords')
            ->where('id',$id)
            ->update($data);

            // Session::get('message','Category Updated Successfully');

            return Redirect::to('all-landlord');
       
  
}



public function edit_profile($id)
{
    $landlords=DB::table('landlords')
    ->where('id',$id)
    ->first();   
    return view('landlord.edit_profile',compact('landlords'));
      
   }


   public function update_profile(Request $request,$id)
   { 
    $data =array();
       $image=$request->file('avatar');

    if ($image) {

        $image_name = str_random(20);
        $ext=strtolower($image->getClientOriginalExtension());
        $image_full_name=$image_name.'.'.$ext;
        $upload_path='image_landlords/';
        $image_url=$upload_path.$image_full_name;
        $success=$image->move($upload_path,$image_full_name);
        if ($success) {

            $data['avatar'] = $image_url;

            DB::table('landlords')
                ->where('id',$id)
                ->update($data);
          
                return Redirect::to('all-landlord');

        }
    }

    $data['image']='';

    DB::table('landlords')
                ->where('id',$id)
                ->update($data);
   
                return Redirect::to('all-landlord');

   }




public function delete_landlord($id){
       
   DB::table('landlords')
        ->where('id',$id)
        ->delete();
        

        // Session::get('message','Landlord Deleted Successfully');

        return Redirect::to('all-landlord');
}
   



}
