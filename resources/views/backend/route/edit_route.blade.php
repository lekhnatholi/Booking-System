@extends('layouts.backend')

@section('title', 'Edit Routes')

@section('content')
    <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Route
      </h1>
      
    </section>
    <!-- Main content -->
<section class="content">
    <div class="row">    
        <div class="col-12 col-lg-8">
            <div class="box">
                <div class="box-header">
                    <h3 class="box-title">Edit <strong style="color: #5fa7da">Route</strong>&nbsp &nbsp</h3>
                </div>

                <div class="box-body">
                <form action="{{route('updateRoute')}}" method="post" enctype="multipart/form-data">
                    <input type="hidden" name="id" value="{{$route->routes_id}}">

                    {{csrf_field()}}

                    <div class="form-group">
                        <div class="row">
                            <div class="col-md-3"><strong>Title : *</strong></div>
                            <div class="col-md-9">
                                <input type="text" class="form-control" name="title" value="{{$route->title}}" placeholder="Title" >
                                <small class="text text-danger">{{$errors->first('title')}}</small>

                            </div>
                        </div>
                    </div>

                    
                    <div class="form-group">
                        <div class="row">
                            <div class="col-md-3"><strong>From : *</strong></div>
                            <div class="col-md-9">
                                <input type="text" class="form-control" name="from" value="{{$route->from}}" placeholder="From" >
                                <small class="text text-danger">{{$errors->first('from')}}</small>
                            </div>
                        </div>
                    </div>


                    <div class="form-group">
                        <div class="row">
                            <div class="col-md-3"><strong>To : *</strong></div>
                            <div class="col-md-9">
                                <input type="text" class="form-control" value="{{$route->to}}" name="to" placeholder="To" >
                                <small class="text text-danger">{{$errors->first('to')}}</small>

                            </div>
                        </div>
                    </div>


                    <div class="form-group">
                        <div class="row" >
                            <div class="col-md-3"><strong>City Cover : *</strong></div>
                            <div class="col-md-9">
                                {{--<input type="text" class="form-control" name="city_cover"  value="{{$route->city_cover}}" placeholder="Location 1" >--}}
                                <textarea name="city_cover" class="form-control" id="" cols="80" rows="5"
                                          style="resize: none;">{{$route->city_cover}}</textarea>
                                <small class="text text-danger">{{$errors->first('city_cover')}}</small>

                            </div>
                        </div>
                    </div>

                        

                    <div class="form-group">
                        <div class="row">
                            <div class="col-md-12">
                                <div align="center">
                                    <button type="submit" class="btn btn-success"><i class="fa fa-check"></i>&nbsp;&nbsp;
                                        Save Changes
                                    </button>&nbsp;&nbsp;
                                    <button type="reset" class="btn btn-danger"><i class="fa fa-close"></i>&nbsp;&nbsp;
                                        Cancel&nbsp;&nbsp;
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
</section>
</div>
@endsection