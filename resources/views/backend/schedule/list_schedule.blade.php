@extends('layouts.backend')
@section('title', 'User')
@section('activeSchedule', 'active')
@section('content')
    {{--<div class="content-wrapper" style="min-height: 1668.5px;">--}}
    {{--<section class="content-header">--}}
    {{--<h1>--}}
    {{--Schedule--}}
    {{--</h1>--}}
    {{--<ol class="breadcrumb">--}}
    {{--<li class="breadcrumb-item"><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>--}}
    {{--<li class="breadcrumb-item"><a href="#">vehicle</a></li>--}}
    {{--<li class="breadcrumb-item active">Schedule</li>--}}
    {{--</ol>--}}
    {{--</section>--}}

    {{--<section class="content">--}}

    {{--<div class="row">--}}
    {{--<div class="col-12 col-lg-10">--}}
    {{--<div class="box">--}}
    {{--<div class="box-header">--}}
    {{--<a href="">--}}
    {{--<button class="btn btn-info btn-sm">+ Add New</button>--}}
    {{--</a>--}}
    {{--</div>--}}

    {{--<div class="box-body">--}}
    {{--<div class="table-responsive">--}}
    {{--<div id="example1_wrapper" class="dataTables_wrapper">--}}
    {{--<div class="dataTables_length" id="example1_length"><label>Show <select--}}
    {{--name="example1_length" aria-controls="example1" class="">--}}
    {{--<option value="10">10</option>--}}
    {{--<option value="25">25</option>--}}
    {{--<option value="50">50</option>--}}
    {{--<option value="100">100</option>--}}
    {{--</select> entries</label>--}}
    {{--</div>--}}
    {{--<div id="example1_filter" class="dataTables_filter"><label>Search:<input--}}
    {{--type="search" class="" placeholder="search"--}}
    {{--aria-controls="example1"></label>--}}
    {{--</div>--}}
    {{--<table id="example1" class="table table-bordered table-striped dataTable"--}}
    {{--style="cursor: pointer;" role="grid" aria-describedby="example1_info">--}}
    {{--<thead>--}}
    {{--<tr role="row">--}}
    {{--<th class="sorting" tabindex="0" aria-controls="example1" rowspan="1"--}}
    {{--colspan="1" aria-label="Name: activate to sort column ascending"--}}
    {{--style="width: 95px;">Bus--}}
    {{--</th>--}}

    {{--<th class="sorting" tabindex="0" aria-controls="example1" rowspan="1"--}}
    {{--colspan="1" aria-label="Start date: activate to sort column ascending"--}}
    {{--style="width: 72px;">Departure date--}}
    {{--</th>--}}
    {{--<th class="sorting" tabindex="0" aria-controls="example1" rowspan="1"--}}
    {{--colspan="1" aria-label="Start date: activate to sort column ascending"--}}
    {{--style="width: 72px;">Departure time--}}
    {{--</th>--}}
    {{--<th class="sorting" tabindex="0" aria-controls="example1" rowspan="1"--}}
    {{--colspan="1" aria-label="Start date: activate to sort column ascending"--}}
    {{--style="width: 72px;">Arrival date--}}
    {{--</th>--}}
    {{--<th class="sorting" tabindex="0" aria-controls="example1" rowspan="1"--}}
    {{--colspan="1" aria-label="Start date: activate to sort column ascending"--}}
    {{--style="width: 72px;">Arrival time--}}
    {{--</th>--}}
    {{--<th class="sorting" tabindex="0" aria-controls="example1" rowspan="1"--}}
    {{--colspan="1" aria-label="Name: activate to sort column ascending"--}}
    {{--style="width: 95px;">Shift--}}
    {{--</th>--}}
    {{--<th class="sorting" tabindex="0" aria-controls="example1" rowspan="1"--}}
    {{--colspan="1" aria-label="Salary: activate to sort column ascending"--}}
    {{--style="width: 61px;">Price--}}
    {{--</th>--}}
    {{--</tr>--}}
    {{--</thead>--}}
    {{--<tbody>--}}


    {{--<tr role="row" class="odd">--}}
    {{--<td tabindex="1" class="">Ashton Cox</td>--}}
    {{--<td tabindex="1" class="sorting_1">66</td>--}}
    {{--<td tabindex="1">2009/01/12</td>--}}
    {{--<td tabindex="1">10:00 Pm</td>--}}
    {{--<td tabindex="1">2009/01/12</td>--}}
    {{--<td tabindex="1">11:00 Am</td>--}}
    {{--<td tabindex="1">day</td>--}}
    {{--<td tabindex="1">$86,000</td>--}}
    {{--</tr>--}}

    {{--<tr role="row" class="odd">--}}
    {{--<td tabindex="1" class=""> Cox</td>--}}
    {{--<td tabindex="1" class="sorting_1">66</td>--}}
    {{--<td tabindex="1">2009/10/12</td>--}}
    {{--<td tabindex="1">10:00 Pm</td>--}}
    {{--<td tabindex="1">2009/01/12</td>--}}
    {{--<td tabindex="1">11:00 Am</td>--}}
    {{--<td tabindex="1">day</td>--}}
    {{--<td tabindex="1">$86,000</td>--}}
    {{--</tr>--}}

    {{--</tbody>--}}
    {{--<tfoot>--}}

    {{--</tfoot>--}}
    {{--</table>--}}
    {{--<div class="dataTables_info" id="example1_info" role="status" aria-live="polite">--}}
    {{--Showing 1 to 10 of 57 entries--}}
    {{--</div>--}}
    {{--<div class="dataTables_paginate paging_simple_numbers" id="example1_paginate">--}}
    {{--<a class="paginate_button previous disabled" aria-controls="example1"--}}
    {{--data-dt-idx="0" tabindex="0" id="example1_previous">Previous</a>--}}
    {{--<span>--}}
    {{--<a class="paginate_button current" aria-controls="example1"--}}
    {{--data-dt-idx="1" tabindex="0">1</a>--}}
    {{--<a class="paginate_button "--}}
    {{--aria-controls="example1"--}}
    {{--data-dt-idx="2"--}}
    {{--tabindex="0">2</a>--}}
    {{--<a--}}
    {{--class="paginate_button " aria-controls="example1" data-dt-idx="3"--}}
    {{--tabindex="0">3</a>--}}
    {{--<a class="paginate_button "--}}
    {{--aria-controls="example1" data-dt-idx="4"--}}
    {{--tabindex="0">4</a>--}}
    {{--<a class="paginate_button "--}}
    {{--aria-controls="example1"--}}
    {{--data-dt-idx="5"--}}
    {{--tabindex="0">5</a>--}}
    {{--<a--}}
    {{--class="paginate_button " aria-controls="example1" data-dt-idx="6"--}}
    {{--tabindex="0">6</a></span>--}}
    {{--<a class="paginate_button next"--}}
    {{--aria-controls="example1" data-dt-idx="7"--}}
    {{--tabindex="0" id="example1_next">Next</a>--}}
    {{--</div>--}}
    {{--</div>--}}
    {{--<input style="position: absolute; top: 181.875px; left: 17.5px; padding: 14px; text-align: left; font: 300 13px/19.5px Poppins, sans-serif; border: 1px solid rgb(244, 244, 244); width: 112px; height: 67px; display: none;">--}}
    {{--</div>--}}
    {{--</div>--}}
    {{--</div>--}}
    {{--</div>--}}
    {{--</div>--}}

    {{--</section>--}}
    {{--</div>--}}
    <script>
        window.setTimeout(function () {
            $(".alert").fadeTo(500, 0).slideUp(500, function () {
                $(this).remove();
            });
        }, 2000);
    </script>
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
                Schedule Dashboard
            </h1>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('admin')}}"><i class="fa fa-dashboard"></i> Home</a></li>
                <li class="breadcrumb-item active">Booking</li>
            </ol>
        </section>

        <!-- Main content -->
        <section class="content">

            <div class="row">

                <div class="col-12 col-lg-12">
                    <div class="box">
                        <div class="box-header">
                            <h3 class="box-title">Schedule <strong>Datatable</strong>&nbsp &nbsp                            </h3>

                            <a href="{{route('createSchedule')}}" class="btn btn-default label-success">+ Add New</a>



                            <a href="{{route('viewSchedule')}}" class="btn btn-info label-success pull-right" > <i class="glyphicon glyphicon-eye-open"></i> views all</a>
                        </div>

                        <div class="box-body">
                            <div class="panel-body">
                                @if(session()->has('success'))
                                    <div class="alert alert-success" role="alert" align="center">
                                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                        <strong>{{session()->get('success')}}</strong>
                                    </div>
                                @endif
                                @if(session()->has('error'))
                                    <div class="alert alert-danger" role="alert" align="center">
                                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                        <strong>{{session()->get('error')}}</strong>
                                    </div>
                                @endif
                                <table id="example1"
                                       class="table   table-responsive editable_table table-striped table-hover">
                                    <thead>
                                    <tr>
                                        <th>S.N</th>
                                        <th>Bus</th>
                                        <th>Departure Date</th>
                                        <th>Departure Time</th>
                                        <th>Arrival Date</th>
                                        <th>Arrival Time</th>
                                        <th>Shift</th>
                                        <th>Action</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($schedules as $count => $key)
                                        <tr>
                                            <td>{{++$count}}</td>
                                            <td>{{$key->buses->title}}</td>
                                            <td>{{$key->departure_date}}</td>
                                            <td>{{$key->departure_time}}</td>
                                            <td>{{$key->arrival_date}}</td>
                                            <td>{{$key->arrival_time}}</td>
                                            <td>{{$key->shift}}  </td>
                                            <td>
                                                <table>
                                                    <tr>
                                                        <th>
                                                        <form action="{{route('showSchedule')."/".$key->schedules_id}}"
                                                        method="get">
                                                        <button type="submit" class="btn btn-info btn-xs">
                                                        <i class="fa fa-eye"></i>
                                                        </button>
                                                        </form>
                                                        </th>
                                                        <th>
                                                            <form action="{{route('editSchedule')."/".$key->schedules_id}}"
                                                                  method="get">
                                                                <button type="submit" class="btn btn-success btn-xs">
                                                                    <i class="fa fa-pencil"></i>
                                                                </button>
                                                            </form>
                                                        </th>
                                                        <th>
                                                            <form class="client" action="{{route('destroySchedule')}}"
                                                                  method="post"
                                                                  onsubmit=" return ConfirmDelete()">
                                                                {{csrf_field()}}
                                                                <input type="hidden" name="id"
                                                                       value="{{$key->schedules_id}}">
                                                                <button type="submit" class="btn btn-danger btn-xs">
                                                                    <i class="fa fa-trash-o"></i>
                                                                </button>
                                                            </form>
                                                        </th>
                                                    </tr>
                                                </table>
                                            </td>
                                        </tr>
                                    @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <div class="col-md-12" align="center">{{ $schedules->links() }}</div>
                    </div>
                </div>
            </div>
        </section>

    </div>


    {{--<!-- jQuery 3 -->--}}
    {{--<script src="{{ url('public/backend/assets/vendor_components/jquery/dist/jquery.min.js')}}"></script>--}}

    {{--<!-- popper -->--}}
    {{--<script src="{{ url('public/backend/assets/vendor_components/popper/dist/popper.min.js')}}"></script>--}}

    {{--<!-- Bootstrap 4.0-->--}}
    {{--<script src="{{ url('public/backend/assets/vendor_components/bootstrap/dist/js/bootstrap.min.js')}}"></script>--}}

    {{--<!-- SlimScroll -->--}}
    {{--<script src="{{ url('public/backend/assets/vendor_components/jquery-slimscroll/jquery.slimscroll.min.js')}}"></script>--}}

    {{--<!-- FastClick -->--}}
    {{--<script src="{{ url('public/backend/assets/vendor_components/fastclick/lib/fastclick.js')}}"></script>--}}

    {{--<!-- DataTables -->--}}
    {{--<script src="{{ url('public/backend/assets/vendor_components/datatables.net/js/jquery.dataTables.min.js')}}"></script>--}}
    {{--<script src="{{ url('public/backend/assets/vendor_components/datatables.net-bs/js/dataTables.bootstrap.min.js')}}"></script>--}}

    {{--<!-- This is data table -->--}}
    {{--<script src="{{ url('public/backend/assets/vendor_plugins/DataTables-1.10.15/media/js/jquery.dataTables.min.js')}}"></script>--}}

    {{--<!-- Editable -->--}}
    {{--<script src="{{ url('public/backend/assets/vendor_components/tiny-editable/mindmup-editabletable.js')}}"></script>--}}
    {{--<script src="{{ url('public/backend/assets/vendor_components/tiny-editable/numeric-input-example.js')}}"></script>--}}
    {{--<script>--}}
    {{--$('#mainTable').editableTableWidget().numericInputExample().find('td:first').focus();--}}
    {{--$('#example1').editableTableWidget().numericInputExample().find('td:first').focus();--}}
    {{--</script>--}}

    {{--<!-- Lion_admin App -->--}}
    {{--<script src="{{ url('public/backend/js/template.js')}}"></script>--}}

    {{--<!-- Lion_admin for demo purposes -->--}}
    {{--<script src="{{ url('public/backend/js/demo.js')}}"></script>--}}

    {{--<!-- Lion_admin for Data Table -->--}}
    {{--<script src="{{ url('public/backend/js/pages/data-table.js')}}"></script>--}}

    <script>
        function ConfirmDelete() {
            var x = confirm("Are you sure you want to delete?");
            if (x)
                return true;
            else
                return false;
        }
    </script>

@endsection