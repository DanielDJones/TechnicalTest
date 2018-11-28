@extends("layouts.app")

@section("content")
    <h1>{{$member->forename}} {{$member->surname}}</h1>
    <p>{{$member->email}} {{$member->dateofbirth }} {{$member->telnumber}} Sub Type: {{$member->sub_type}}</p>
    <a class="btn btn-secondary" href="/members">Back</a>
    <a href="/members/{{$member->member_id}}/edit" class="btn btn-gym">Edit</a>
    <a href="/membership/{{$member->member_id}}/create" class="btn btn-gym">Add Membership</a>

    {!!Form::open(["action" => ["MembersController@destroy", $member->member_id], 'method' => 'POST'])!!}
                {{Form::hidden('_method', 'DELETE')}}
                {{Form::submit('Delete', ['class' => 'btn btn-danger float-right'])}}
    {!!Form::close()!!}

    
    <!-- Display membership -->
    @if(count($memberships) > 0)
        @foreach($memberships as $membership)
            <div class="card">
                <h3>{{$membership->start_date}}</h3>
            </div>
        @endforeach
        <!-- Page cont -->
        {{$memberships->links()}}
    @else
    <div class="card">
        <p>No Memberships found</p>
    </div>
    @endif
@endsection