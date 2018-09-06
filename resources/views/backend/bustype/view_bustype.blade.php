@extends('layouts.backend')

@section('title', 'View Bustype')

@section('content')
    {{--<div class="col-lg-9 main-chart">--}}
        {{--<div class="panel panel-default">--}}
            {{--<div class="panel-heading" align="center">--}}
                {{--<h3 class="panel-title">View Bustype</h3>--}}
            {{--</div>--}}
            {{--<div class="panel-body" align="center">--}}
                {{--<div class="rows">--}}
                    {{--<div class="col-md-12 "><strong>Title:</strong></div>--}}
                    {{--<div class="col-md-12">--}}
                        {{--<input type="text" class="form-control" value="{{ $bustype->title }}" disabled>--}}
                    {{--</div>--}}
                    {{--<div class="col-md-12 "><strong>Seats:</strong></div>--}}
                    {{--<div class="col-md-12">--}}
                        {{--<input type="text" class="form-control" value="{{ $bustype->seat }}" disabled>--}}
                    {{--</div>--}}
                    {{--<div class="col-md-12">&nbsp;</div>--}}
                    {{--<div class="col-md-12">--}}
                        {{--<img class="himg" src="{{url('public/img/bustype/'.$bustype->image) }}" width="700px" height="280px"/>--}}
                    {{--</div>--}}
                    {{--<div class="col-md-12">&nbsp;</div>--}}
                    {{--<div class="col-md-12">{{ $bustype->image }}</div>--}}
                    {{--<div class="col-md-12">&nbsp;</div>--}}
                    {{--<div align="center">--}}
                        {{--<a href="{{route('bustypes')}}" class="btn btn-success">--}}
                            {{--<i class="fa fa-check"></i>&nbsp;&nbsp;Procced--}}
                        {{--</a>--}}
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
                                        <th>title</th>
                                        <th>Seat</th>
                                        <th>Action</th>

                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($bustype as $count =>$key)

                                        <tr>
                                            <td>{{++$count}}</td>
                                            <td>{{$key->title}}</td>
                                            <td>{{$key->seat}}</td>

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