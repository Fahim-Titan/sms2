<?php namespace App\Http\Controllers;

use App\Subject;
use App\Class_branch;
use Carbon\Carbon;
use Illuminate\Support\Facades\Input;
use Illuminate\Http\Request;
use DB;
use App\Http\Requests;

class SubjectController extends Controller {

  /**
   * Display a listing of the resource.
   *
   * @return Response
   */
  public function index()
  {
//     return view('subjects');
//     return 'you are in subjects page';
    $class = new Class_branch();
//    $class_info=DB::table('class_branches')->select('name','cb_id')->get();

//    $class_info = 'asdf';
//    $class_info = Class_branch::lists('cb_id','name');

  }

  public function subject_list()
  {
    $subject = Subject::all();
    //      $users = User::all();
    return view('edit.subject',compact('subject'));
  }


  /**
   * Show the form for creating a new resource.
   *
   * @return Response
   */
  public function create()
  {
    // $class_info=DB::table('class_branches')->lists('name','cb_id');
    // return view('subjects',compact('class_info'));
	  return view('subjects');
  }

  /**
   * Store a newly created resource in storage.
   *
   * @return Response
   */
  public function store(Requests\createSubjectRequest $request)
  {
//    $/* subject = new Subject();
//    $subject->cb_id = $request->cb_id;
//    $subject->sub_name = $request->sub_name;
//    $subject->textbook_name = $request->textbook_name;
//    $subject->save();
////    return 'data saved';
//    return view('admin.dashboard')->withSuccess('data has been saved'); */
	

	$subject = new Subject();
    $subject->sub_name = $request->sub_name;
    $subject->textbook_name = $request->textbook_name;
    $subject->credit = $request->credit;
    $subject->save();
//    return 'data saved';
    return view('admin.dashboard')->withSuccess('data has been saved');
  }
 

  /**
   * Display the specified resource.
   *
   * @param  int  $id
   * @return Response
   */
  public function show($id)
  {
    $sub = DB::table('subjects')->where('sub_id',$id)->get();
//    $sub = Subject::findOrFail($id);
    return view('edit.editSubject',compact('sub'));
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
  public function update($sub_id,Request $request)
  {
    //$sub = Subject::findOrFail($id);
    $sub = new Subject();
//    $sub = DB::table('subjects')->where('sub_id',$request->sub_id)->get();
//    $sub->sub_id = $request->sub_id;
//    $sub->sub_name = $request->sub_name;
//    $sub->textbook_name = $request->textbook_name;
//    $sub->credit = $request->credit;
    //$sub=
    $sub->update($request->all());
    return view('admin.dashboard');
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