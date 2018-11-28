@extends('layouts.app')

@section("content")
    <h1>New Members</h1>
    
    @if(($membershipsReport) != null)
        @foreach($membershipsReport as $membership)
            <div class="card">
                <h3>{{$membership->start_date}}</h3>
            <p><p><a class="btn btn-gym" href="/members/{{$membership->member_id}}">View Member</a></p></p>
            </div>
        @endforeach
        <!-- Page cont -->
    @else
        <p>No new memberships this month</p>
    @endif

@endsection