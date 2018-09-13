
@extends('layouts.frontend')
@section('content')

    <!-- Added inline css on gender's radio button, agree conditions and submit button. Horizontal row added. Hide/show function added-->
    <div class="container">
        <div class="section-title" data-animation="fadeInUp">
            <h2 class="title"> Booking Deatails</h2>
        </div>
        <div class="row text-center">
            <div class="panel-body">
                <form action="{{route('passengerAdd')}}" method="post" enctype="multipart/form-data">
                    {{csrf_field()}}
                    <div class="rows">
                        <div class="col-md-3"><strong>Traveller Name : *</strong></div>
                        <div class="col-md-9">
                            <input type="text" name="tname" class="form-control" placeholder="Traveller Name">
                            <small class="text text-danger">{{$errors->first('name')}}</small>
                        </div>
                    </div>
                    <div class="col-md-12">&nbsp;</div>
                    <div class="rows">
                        <div class="col-md-3"><strong>Contact : *</strong></div>
                        <div class="col-md-9">
                            <input type="text" name="contact" class="form-control" placeholder="Contact No:">
                            <small class="text text-danger">{{$errors->first('contact')}}</small>
                        </div>
                    </div>
                    <div class="col-md-12">&nbsp;</div>
                    <div class="rows">
                        <div class="col-md-3"><strong>Address : *</strong></div>
                        <div class="col-md-9">
                            <input type="text" name="address" value="" class="form-control" placeholder="address">
                            <small class="text text-danger">{{$errors->first('address')}}</small>
                        </div>
                    </div>
                    <div class="col-md-12">&nbsp;</div>
                    <div class="rows ">
                        <div class="col-md-3"><strong>Gender : *</strong></div>
                        <div class="col-md-9" style="text-align: left; padding-left: 30px">
                            <div class="row">
                                <label for="male">
                                    <input type="radio" name="tgender" value="male"> Male &nbsp;&nbsp;
                                </label>
                                <label for="female">
                                    <input type="radio" name="tgender" value="female"> Female &nbsp;&nbsp;
                                </label>
                                <label for="other">
                                    <input type="radio" name="tgender" value="other"> Other &nbsp;&nbsp;
                                </label>
                                <small class="text text-danger">{{$errors->first('profile')}}</small>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12">
                        &nbsp;
                        <div class="row">
                            <div class="col-md-12" style="padding-left: 100px">
                                <hr style="border: solid 0.5px">

                                <div class="row" style="text-align: left; padding-left: 20px">

                                    <strong>Passenger's Information &nbsp; : &nbsp;&nbsp;</strong>
                                    <!-- checkbox for show/hide function of the passengersInfo div-->
                                    <input type="checkbox" name="passengersInfo"
                                           onchange="showhide(document.getElementById('passengersInfo'))"> Hide

                                </div>

                                <hr style="border: solid 0.5px">

                            </div>

                        </div>
                    </div>
                    <!-- passengersInfo with hide/show option, script given at the bottom with showhide(which) function-->
                    <div id="passengersInfo">
                        <input type="hidden" name="buses_id" value="{{$buses_id}}">
                        <input type="hidden" name="schedules_id" value="{{$schedules_id}}">
                        <div class="row " id="info_passenger">
                            @foreach($seat_data as $key => $no)
                                <div class="col-md-12">&nbsp;</div>
                                <div class="rows">
                                    <div class="col-md-3"><strong>Seat No :{{$no['name']}} </strong></div>
                                    <input type="hidden" name="seat[{{$key}}]" class="form-control"
                                           id="validationDefault02"
                                           placeholder="Seat No" value="{{$no['name']}}">

                                    <div class="col-md-3 mb-3">
                                        {{--<label for="validationDefault01">Name</label>--}}
                                        <input type="text" name="name[{{$key}}]" class="form-control"
                                               id="validationDefault01" placeholder="First name">
                                    </div>
                                    <div class="col-md-3 mb-3">
                                        {{--<label for="validationDefault02">Gender</label>--}}
                                        <select name="gender[{{$key}}]" id="" class="form-control">
                                            <option value="" selected>Gender</option>
                                            <option type="text" value="male" id="validationDefault02">Male</option>
                                            <option type="text" value="female" id="validationDefault02">Female</option>
                                            <option type="text" value="other" id="validationDefault02">Other</option>
                                        </select>
                                    </div>
                                    <div class="col-md-3 mb-3">
                                        {{--<label for="validationDefault02">Age</label>--}}
                                        <input type="text" name="age[{{$key}}]" class="form-control"
                                               id="validationDefault02" placeholder="Age">
                                    </div>
                                </div>
                            @endforeach
                        </div>

                    </div>
                    &nbsp; &nbsp;

                    <div class="row">
                        <div class="col-md-3">
                        </div>
                        <div class="col-md-6" style="text-align: left">
                            <div class="form-group">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="" id="invalidCheck2"
                                           required>
                                    <label class="form-check-label" for="invalidCheck2">
                                        Agree to terms and conditions
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6"></div>
                    </div>
                    <div class="col-md-12"></div>
                    <div class="row">
                        <div class="col-md-12" style="text-align: left">
                            <div class="col-md-3">
                            </div>
                            <button type="submit" class="btn btn-success"><i class="fa fa-check"></i>&nbsp;&nbsp;
                                submit
                            </button>
                        </div>
                    </div>


                </form>
            </div>

        </div>
    </div>




    <!-- <style>
        .form-row{
            padding:20px;
            margin: 5px;
        }
        .passen
        {
          margin:30px;
        }
    </style> -->



    {{--<script type="text/javascript">--}}
        {{--$(document).ready(function () {--}}
            {{--$('#dismiss_butt').on('click', function (c) {--}}
                {{--$('#info_passenger').fadeOut('slow', function (c) {--}}
                    {{--$('#info_').remove();--}}
                {{--});--}}
            {{--});--}}
        {{--});--}}


    {{--</script>--}}

    <!-- To hide and show  the informations of passenger, used for id passengersInfo-->
    <script>

        function showhide(which) {
            if (!document.getElementById)
                return;
            if (which.style.display == "none")
                which.style.display = "block";
            else {
                which.style.display = "none";
            }
        }
    </script>
@endsection

