@include('branches.header')

<style>
    .busSeat {
        min-height: 403px;
        border: 1px dashed red;
        margin-top: 20px;
        border-radius: 60px;
    }

    .seats {
        width: 40px;
        border-radius: 10px;
        display: flex;
        flex-direction: column;
        justify-content: center;
        margin: 13px;
        height: 45px;
        background: salmon;
        transition: box-shadow 0.3s ease-in-out;
        cursor: -webkit-grab;
    }

    .seats:hover {
        box-shadow: 0 2px 7px 1px rgba(43, 59, 93, 0.29);
    }

    .seats:active {
        cursor: -webkit-grabbing;
        box-shadow: 0 5px 15px 4px rgba(43, 59, 93, 0.29);
    }

    /*.seats {*/
    /*background: #bababa;*/
    /*min-height: 30px;*/
    /*min-width: 30px;*/
    /*}*/

    .bus input[type='text'] {
        background: grey;
        text-align: center;
    }

    /*.squaredOne {*/
    /*width: 28px;*/
    /*height: 28px;*/
    /*position: relative;*/
    /*margin: 20px auto;*/
    /*background: #fcfff4;*/
    /*background: linear-gradient(to bottom, #fcfff4 0%, #dfe5d7 40%, #b3bead 100%);*/
    /*box-shadow: inset 0px 1px 1px white, 0px 1px 3px rgba(0, 0, 0, 0.5);*/
    /*}*/
    /*.squaredOne label {*/
    /*width: 20px;*/
    /*height: 20px;*/
    /*position: absolute;*/
    /*top: 4px;*/
    /*left: 4px;*/
    /*cursor: pointer;*/
    /*background: linear-gradient(to bottom, #222222 0%, #45484d 100%);*/
    /*box-shadow: inset 0px 1px 1px rgba(0, 0, 0, 0.5), 0px 1px 0px white;*/
    /*}*/
    /*.squaredOne label:after {*/
    /*content: '';*/
    /*width: 16px;*/
    /*height: 16px;*/
    /*position: absolute;*/
    /*top: 2px;*/
    /*left: 2px;*/
    /*background: #27ae60;*/
    /*background: linear-gradient(to bottom, #27ae60 0%, #145b32 100%);*/
    /*box-shadow: inset 0px 1px 1px white, 0px 1px 3px rgba(0, 0, 0, 0.5);*/
    /*opacity: 0;*/
    /*}*/
    /*.squaredOne label:hover::after {*/
    /*opacity: 0.3;*/
    /*}*/
    /*.squaredOne input[type=checkbox] {*/
    /*visibility: hidden;*/
    /*}*/
    /*.squaredOne input[type=checkbox]:checked + label:after {*/
    /*opacity: 1;*/
    /*}*/

</style>

<section id="about-us" class=" page-section">

    <div class="container">
        <form action="{{route('passengerDetail')}}" method="post">
            <div class="row">
                <div class="col-md-6">

                    <button type="submit" class="btn btn-primary form-control submit-layout">Select Seats</button>

                </div>

                <div class="col-md-6">

                    {{@csrf_field()}}
                    <input type="hidden" name="buses_id" value="{{$buses_id}}">
                    <input type="hidden" name="schedules_id" value="{{$schedules_id}}">
                    <button type="submit" class="btn btn-danger form-control submit-layout"><i
                                class="fa fa-chevron"></i>Proceed
                    </button>

                </div>
            </div>

            <div class="row busSeat">
                <div class="col-md-11">
                    <div class="bus">
                        @foreach($seat as $key => $item)
                            <div class="col-md-1">
                                <div class="seats" data-id="{{$key}}" style="{{$item['style']}}">
                                    <input type="checkbox" name="seat_id[]" id="{{$key}}" class="hh" value="{{$key}}"/>
                                    <input type="text" name="seat[{{$key}}]" value="{{$item['name']}}"
                                           placeholder="Seat No" disabled/>
                                    <div class="special-attributes"></div>
                                    {{--<div class="squaredOne">--}}
                                    {{--<input type="checkbox" value="None" id="squaredOne" name="check"  />--}}
                                    {{----}}
                                    {{--<label for="squaredOne"></label>--}}
                                    {{----}}
                                    {{--</div>--}}

                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
                <div class="col-md-1">
                    <div class="front">
                        <div class="seats" data-id="0" style="{{$front[0]['style']}}">
                            <div class="special-attributes"></div>
                            <input type="text" name="seat[0]" value="{{$front[0]['name']}}" disabled
                                   placeholder="Driver"/>
                        </div>
                        <div class="seats" data-id="1" style="{{$front[1]['style']}}">
                            <div class="special-attributes"></div>
                            <input type="text" name="seat[1]" value="{{$front[1]['name']}}" disabled
                                   placeholder="Entry"/>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>

</section>

<script>


    $(document).ready(function () {
        $('.seats').click(function () {
            $(this).child().attr('checked', true);
        });
    });


</script>
@include('branches.footer')

