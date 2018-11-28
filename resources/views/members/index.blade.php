@extends("layouts.app")

@section("content")
    <h1>Members</h1>
    @if(count($members) > 0)
        @foreach($members as $member)
            <div class="card">
                <h3>{{$member->forename}} {{$member->surname}}</h3>
                <p><a class="btn btn-gym" href="/members/{{$member->member_id}}">View Member</a></p>
            </div>
        @endforeach
        <!-- Page cont -->
        {{$members->links()}}
    @else
        <p>No Member found</p>
        
    @endif

@endsection