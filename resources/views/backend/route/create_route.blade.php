@extends('layouts.backend')

@section('title', 'Create Route')

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
                    <h3 class="box-title">Create <strong style="color: #5fa7da">Route</strong>&nbsp &nbsp</h3>
                </div>
               
                <div class="box-body">   
               
                <form action="{{route('storeRoute')}}" method="post" id="route_form" enctype="multipart/form-data">
                    {{csrf_field()}}

                    <div class="form-group">    
                        <div class="row">
                            <div class="col-md-3"><strong>Title : *</strong></div>
                            <div class="col-md-9">
                                <input type="text" class="form-control" name="title" placeholder="Title" required>
                                <small class="text text-danger">{{$errors->first('title')}}</small>

                            </div>
                        </div>
                    </div>    

                    <div class="form-group">
                        <div class="row">
                            <div class="col-md-3"><strong>From : *</strong></div>
                            <div class="col-md-9">
                                <input type="text" class="form-control" name="from" placeholder="From" required>
                                <small class="text text-danger">{{$errors->first('from')}}</small>
                            </div>
                        </div>
                    </div>    

                    <div class="form-group">
                        <div class="row">
                            <div class="col-md-3"><strong>To : *</strong></div>
                            <div class="col-md-9">
                                <input type="text" class="form-control" name="to" placeholder="To" required>
                                <small class="text text-danger">{{$errors->first('to')}}</small>

                            </div>
                        </div>
                    </div>    

                    <div class="form-group">
                        <div class="row" >
                            <div class="col-md-3"><strong>City Cover : *</strong></div>
                            <div class="col-md-9">
                                {{--<input type="text" class="form-control" name="city_cover" placeholder="Location 1" required>--}}
                                <textarea name="city_cover" id="" cols="80" rows="5" class="form-control" style="resize: none"></textarea>
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
                                    </button>
                                    &nbsp;
                                    <button type="reset" class="btn btn-danger"><i class="fa fa-close"></i>&nbsp;&nbsp;
                                        Cancel &nbsp;&nbsp;
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