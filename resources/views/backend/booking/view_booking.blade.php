@extends('layouts.backend')
@section('title', 'View Bookings')
@section('content')
    <div class="col-lg-9 main-chart">
        <div class="panel panel-default">
            <div class="panel-heading" align="center">
                <h3 class="panel-title">View Booking</h3>
            </div>
            <div class="panel-body">
                <form action="{{route('bookings')}}" method="post" enctype="multipart/form-data">
                    {{csrf_field()}}
                    <div class="rows">
                        <div class="col-md-3"><strong>Traveller Name : *</strong></div>
                            <div class="col-md-9">
                                <input type="text" value="{{$booking->travellers->email }}" class="form-control" disabled>
                            </div>
                    </div>
                    <div class="col-md-12">&nbsp;</div>
                    <div class="rows">
                        <div class="col-md-3"><strong>Guest Name : *</strong></div>
                        <div class="col-md-9">
                            <input type="text" value="{{$booking->guests->contact }}" class="form-control" disabled>
                        </div>
                    </div>

                    {{--<div class="rows">--}}
                        {{--<div class="col-md-3"><strong>Traveller Phone : *</strong></div>--}}
                        {{--<div class="col-md-9">--}}
                            {{--<input type="text" class="form-control" value="{{$booking->traveller_phone}}" name="traveller_phone" disabled>--}}
                            {{--<small class="text text-danger">{{$errors->first('traveller_phone')}}</small>--}}

                        {{--</div>--}}
                    {{--</div>--}}

                    {{--<div class="rows">--}}
                        {{--<div class="col-md-3"><strong>Route : *</strong></div>--}}
                        {{--<div class="col-md-9">--}}
                            {{--<input type="text" class="form-control" name="route" value="{{$booking->route_name}}" disabled>--}}
                            {{--<small class="text text-danger">{{$errors->first('route')}}</small>--}}
                        {{--</div>--}}
                    {{--</div>--}}

                    <div class="rows " >
                        <div class="col-md-3"><strong>Bus Name : *</strong></div>
                        <div class="col-md-9">
                            <input type="text" class="form-control"  value="{{$booking->buses->title}}" disabled>
                        </div>
                    </div>
                    <div class="col-md-12">&ensp;</div>
                    <div class="rows " >
                        <div class="col-md-3"><strong>Bus Number : *</strong></div>
                        <div class="col-md-9">
                            <input type="text" class="form-control"  value="{{$booking->buses->vehicle_no}}" disabled>
                        </div>
                    </div>

                    <div class="rows " >
                        <div class="col-md-3"><strong>Seat : *</strong></div>
                        <div class="col-md-9">
                                <input type="text" name="seat" class="form-control" value="{{$booking->seat}} " disabled>
                        </div>
                    </div>

                    <div class="rows " >
                        <div class="col-md-3"><strong>Price : *</strong></div>
                        <div class="col-md-9">
                            <input type="text" class="form-control" name="price" value="{{$booking->price}}"disabled>

                        </div>
                    </div>

                    <div class="rows " >
                        <div class="col-md-3"><strong>Profile : *</strong></div>
                        <div class="col-md-9">
                            <input type="text" class="form-control" value="{{$booking->profile}}"disabled >
                        </div>
                    </div>
                    <div class="col-md-12">&ensp;</div>

                    <div class="row">&nbsp;
                        <div class="col-md-12">
                            <div align="center">
                                <div align="center">
                                    <a href="{{route('bookings')}}" class="btn btn-success">
                                        <i class="fa fa-check"></i>&nbsp;&nbsp;Procced
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
                Data Tables
            </h1>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
                <li class="breadcrumb-item"><a href="#">Tables</a></li>
                <li class="breadcrumb-item active">Data tables</li>
            </ol>
        </section>

        <!-- Main content -->
        <section class="content">
            <div class="row">
                <div class="col-12">

                    <div class="box">
                        <div class="box-header with-border">
                            <h3 class="box-title">Hover Export Data Table</h3>
                            <h6 class="box-subtitle">Export data to Copy, CSV, Excel, PDF & Print</h6>
                        </div>
                        <!-- /.box-header -->
                        <div class="box-body">
                            <div class="table-responsive">
                                <table id="example" class="table table-bordered table-hover display nowrap margin-top-10 w-p100">
                                    <thead>
                                    <tr>
                                        <th>S.N.</th>
                                        <th>Bus Name</th>
                                        <th>Depart Data</th>
                                        <th>Depart Time</th>
                                        <th>Arrival Date</th>
                                        <th>Arrival Time</th>
                                        <th>shift</th>
                                        <th>Price</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($schedule as $count =>$key)
                                        <tr>
                                            <td>{{++$count}}</td>
                                            <td>{{$key->buses->title}}</td>
                                            <td>{{$key->departure_date}}</td>
                                            <td>{{$key->departure_time}}</td>
                                            <td>{{$key->arrival_date}}</td>
                                            <td>{{$key->arrival_time}}</td>
                                            <td>{{$key->shift}}</td>
                                            <td>{{$key->ticket_price}}</td>
                                        </tr>
                                    @endforeach


                                    </tbody>

                                </table>
                            </div>
                        </div>
                        <!-- /.box-body -->
                    </div>
                    <!-- /.box -->

                </div>
                <!-- /.col -->
            </div>
            <!-- /.row -->
        </section>
        <!-- /.content -->
    </div>
@endsection