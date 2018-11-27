@extends('layouts.app')
@section("content")
<h1>Report</h1>
@if($month == 0)
    <p>Displaying users for all months</p>
@else
    <p>Displaying users for $month</p>
@endif
@endsection