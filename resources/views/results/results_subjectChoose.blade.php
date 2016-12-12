<table>
@foreach($sub_info as $info)

    <tr>
        <td>{{$info->sub_id}}</td>
        <td><a href="{{url('/result',$info->sub_id)}}">{{$info->sub_name}}</a></td>
        <td>{{$info->textbook_name}}</td>
        <td>{{$info->credit}}</td>
    </tr>
    @endforeach
</table>