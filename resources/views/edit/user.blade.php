@foreach($users as $user)
   {{$user->id}}<br>
    <a href="{{url('/edit',$user->id)}}">{{$user->name}}</a><br>
    {{$user->email}}<br>
    {{$user->contact_number}}<br><br><br>
    @endforeach