<?php

namespace App\Http\Controllers;

use App\Subject;
use Illuminate\Http\Request;
use App\User;
use Carbon\Carbon;
use App\Http\Requests;
use DB;
use Illuminate\Support\Facades\Input;

class editcontroller extends Controller
{
    //
    public  function  index()
    {
       $users = DB::table('users')->where('roles','=','student')->get();
  //      $users = User::all();
        return view('edit.user',compact('users'));
    }

    public  function  teacher_list()
    {
        $users = DB::table('users')->where('roles','=','teacher')->get();
        //      $users = User::all();
        return view('edit.user',compact('users'));
    }


    public  function show($id)
    {
        $user = User::findOrFail($id);
        return view('edit.editUser',compact('user'));
    }

    public  function  update($id, Request $request)
    {
        $user = User::findOrFail($id);

//        $user->update($request->all());
        $user->name = $request->name;
        $user->blood_type = $request->blood_type;
        $user->email  = $request->email;
        $user->dob = $request->dob;
        $user->contact_number = $request->contact_number;
        $user->address = $request->address;
        $user->guardian_name = $request->guardian_name;
        $user->gurdian_phone_number = $request->gurdian_phone_number;
        $user->guardian_email = $request->guardian_email;
        $user->gender = $request->gender;
        $user->roles = $request->roles;
        $user->qualification = $request->qualification;
        if($request->hasFile('image')){
            $file = Input::file('image');
            $timestamp = str_replace([' ', ':'], '-', Carbon::now()->toDateTimeString());
            $name = $timestamp . '-' . $file->getClientOriginalName();
            $user->image = $name;
            $file->move(public_path() . '/user_images', $name);
        }
        $user->password = bcrypt($request-> password);
        $user->update();
        return view('admin.dashboard');
    }


}
