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
    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
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
        $cgpa = 0.00;
        $grade = 0.00;
        foreach($course_details as $result)
        {
            $number = $result->quiz+$result->final+$result->classPerformance;

            if($number <40 ) {$grade=0.00;}
            elseif ($number >40 && $number <44){ $grade = 2.00;}
            elseif ($number >=45 && $number <49) {$grade =2.25;}
            elseif ($number >=50 && $number <54) {$grade =2.50;}
            elseif ($number >=55 && $number <59) {$grade =2.75;}
            elseif ($number >=60 && $number <64) {$grade =3.00;}
            elseif ($number >=65 && $number <69) {$grade =3.25;}
            elseif ($number >=70 && $number <74) {$grade =3.50;}
            elseif ($number >=75 && $number <79) {$grade =3.75;}
            elseif($number >80){$grade=4.00;}


            $cgpa += $grade/$result->credit;
        }

	   return view('student.dashboard', compact('cgpa','course_details','student_results'));
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
