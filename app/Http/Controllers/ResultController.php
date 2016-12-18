<?php namespace App\Http\Controllers;

//use Symfony\Component\HttpFoundation\Request;
use App\Enrollment;
use App\Result;
use App\Subject;
use App\User;
use Excel;
//use Request;
use DB;
use App\Http\Requests;
use Illuminate\Http\Request;
use Carbon\Carbon;
use Illuminate\Support\Facades\Input;

class ResultController extends Controller {
public $count = 0;
  /**
   * Display a listing of the resource.
   *
   * @return Response
   */
  public function index()
  {
//this line needs to be used
//select subjects.sub_id,class_branches.cb_id, subjects.sub_name ,class_branches.name from subjects,class_branches where subjects.cb_id=class_branches.cb_id
//    $sub_info = DB::table('subjects')->join('class_branches','subjects.cb_id')
    // $sub_info = DB::table('subjects')->pluck('sub_name','sub_id');
    // return view('results',compact('sub_info'));
	
///sir er requirement change hoise
//	$students = User::select(DB::raw("(id+' => '+ name) as name, id"))->lists('name', 'id');
//    $students = Enrollment::all();
//    //$students = DB::table('users')->pluck('id');
//    //$students = User::all('name','id');
      //$sub_info = DB::table('subjects')->pluck('sub_name','sub_id');
//    return view('results',compact('sub_info','students'));

//as per new requirement

    $sub_info = Subject::all()->pluck('sub_name','sub_id');
    return view('results',compact('sub_info'));

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
  public function store(Requests\uploadResultRequest $request)
  {
	  
	$result = new Result();
    $result->id = $request->id;
    $result->sub_id = $request->sub_id;
    $result->e_id = '01';
    $result->quiz = $request->quiz;
    $result->classPerformance = $request->class_performance;
    $result->final = $request->final;
    $result->save();
    return $this->index()->withSuccess('data has been saved');

}

  /**
   * Display the specified resource.
   *
   * @param  int  $id
   * @return Response
   */
  public function show($id)
  {
    $mm = $id;
//    $enrolled_students = DB::table('enrollments')
//        ->where('sub_id', $id)
//        ->join('users','enrollments.id','=','users.id')
//        ->pluck('enrollments.id');
//    //        ->join('results','users.id','=','results.id')
////        ->join('results','results.sub_id','=',$id)
//
//    //$result_data =asdf;
//    $sub_info = DB::table('subjects')->where('sub_id','=',$id)->pluck('sub_name','sub_id');
//    return view('results',compact('enrolled_students','sub_info'));
////    return $enrolled_students;
//    return "show method called";
    $subject_name = DB::table('subjects')->where('sub_id',$id)->first();
    $enrolled_students = DB::table('results')->where('sub_id',$id)->get();
    return view('results',compact('enrolled_students','id','subject_name'));
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
  public function update($id, Request $request)
  {
//
//    $name = $request->name;
//    $num = $request->final;
//    //$result = new Result();
//    $result = Result::firstOrNew(array('id'=>$id,'sub_id'=>$request->sub_id));
//    //$result->id = $id;
//    //$result->sub_id = $request->sub_id;
//    $result->e_id = 1;
//    $result->marks = 0;
//    $result->quiz =$request->quiz;
//    $result->classPerformance =$request->class_performance ;
//    $result->final = $request->final;
//    $result->save();
//    return compact('name','num','id') ;
return $id;
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

?>