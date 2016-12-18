<?php namespace App\Http\Controllers;
use DB;
use Carbon\Carbon;
use Illuminate\Support\Facades\Input;
use App\Http\Requests;
use App\Enrollment;
use App\Result;
class EnrollmentController extends Controller {

  /**
   * Display a listing of the resource.
   *
   * @return Response
   */
  public function index()
  {
//    return 'u r in enrollments page';
  //  $info = DB::Select(DB::raw("select subjects.sub_id,subjects.cb_id, class_branches.name, subjects.sub_name, subjects.textbook_name from class_branches, subjects where class_branches.cb_id = subjects.cb_id"));
    // $info = DB::table('class_branches')->lists('name','cb_id');
    // return view('enrollments',compact('info'));
	
	
	 $info = DB::table('subjects')->lists('sub_name','sub_id');
    return view('enrollments',compact('info'));
//    return view('enrollments');
  }

  /**
   * Show the form for creating a new resource.
   *
   * @return Response
   */
  public function create()
  {
    return view('enrollments');
  }

  /**
   * Store a newly created resource in storage.
   *
   * @return Response
   */
  public function store(Requests\CreateEnrollmentRequest $request)
  {
    $info = DB::table('subjects')->lists('sub_name','sub_id');
    $enroll = new Enrollment();
    $enroll->id = $request->id;
    $enroll->sub_id = $request->sub_id;
    $enroll->save();

    $result = new Result();
    //$result = Result::findOrNew($request->id);
    $result->id = $request->id;
    $result->sub_id = $request->sub_id;
    $result->e_id=0;
    $result->quiz1 = -1;
    $result->quiz2 = -1;
    $result->quiz3 = -1;
    $result->quiz4 = -1;
    $result->classPerformance = -1;
    $result->final = -1;
    $result->save();
    //return 'saved';
    return view('enrollments',compact('info'))->withSuccess('Student Enrolled !');
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

?>