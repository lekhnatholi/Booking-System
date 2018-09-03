@extends('layouts.backend')

@section('title', 'View FAQ')

@section('content')
    <div class="col-lg-9 main-chart">
        <div class="panel panel-default">
            <div class="panel-heading" align="center">
                <h3 class="panel-title">View FAQ</h3>
            </div>
            <div class="panel-body">
                <div class="rows">
                    <div class="col-md-9">
                        <input type="text" class="form-control" name="question" value="{{$faq->question}}" disabled>
                    </div>
                        <div class="col-md-12">&nbsp;</div>
                       
                        <div class="col-md-12">
                                <textarea class="form-control" name="answer" rows="7" style="resize: none;"
                                          disabled>
                                    {{$faq->answer}}
                                </textarea>
                        </div>
                    </div>
                    <div class="col-md-12">&nbsp;</div>
                    <div align="center">
                        <a href="{{route('faq')}}" class="btn btn-success">
                            <i class="fa fa-check"></i>&nbsp;&nbsp;Procced
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection