@extends("layouts.app")

@section("content")
    <h1>{{$member->forename}} {{$member->surname}}</h1>
    <p>{{$member->email}} {{$member->dateofbirth }} {{$member->telnumber}}</p>
    <a class="btn btn-default" href="/members">Back</a>
    
@endsection