@extends('layouts.backend')

@section('title', 'View Routes')

@section('content')
    {{--<div class="col-lg-9 main-chart">--}}
    {{--<div class="panel panel-default">--}}
    {{--<div class="panel-heading" align="center">--}}
    {{--<h3 class="panel-title">View Route</h3>--}}
    {{--</div>--}}
    {{--<div class="panel-body">--}}
    {{--<form action="{{route('routes')}}" method="post" enctype="multipart/form-data">--}}
    {{--{{csrf_field()}}--}}
    {{--<div class="rows">--}}
    {{--<div class="col-md-3"><strong>Title : *</strong></div>--}}
    {{--<div class="col-md-9">--}}
    {{--<input type="text" class="form-control" name="title" value="{{$route->title}}"--}}
    {{--placeholder="Title" disabled>--}}
    {{--<small class="text text-danger">{{$errors->first('title')}}</small>--}}

    {{--</div>--}}
    {{--</div>--}}

    {{--<div class="rows">--}}
    {{--<div class="col-md-3"><strong>From : *</strong></div>--}}
    {{--<div class="col-md-9">--}}
    {{--<input type="text" class="form-control" name="from" value="{{$route->from}}"--}}
    {{--placeholder="From" disabled>--}}
    {{--<small class="text text-danger">{{$errors->first('from')}}</small>--}}

    {{--</div>--}}
    {{--</div>--}}

    {{--<div class="rows">--}}
    {{--<div class="col-md-3"><strong>To : *</strong></div>--}}
    {{--<div class="col-md-9">--}}
    {{--<input type="text" class="form-control" value="{{$route->to}}" name="to" placeholder="To"--}}
    {{--disabled>--}}
    {{--<small class="text text-danger">{{$errors->first('to')}}</small>--}}

    {{--</div>--}}
    {{--</div>--}}

    {{--<div class="rows ">--}}
    {{--<div class="col-md-3"><strong>City Cover : *</strong></div>--}}
    {{--<div class="col-md-9">--}}
    {{--<input type="text" class="form-control" name="city_cover"  value="{{$route->city_cover}}" placeholder="Location 1" disabled>--}}
    {{--<textarea name="city_cover" class="form-control" id="" cols="80" rows="5"--}}
    {{--style="resize: none;" disabled>{{$route->city_cover}}</textarea>--}}
    {{--<small class="text text-danger">{{$errors->first('city_cover')}}</small>--}}
    {{--</div>--}}
    {{--</div>--}}
    {{--<div class="col-md-12">&nbsp;</div>--}}

    {{--<div class="row">&nbsp;--}}
    {{--<div class="col-md-12">--}}
    {{--<div align="center">--}}
    {{--<a href="{{route('routes')}}" class="btn btn-success">--}}
    {{--<i class="fa fa-check"></i>&nbsp;&nbsp;Procced--}}
    {{--</a>--}}
    {{--</div>--}}
    {{--</div>--}}
    {{--</div>--}}
    {{--</form>--}}
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
                                        <th>Title</th>
                                        <th>From</th>
                                        <th>To</th>
                                        <th>City Cover</th>

                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($route as $count =>$key)

                                        <tr>
                                            <td>{{++$count}}</td>
                                            <td>{{$key->title}}</td>
                                            <td>{{$key->from}}</td>
                                            <td>{{$key->to}}</td>
                                            <td>{{$key->city_cover}}</td>


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