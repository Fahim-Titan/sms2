<?php


namespace App\Http\Controllers;

use App\Result;
use Illuminate\Http\Request;
use App\Subject;
//use Illuminate\Http\Request;
use App\User;
use Carbon\Carbon;
use App\Http\Requests;
use DB;
use Auth;


class ClassPerformanceController extends Controller
{
    //
    public  function show($id)
    {
//        $user = DB::table('results')->where('result_id',$id);
//        //return view('edit.editUser',compact('user'));
//        return $id;
        $result = DB::table('results')->where('Result_id',$id)->get();
//        return view('results.final_student_result',compact('result'));
        //$result = Result::findOrFail($id);
        return view('results.classperformance_student_result',compact('result'));
    }

    public  function  update($id, Request $request)
    {
        $result = Result::find($id);
        //$result = new Result();
        //$result->Result_id = $id;
        $result->classPerformance = $request->classperformance;
        $result->save();
        //$result->update([$result->final]);
        //$result->update($request->all());
        return Teacher_assignController::index(Auth::user()->id);
        //return view('teacher.dashboard');
    }
}
