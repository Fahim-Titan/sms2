{!! Form::open(array('route' => 'result.store', 'method' => 'POST')) !!}
	<ul>
		<li>
			{!! Form::label('sub_id', 'Subject Name:') !!}
			{{--{!! Form::text('sub_id') !!}--}}
			{!! Form::select('sub_id',$sub_info,null,['placeholder' => 'choose subject', 'class' => 'form-control']) !!}
		</li>
		<li>
			{!! Form::label('id', 'Student ID:') !!}
			{{--{!! Form::text('sub_id') !!}--}}
			{!! Form::select('id',$students,null,['placeholder' => 'choose student id', 'class' => 'form-control']) !!}
		</li>
		<li>
			{!! Form::label('quiz', 'Quiz:') !!}
			{{--{!! Form::text('sub_id') !!}--}}
			{!! Form::text('quiz')!!}
		</li>
		<li>
			{!! Form::label('class_performance', 'class performance:') !!}
			{{--{!! Form::text('sub_id') !!}--}}
			{!! Form::text('class_performance')!!}
		</li>
		<li>
			{!! Form::label('final', 'final:') !!}
			{{--{!! Form::text('sub_id') !!}--}}
			{!! Form::text('final')!!}
		</li>


		<li>
			{!! Form::submit('Submit Result') !!}
		</li>
	</ul>
{!! Form::close() !!}