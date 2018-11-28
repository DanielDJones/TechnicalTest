@extends("layouts.app")

@section("content")
    <h1>Create Membership</h1>
    {!! Form::open(["action" => "MembershipController@store", "method" => "POST"]) !!}
        <div class="form-group">
            {{Form::label("member_id", "MemberID")}}
            {{Form::text("member_id", $member->member_id, ["class" => "form-control disabled"])}}
        </div>
        
        <div class="form-group">
            {{Form::label("start_date", "Start date")}}
            {{Form::date("start_date", "", ["class" => "form-control"])}}
        </div>
        <div class="form-group">
                {{Form::label("dend_date", "End Date")}}
                {{Form::date("end_date", "", ["class" => "form-control"])}}
        </div>
        {{Form::submit("Submit", ["class"=>"btn btn-gym"])}}
    {!! Form::close() !!}

@endsection