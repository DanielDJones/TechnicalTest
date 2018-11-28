@extends('layouts.app')
@section("content")
<h1>{{$title}}</h1>
<!-- Copyright free img used as placeholder -->
<div class="card">

<img src="https://images.unsplash.com/photo-1517836357463-d25dfeac3438?ixlib=rb-0.3.5&ixid=eyJhcHBfaWQiOjEyMDd9&s=bf23e88edf0700891eeac2e0cb3664b8&auto=format&fit=crop&w=1350&q=80" alt="gym" class="main-img">
<br>
<p>This website is built for a programming test. The goal was to make a website to organise gym membership using Laravel and MVC.</p>
<a href="/login" class="btn btn-gym">Login</a>
<br>
<a href="/register" class="btn btn-gym">Regitser (For testing)</a>
</div>

@endsection