@extends("layouts.app")

@section("content")
    <h1>Create Member</h1>
    {!! Form::open(["action" => "MembersController@store", "method" => "POST"]) !!}
        <div class="form-group">
            {{Form::label("forename", "Forename (Required)")}}
            {{Form::text("forename", "", ["class" => "form-control", "placeholder" => "John"])}}
        </div>
        <div class="form-group">
            {{Form::label("surname", "Surname (Required)")}}
            {{Form::text("surname", "", ["class" => "form-control", "placeholder" => "Smith"])}}
        </div>
        <div class="form-group">
            {{Form::label("email", "Email Address (Required)")}}
            {{Form::text("email", "", ["class" => "form-control", "placeholder" => "JSmith@gmail.com"])}}
        </div>
        <div class="form-group">
                {{Form::label("Subscription Type")}}
                {{Form::select('sub_type', ['M' => 'Monthly', 'Y' => 'Yearly'], 'M')}}
        </div>
        <div class="form-group">
            {{Form::label("dateofbirth", "Date of Birth")}}
            {{Form::date("dateofbirth", "", ["class" => "form-control", "placeholder" => "Smith"])}}
        </div>
        <div class="form-group">
            {{Form::label("phonenumber", "Phone Number")}}
            {{Form::text("phonenumber", "", ["class" => "form-control", "placeholder" => "0121 000 0000"])}}
        </div>
        <div class="form-group">
                {{Form::label("phonenumber", "Phone Number")}}
                {{Form::text("phonenumber", "", ["class" => "form-control", "placeholder" => "0121 000 0000"])}}
        </div>
        {{Form::submit("Submit", ["class"=>"btn btn-primary"])}}
    {!! Form::close() !!}

@endsection