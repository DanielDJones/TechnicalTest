@extends('layouts.app')

@section("content")
    <h1>New Members</h1>
    
    @if(($membershipsReport) != null)
        @foreach($membershipsReport as $membership)
            <div class="card">
                <h3>{{$membership->start_date}}</h3>
            <p>Member ID: {{$membership->member_id}}</p>
            </div>
        @endforeach
        <!-- Page cont -->
    @else
        <p>No new memberships this month</p>
        
    @endif

@endsection