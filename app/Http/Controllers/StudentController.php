<?php

namespace App\Http\Controllers;

use App\Result;
use Illuminate\Http\Request;
use Carbon\Carbon;
use App\Http\Requests;
use Illuminate\Support\Facades\Auth;
use DB;
class StudentController extends Controller
{
    //
    public function index()
    {
         //$student_info = Auth::id();
        // $infos = DB::table('users')->where('id', '=', $student_info)->get();

        // return view('student.dashboard', compact('student_info','infos'));
		
		        

		
        //return view('student.dashboard')->with('student_info');



       //$infos = DB::table('users')->where('id', '=', $student_info)->get();
       /* return view('student.dashboard', compact('student_info','infos')); */
        $student_id = Auth::user();
        $student_results = DB::table('results')->where('id',$student_id->id)->get();
        $course_details = DB::table('results')->join('subjects', 'results.sub_id','=','subjects.sub_id')->where('id',$student_id->id)->get();
	   return view('student.dashboard', compact('course_details','student_results'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {

    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store()
    {

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function show($id)
    {

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id)
    {

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function update($id)
    {

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id)
    {

    }

}
