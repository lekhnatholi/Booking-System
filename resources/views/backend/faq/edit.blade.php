@extends('layouts.backend')

@section('title', 'Create FAQ')

@section('content')
    <div class="col-lg-9 main-chart">
        <div class="panel panel-default">
            <div class="panel-heading" align="center">
                <h3 class="panel-title">Edit FAQ</h3>
            </div>
            <div class="panel-body">
                <form action="{{route('updatefaq')}}" method="post" enctype="multipart/form-data">
                    {{csrf_field()}}
                    <input type="hidden" name="id" value="{{$faq->faq_id}}">
                    <div class="rows" align="center">
                       
                        <div class="col-md-12">
                            {{--<div class="col-md-3"><strong>Question : *</strong></div>--}}
                            <div class="col-md-12">
                                <input type="text" class="form-control" name="question" value="{{$faq->question}}"  required>
                            </div>
                            <div class="col-md-12">&nbsp;</div>
                            {{--<div class="col-md-3"><strong>Answer : *</strong></div>--}}
                            <div class="col-md-12">
                                <textarea class="form-control ckeditor" name="answer" rows="7" style="resize: none" maxlength="255" required>
                                    {{$faq->answer}}
                                </textarea>
                            </div>
                        </div>
                        <div class="col-md-12">&nbsp;</div>
                        <div align="center">
                            <button type="submit" class="btn btn-success"><i class="fa fa-check"></i>&nbsp;&nbsp;
                                Save Changes
                            </button>
                            <button type="reset" class="btn btn-danger"><i class="fa fa-close"></i>&nbsp;&nbsp;
                                Cancel
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection