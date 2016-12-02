<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Carbon\Carbon;
use App\Http\Requests;
use DB;

class editcontroller extends Controller
{
    //
    public  function  index()
    {
        $users = User::all();
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

        $user->update($request->all());

        return view('admin.dashboard');
    }


}
