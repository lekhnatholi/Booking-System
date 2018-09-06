@extends('layouts.frontend')

@section('content')

    <style>
        .form-row{
            padding:20px;
            margin: 5px;
        }
    </style>
    <div class="container">
        <section>
            <form action="{{route('passengerAdd')}}" method="post">
                {{@csrf_field()}}
                <input type="hidden" name="buses_id" value="{{$buses_id}}">
                <input type="hidden" name="schedules_id" value="{{$schedules_id}}">
                @foreach($seat_data as $key => $no)
                <div class="row">
                    <div class="col-md-3 mb-3">
                        <label for="validationDefault01">Name</label>
                        <input type="text" name="name[{{$key}}]" class="form-control" id="validationDefault01" placeholder="First name" >
                    </div>
                    <div class="col-md-3 mb-3">
                        <label for="validationDefault02">Gender</label>
                        <input type="text"  name="gender[{{$key}}]" class="form-control" id="validationDefault02" placeholder="Gender"  >
                    </div>
                    <div class="col-md-3 mb-3">
                        <label for="validationDefault02">Age</label>
                        <input type="text" name="age[{{$key}}]" class="form-control" id="validationDefault02" placeholder="Age" >
                    </div>
                    <div class="col-md-3 mb-3">
                        <label for="validationDefault02">Seat No:{{$no['name']}}</label>
                        <input type="hidden" name="seat[{{$key}}]" class="form-control" id="validationDefault02" placeholder="Seat No" value="{{$no['name']}}">
                    </div>
                </div>
                @endforeach
                <div class="row">
                    <div class="col-md-6 ">
                        <div class="form-group">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="invalidCheck2" required>
                                <label class="form-check-label" for="invalidCheck2">
                                    Agree to terms and conditions
                                </label>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">&nbsp;</div>
                </div>
                <div class="row">

                        <button class="btn btn-sm " type="submit">Submit</button>

                </div>
            </form>
        </section>
        </div>

@endsection