@foreach($enrolled_students as $student)
    {!! Form::model($student,array('method' => 'PATCH', 'files' => true, 'action' =>['ResultController@update', $student->id])) !!}
{{--<div class="form-group">--}}
    {{--{!! Form::label('sub_id', 'Subject Name:') !!}--}}
    {{--{!! Form::text('sub_id') !!}--}}
    {{--{!! Form::text('sub_id',null,['placeholder' => 'choose subject', 'class' => 'form-control']) !!}--}}
{{--</div>--}}
  {!! Form::label('id', 'Student ID:') !!}

    {!! Form::label($student->id) !!}
<br>
    {!! Form::label('name', 'Student Name:') !!}
    {!! Form::text('name',$student->name) !!}

    {{--{!! Form::text('id',null,['placeholder' => 'choose student id', 'class' => 'form-control']) !!}--}}


    <div class="form-group">
        {!! Form::label('sub_id', 'Subject:') !!}
        {!! Form::text('sub_id')!!}
    </div>
<div class="form-group">
    {!! Form::label('class_performance', 'class performance:') !!}
    {!! Form::text('class_performance',null,['class' => 'form-control'])!!}
</div>
<div class="form-group">
    {!! Form::label('quiz', 'Quiz:') !!}
    {!! Form::text('quiz',null,['class' => 'form-control'])!!}
</div>
<div class="form-group">
    {!! Form::label('final', 'final:') !!}
    {!! Form::text('final',null,['class' => 'form-control'])!!}
</div>
    <div class="form-group">
        {!! Form::submit(null, ['class' => 'btn btn-default']) !!}
    </div>

    {!! Form::close() !!}

    <br><br>
@endforeach


