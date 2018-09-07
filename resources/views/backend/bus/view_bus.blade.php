@extends('layouts.backend')

@section('title', 'Bus')
@section('activeBus', 'active')

@section('content')
    {{--<div class="col-lg-9 main-chart">--}}
    {{--<div class="panel panel-default">--}}
    {{--<div class="panel-heading" align="center">--}}
    {{--<h3 class="panel-title">View Bus</h3>--}}
    {{--</div>--}}
    {{--<div class="panel-body">--}}
    {{--<div class="rows">--}}
    {{--<div class="col-md-3">--}}
    {{--<img class="himg" src="{{ url('public/img/bus/'.$bus->image) }}" width="160px"/>--}}
    {{--</div>--}}
    {{--<div class="col-md-9">--}}
    {{--<div class="col-md-3"><strong>Name : *</strong></div>--}}
    {{--<div class="col-md-9">--}}
    {{--<input type="text" class="form-control" name="title" placeholder="Name" value="{{$bus->title}}" disabled>--}}
    {{--<small class="text text-danger">{{$errors->first('title')}}</small>--}}
    {{--</div>--}}
    {{--<div class="col-md-12">&nbsp;</div>--}}
    {{--<div class="col-md-3"><strong>Bus Number : *</strong></div>--}}
    {{--<div class="col-md-9">--}}
    {{--<input type="text" class="form-control" name="vehicle_no" placeholder="Bus No" value="{{$bus->vehicle_no}}" disabled>--}}
    {{--<small class="text text-danger">{{$errors->first('vehicle_no')}}</small>--}}
    {{--</div>--}}
    {{--<div class="col-md-12">&nbsp;&nbsp;</div>--}}
    {{--<div class="col-md-3"><strong>Bill Book No : *</strong></div>--}}
    {{--<div class="col-md-9">--}}
    {{--<input type="text" class="form-control" name="Bill Book No" value="{{$bus->billbook_no}}" disabled>--}}
    {{--<small class="text text-danger">{{$errors->first('billbook_no')}}</small>--}}
    {{--</div>--}}
    {{--<div class="col-md-12">&nbsp;</div>--}}
    {{--<div class="col-md-3"><strong>Bus Type</strong></div>--}}
    {{--<div class="col-md-9">--}}
    {{--<input type="text" value="{{$bus->bustypes->title}}" class="form-control" disabled>--}}
    {{--</div>--}}
    {{--<div class="col-md-12">&nbsp;</div>--}}
    {{--<div class="col-md-3"><strong>Route </strong></div>--}}
    {{--<div class="col-md-9">--}}
    {{--<input type="text" value="{{$bus->routes->title }}" class="form-control" disabled>--}}
    {{--</div>--}}
    {{--<div class="col-md-12">&nbsp;</div>--}}
    {{--<div class="col-md-3"><strong>Vendor</strong></div>--}}
    {{--<div class="col-md-9">--}}
    {{--<input type="text" value="{{$bus->vendors->email }}" class="form-control" disabled>--}}
    {{--</div>--}}
    {{--<div class="col-md-12">&nbsp;</div>--}}
    {{--<div class="col-md-3"><strong>Driver1 : *</strong></div>--}}
    {{--<div class="col-md-9">--}}
    {{--<input type="text" class="form-control" name="driver1" placeholder="Driver1" disabled value="{{$bus->driver1}}">--}}
    {{--<small class="text text-danger">{{$errors->first('driver1')}}</small>--}}
    {{--</div>--}}
    {{--<div class="col-md-12">&nbsp;</div>--}}
    {{--<div class="col-md-3"><strong>Contact No : *</strong></div>--}}
    {{--<div class="col-md-9">--}}
    {{--<input type="text" class="form-control" name="contact1" disabled value="{{$bus->contact1}}">--}}
    {{--<small class="text text-danger">{{$errors->first('contact1')}}</small>--}}
    {{--</div>--}}
    {{--<div class="col-md-12">&nbsp;</div>--}}
    {{--<div class="col-md-3"><strong>Driver2 : *</strong></div>--}}
    {{--<div class="col-md-9">--}}
    {{--<input type="text" class="form-control" name="driver2" placeholder="Driver2" value="{{$bus->driver2}}" disabled>--}}
    {{--<small class="text text-danger">{{$errors->first('driver2')}}</small>--}}
    {{--</div>--}}
    {{--<div class="col-md-12">&nbsp;</div>--}}
    {{--<div class="col-md-3"><strong>Contact No : *</strong></div>--}}
    {{--<div class="col-md-9">--}}
    {{--<input type="text" class="form-control" name="contact2" placeholder="Driver2 Contact" value="{{$bus->contact2}}" disabled>--}}
    {{--<small class="text text-danger">{{$errors->first('contact2')}}</small>--}}
    {{--</div>--}}
    {{--<div class="col-md-12">&nbsp;</div>--}}
    {{--<div class="col-md-3"><strong>Staff1 : *</strong></div>--}}
    {{--<div class="col-md-9">--}}
    {{--<input type="text" class="form-control" name="staff1" placeholder="Staff1" value="{{$bus->staff1}}" disabled>--}}
    {{--<small class="text text-danger">{{$errors->first('staff1')}}</small>--}}
    {{--</div>--}}
    {{--<div class="col-md-12">&ensp;</div>--}}
    {{--<div class="col-md-3"><strong>Contact No : *</strong></div>--}}
    {{--<div class="col-md-9">--}}
    {{--<input type="text" class="form-control" name="contact3" placeholder="Staff1 Contact" value="{{$bus->contact3}}" disabled>--}}
    {{--<small class="text text-danger">{{$errors->first('contact3')}}</small>--}}
    {{--</div>--}}
    {{--<div class="col-md-12">&nbsp;</div>--}}
    {{--<div class="col-md-3"><strong>Staff2 : *</strong></div>--}}
    {{--<div class="col-md-9">--}}
    {{--<input type="text" class="form-control" name="staff2" placeholder="Staff2" disabled>--}}
    {{--<small class="text text-danger">{{$errors->first('staff2')}}</small>--}}
    {{--</div>--}}
    {{--<div class="col-md-12">&nbsp;</div>--}}
    {{--<div class="col-md-3"><strong>Contact No : *</strong></div>--}}
    {{--<div class="col-md-9">--}}
    {{--<input type="text" class="form-control" name="contact4" placeholder="Staff2 Contact" value="{{$bus->contact4}}" disabled>--}}
    {{--<small class="text text-danger">{{$errors->first('contact4')}}</small>--}}
    {{--</div>--}}
    {{--<div class="col-md-12">&nbsp;</div>--}}
    {{--<div class="col-md-3">&ensp;</div>--}}
    {{--<div class="col-md-9">--}}
    {{--<div align="center">--}}
    {{--<a href="{{route('buses')}}" class="btn btn-success">--}}
    {{--<i class="fa fa-check"></i>&nbsp;&nbsp;Procced--}}
    {{--</a>--}}
    {{--</div>--}}
    {{--</div>--}}
    {{--</div>--}}
    {{--</div>--}}
    {{--</div>--}}
    {{--</div>--}}
    {{--</div>--}}


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
                                        <th>Bus No</th>
                                        <th>Billbook No</th>
                                        <th>Bus Type</th>
                                        <th>Route</th>
                                        <th>Vendor</th>
                                        <th>Driver1</th>
                                        <th>Contact No</th>
                                        <th>Driver2</th>
                                        <th>Contact No</th>
                                        <th>Staff1</th>
                                        <th>Contact No</th>
                                        <th>Staff2</th>
                                        <th>Contact No</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($bus as $count =>$key)

                                        <tr>
                                            <td>{{++$count}}</td>
                                            <td>{{$key->title}}</td>
                                            <td>{{$key->vehicle_no}}</td>
                                            <td>{{$key->billbook_no}}</td>
                                            <td>{{$key->bustypes->title}}</td>
                                            <td>{{$key->routes->title}}</td>
                                            <td>{{$key->vendors->email}}</td>
                                            <td>{{$key->driver1}}</td>
                                            <td>{{$key->contact1}}</td>
                                            <td>{{$key->driver2}}</td>
                                            <td>{{$key->contact2}}</td>
                                            <td>{{$key->staff1}}</td>
                                            <td>{{$key->contact3}}</td>
                                            <td>{{$key->staff2}}</td>
                                            <td>{{$key->contact4}}</td>
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