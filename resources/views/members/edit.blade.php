@extends("layouts.app")

@section("content")
    <h1>Edit Member</h1>
    {!! Form::open(["action" => ["MembersController@update", $member->member_id], "method" => "POST"]) !!}
        <div class="form-group">
            {{Form::label("forename", "Forename (Required)")}}
            {{Form::text("forename", $member->forename, ["class" => "form-control", "placeholder" => "John"])}}
        </div>
        <div class="form-group">
            {{Form::label("surname", "Surname (Required)")}}
            {{Form::text("surname", $member->surname, ["class" => "form-control", "placeholder" => "Smith"])}}
        </div>
        <div class="form-group">
            {{Form::label("email", "Email Address (Required)")}}
            {{Form::text("email", $member->email, ["class" => "form-control", "placeholder" => "JSmith@gmail.com"])}}
        </div>
        <div class="form-group">
                {{Form::label("Subscription Type")}}
                {{Form::select('sub_type', ['M' => 'Monthly', 'Y' => 'Yearly'], 'M')}}
        </div>
        <div class="form-group">
            {{Form::label("dateofbirth", "Date of Birth")}}
            {{Form::date("dateofbirth", $member->dateofbirth, ["class" => "form-control", "placeholder" => "Smith"])}}
        </div>
        <div class="form-group">
            {{Form::label("phonenumber", "Phone Number")}}
            {{Form::text("phonenumber", $member->phonenumber, ["class" => "form-control", "placeholder" => "0121 000 0000"])}}
        </div>
        <!-- Spoof put request to allow for the update -->
        {{Form::hidden("_method", "PUT")}}
        {{Form::submit("Submit", ["class"=>"btn btn-gym"])}}
    {!! Form::close() !!}

@endsection