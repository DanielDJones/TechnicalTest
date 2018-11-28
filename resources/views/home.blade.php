@extends('layouts.app')
<script>
//Report Search
function reportBuilder($month) {
    $year = document.getElementById("year").value;
    if(!$year == ""){
        $builturl = "/report/" + $month + "/" + $year;
        window.location.href = $builturl;
    } else {
        alert("Enter A Year");
    }
    

}

</script>
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <h3>Welcome back {{ Auth::user()->name }}</h3>
            <div class="card">
                

                <div class="card-body">
                  
                    <h5>Report Builder</h5>
                        <p>Year<input id="year" type="text" class="form-control"></p>
                        <div class="dropdown">
                            <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Report Month
                            </button>
                            <a href="/members" class="btn btn-gym">View/Edit Members</a>
                            <a href="/members/create" class="btn btn-gym">Add Members</a>
                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                <a class="dropdown-item" onclick="reportBuilder(1)">January</a>
                                <a class="dropdown-item" onclick="reportBuilder(2)">February</a>
                                <a class="dropdown-item" onclick="reportBuilder(3)">March</a>
                                <a class="dropdown-item" onclick="reportBuilder(4)">April</a>
                                <a class="dropdown-item" onclick="reportBuilder(5)">May</a>
                                <a class="dropdown-item" onclick="reportBuilder(6)">June</a>
                                <a class="dropdown-item" onclick="reportBuilder(7)">July</a>
                                <a class="dropdown-item" onclick="reportBuilder(8)">August</a>
                                <a class="dropdown-item" onclick="reportBuilder(9)">September</a>
                                <a class="dropdown-item" onclick="reportBuilder(10)">October</a>
                                <a class="dropdown-item" onclick="reportBuilder(11)">November</a>
                                <a class="dropdown-item" onclick="reportBuilder(12)">December</a>
                            </div>
                        </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
