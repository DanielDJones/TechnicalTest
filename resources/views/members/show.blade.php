@extends("layouts.app")

@section("content")
    <h1>{{$member->forename}} {{$member->surname}}</h1>
    <p>{{$member->email}} {{$member->dateofbirth }} {{$member->telnumber}}</p>
    <a class="btn btn-default" href="/members">Back</a>
    <a href="/members/{{$member->member_id}}/edit" class="btn btn-info">Edit</a>
    
    {!!Form::open(["action" => ["MembersController@destroy", $member->member_id], 'method' => 'POST'])!!}
                {{Form::hidden('_method', 'DELETE')}}
                {{Form::submit('Delete', ['class' => 'btn btn-danger float-right'])}}
    {!!Form::close()!!}
@endsection