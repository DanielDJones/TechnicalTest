@extends("layouts.app")

@section("content")
    <h1>Members</h1>
    @if(count($members) > 1)
        @foreach($members as $member)
            <div class="card">
                <h3>{{$member->surname}}</h3>
                <p><a href="/members/{{$member->id}}">View Member</a></p>
            </div>
        @endforeach
    @else
        <p>No Posts found</p>
        
    @endif

@endsection