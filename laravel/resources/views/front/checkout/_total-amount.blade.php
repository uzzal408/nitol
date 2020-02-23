@if(Session::has('totalPrice'))
    @php($grand_total_price = Session::get('totalPrice'))
@else
    @php($grand_total_price = 0)
@endif
@php($c_gst = 00.00)
@php($grand_total_price += $c_gst)
@php($s_gst = 00.00)
@php($grand_total_price +=  $s_gst)
@php(Session::put('grandTotal',$grand_total_price))
<div class="panel-group" id="accordion">
    <div class="panel panel-default">
        <div class="">
            <div class="ad_total"
                 style="border-bottom: 2px solid #cccccc;padding-bottom: 10px;">
                <div class="bill_title_head" style="">
                                    <span class="bill-total-text"> Your Total
                                        <a data-toggle="collapse" data-parent="#accordion" href="#collapse1"><i
                                                    class="fa fa-angle-up" aria-hidden="true"></i></a>
                                    </span>
                    <div class="right bill-total">
                        ৳ &nbsp;
                        <span> {{$grand_total_price}}</span>
                    </div>
                </div>
            </div>
        </div>
        {{--<div id="collapse1" class="panel-collapse collapse in">--}}
            {{--<div class="">--}}
                {{--<div class="ad_total" style="margin-top: -9px;">--}}
                    {{--<div class="bill_title_head" style="">--}}
                        {{--<div class="bill">--}}
                            {{--<span class="left">Item total</span>--}}
                            {{--<span class="right">৳ {{Session::get('totalPrice')}}</span>--}}
                        {{--</div>--}}
                        {{--<div class="bill">--}}
                            {{--<span class="left">C-GST</span>--}}
                            {{--<span class="right">৳ {{$c_gst}}</span>--}}
                        {{--</div>--}}
                        {{--<div class="bill">--}}
                            {{--<span class="left">S-GST</span>--}}
                            {{--<span class="right">৳ {{$s_gst}}</span>--}}
                        {{--</div>--}}
                        {{--<div class="bill you_pay">--}}
                            {{--<span class="left">Order Total</span>--}}
                            {{--<span class="right">৳ {{$grand_total_price}}</span>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                {{--</div>--}}
            {{--</div>--}}
        {{--</div>--}}
    </div>
</div>