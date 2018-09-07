@extends('layouts.backend')

@section('title', 'View FAQ')

@section('content')


    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
                FAQ
            </h1>

        </section>
        <!-- Main content -->
        <section class="content">
            <div class="row">
                <div class="col-12 col-lg-10">
                    <div class="box">
                        <div class="box-header">
                            <h3 class="box-title">Edit <strong style="color: #5fa7da">Bus</strong>&nbsp &nbsp</h3>
                        </div>

                        <div class="box-body">



                            <div class="form-group">
                                <div class="row">
                                    <div class="col-md-12" align="center">
                                        <div class="control-group">
                                            <div class="controls">
                                                <div class="fileupload fileupload-new" data-provides="fileupload">
                                                    <div class="fileupload-new thumbnail"
                                                         style="width: 150px; height:100px;">
                                                        <img src="{{ url('public/img/bus/'.$faq->image) }}"/>
                                                    </div>
                                                    <div class="fileupload-preview fileupload-exists thumbnail"
                                                         style="width: 150px; height:100px;"></div>
                                                    <div>
                                                        <small class="text text-danger">{{$errors->first('image')}}</small>

                                                        <span class="btn btn-file">
    												<span class="fileupload-new btn btn-primary">Select image</span>
    												<span class="fileupload-exists btn btn-info">Change</span>
                                                        <input type="file" name="image"/>
                                                    </span>
                                                        {{--<a class="btn fileupload-exists btn btn-warning" data-dismiss="fileupload">Remove</a>--}}
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="row">
                                    <div class="col-md-3"><strong>Question : *</strong></div>
                                    <div class="col-md-9">
                                        <input type="text" class="form-control" name="title" placeholder="Name"
                                               value="{{$faq->question}}" disabled>
                                        <small class="text text-danger">{{$errors->first('title')}}</small>
                                    </div>
                                </div>
                            </div>


                            <div class="form-group">
                                <div class="row">
                                    <div class="col-md-3"><strong>Answer : *</strong></div>
                                    <div class="col-md-9">
                                        <input type="text" class="form-control" name="vehicle_no"
                                               placeholder="Bus No" value="{{$faq->answer}}" disabled>
                                        <small class="text text-danger">{{$errors->first('vehicle_no')}}</small>
                                    </div>
                                </div>
                            </div>



                            <div class="form-group">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div align="center">
                                            <a href="{{route('faq')}}" class="btn btn-success">
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
            </div>
        </section>
    </div>

@endsection