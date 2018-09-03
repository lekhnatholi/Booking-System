@include('branches.header')

<style>
    .busSeat {
        min-height: 400px;
        border: 1px dashed red;
        margin-top: 20px;
    }

    .seats {
        width: 40px;
        border-radius: 10px;
        display: flex;
        flex-direction: column;
        justify-content: center;
    }

    .seats {
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


</style>

<section id="about-us" class=" page-section">

    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <form action="{{route('editSeatLayout')}}" method="post">
                    {{@csrf_field()}}
                    <input type="hidden" name="id" value="{{$busId}}">
                    <button type="submit" class="btn btn-primary form-control submit-layout">Edit</button>
                </form>
            </div>

            <div class="col-md-6">
                <form action="{{route('showVehiclesVendor')}}" method="post">
                    {{@csrf_field()}}
                    <input type="hidden" name="id" value="{{$busId}}">
                    <button type="submit" class="btn btn-danger form-control submit-layout">Go Back</button>
                </form>
            </div>
        </div>

        <div class="row busSeat">
            <div class="col-md-11">
                <div class="bus">
                    @foreach($seat as $key => $item)
                        <div class="col-md-1">
                            <div class="seats" data-id="{{$key}}" style="{{$item['style']}}">
                                <div class="special-attributes"></div>
                                <input type="text" name="seat[{{$key}}]" placeholder="Seat Name"/>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
            <div class="col-md-1">
                <div class="front">
                        <div class="seats" data-id="0"  style="{{$front[0]['style']}}">
                            <div class="special-attributes"></div>
                            <input type="text" name="seat[0]" value="" placeholder="Driver"/>
                        </div>
                        <div class="seats" data-id="1" style="{{$front[1]['style']}}">
                            <div class="special-attributes"></div>
                            <input type="text" name="seat[1]" value="" placeholder="Entry"/>
                        </div>
                </div>
            </div>
        </div>
    </div>

</section>
<script type="text/javascript" src="{{ url('public/jasny/jasny-bootstrap.min.js') }}"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.5.0/jquery.min.js"></script>
<script src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8.18/jquery-ui.min.js"></script>
<script>
    var ss;
    $(document).ready(function () {
        $('.seats').draggable({
            appendTo: 'body',
            start: function (event, ui) {
                isDraggingMedia = true;
            },
            stop: function (event, ui) {
                isDraggingMedia = false;
                // blah
            }
        });


        $('.submit-layout').click(function () {
            var arr = [];
            $('.bus').find('.seats').each(function () {
                arr[$(this).data('id')] = {
                    "style": $(this).attr('style')
                };
            });
            console.log(arr);
            $('#seatLayout').val(JSON.stringify(arr));

        });


    });

</script>
@include('branches.footer')

