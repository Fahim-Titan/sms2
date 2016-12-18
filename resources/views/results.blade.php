@extends('layouts.t_master')

@section('main_body')
		<!-- banner -->


				{{--{!! Form::open(array('route' => 'result.store', 'method' => 'POST')) !!}--}}
				{{--<div class="form-group">--}}
						{{--{!! Form::label('sub_id', 'Subject Name:') !!}--}}
						{{--{!! Form::text('sub_id') !!}--}}
						{{--{!! Form::select('sub_id',$sub_info,null,['class' => 'form-control']) !!}--}}
				{{--</div>--}}
				{{--<div class="form-group">--}}
						{{--{!! Form::label('id', 'Student ID:') !!}--}}
						{{--{!! Form::text('sub_id') !!}--}}
						{{--{!! Form::select('id',$enrolled_students,null,['placeholder' => 'choose student id', 'class' => 'form-control']) !!}--}}
				{{--</div>--}}
				{{--<div class="form-group">--}}
						{{--{!! Form::label('quiz', 'Quiz:') !!}--}}
						{{--{!! Form::text('sub_id') !!}--}}
						{{--{!! Form::text('quiz',null,['class' => 'form-control'])!!}--}}
				{{--</div>--}}
				{{--<div class="form-group">\--}}
						{{--{!! Form::label('class_performance', 'class performance:') !!}--}}
						{{--{!! Form::text('sub_id') !!}--}}
						{{--{!! Form::text('class_performance',null,['class' => 'form-control'])!!}--}}
				{{--</div>--}}
				{{--<div class="form-group">--}}
						{{--{!! Form::label('final', 'final:') !!}--}}
						{{--{!! Form::text('sub_id') !!}--}}
						{{--{!! Form::text('final',null,['class' => 'form-control'])!!}--}}
				{{--</div>--}}


				{{--<div class="form-group">--}}
						{{--{!! Form::submit(null, ['class' => 'btn btn-default']) !!}--}}
				{{--</div>--}}
				{{--{!! Form::close() !!}--}}
				<h2>{{$subject_name->sub_name}}</h2>
				<table class="table table-striped">
					<thead>
					<tr>
						<th>ID</th>
						<th>Quiz 1</th>
						<th>Quiz 2</th>
						<th>Quiz 3</th>
						<th>Quiz 4</th>
						<th>Class Performence</th>
						<th>Final</th>
						<th>Update Quiz</th>
						<th>Update Class Performence</th>
						<th>Update Final</th>
					</tr>
					</thead>
				@foreach($enrolled_students as $student)

					<tr>
						<td>{{$student->Result_id}}</td>
						<td>{{$student->id}}</td>
						<td>{{$student->quiz1}}</td>
						<td>{{$student->quiz2}}</td>
						<td>{{$student->quiz3}}</td>
						<td>{{$student->quiz4}}</td>
						<td>{{$student->classPerformance}}</td>
						<td>{{$student->final}}</td>
						<td><a href="{{route('quiz.show',$student->Result_id)}}">update</a></td>
						<td><a href="{{route('classperformance.show',$student->Result_id)}}">update</a></td>
						<td><a href="{{route('final.show',$student->Result_id)}}">update final</a></td>
					</tr>

					@endforeach
				</table>
			</div>
		</div>


		{{--ai gula k option er moddhe dhukate hobe.--}}
		{{--@foreach($info as $key)--}}
		{{--{{$key -> sub_id}} -> {{$key->sub_name}} ===>--}}
		{{--{{$key-> cb_id}} -> {{$key->name}}--}}
		{{--<br>--}}
		{{--@endforeach--}}


		@if (!empty($success))
			{{ $success }}
		@endif

		@if($errors->any())

			<ul class="alert alert-danger">
				@foreach($errors->all() as $error)
					<li>{{$error}}</li>
				@endforeach
			</ul>
		@endif


	@endsection





