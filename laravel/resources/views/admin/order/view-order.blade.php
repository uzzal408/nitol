@extends('admin.master')
@section('title')
    Nitol Admin || Orders
    @endsection
@section('body')
    <section class="content-header">
        <h1>
            Invoice
            <small>#OR00{{$order->id}}</small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li><a href="#">Examples</a></li>
            <li class="active">Invoice</li>
        </ol>
    </section>

    <div class="pad margin no-print">
        <div class="callout callout-info" style="margin-bottom: 0!important;">
            <h4><i class="fa fa-info"></i> Note:</h4>
            This page has been enhanced for printing. Click the print button at the bottom of the invoice to test.
        </div>
    </div>

    <!-- Main content -->
    <section class="invoice">
        <!-- title row -->
        <div class="row">
            <div class="col-xs-12">
                <h2 class="page-header">
                    @if($order->customer)
                        <i class="fa fa-globe"></i> {{$order->customer->first_name}} {{$order->customer->last_name}}
                        <small class="pull-right">Date: {{$order->customer->created_at}}</small>
                    @endif
                </h2>
            </div>
            <!-- /.col -->
        </div>
        <!-- info row -->
        <div class="row invoice-info">
            <div class="col-sm-4 invoice-col">
                <strong>Shipping Address</strong>

                <address>
                    @php($shipping_detail = $order->shipping_detail)
                    
                    @if($shipping_detail)
                        <span style="color: red;font-weight: bold">{{$order->order_type}}</span><br/>
                        <b>Name: </b>{{$shipping_detail->first_name .' '.$shipping_detail->last_name}}<br>
                        <b>E-mail: </b>{{$shipping_detail->email}}<br>
                        <b>Mobile: </b>{{$shipping_detail->phone}}<br>
                        
                        <b>Address: </b>{{$order->address}}<br>
                        <b>Country: </b>{{$order->country}}<br>
                        <b>City: </b>{{$order->city}}<br>
                        <b>Zip Code: </b>{{$order->zip_code}}<br>
                        
                    @if($order->order_type == 'Delivery')
                            @php($delivery = $shipping_detail->delivery)
                            @if($delivery)
                                <b>Location: </b>{{$delivery->delivering_to}}<br>
                                <b>Address Details:</b> {{$delivery->address_details}}<br>
                                <b>Additional Information:</b> {{$delivery->additional_information}}
                            @endif
                        @else
                            @php($take_away = $order->store)
                            <b>Shop Name: </b>{{$take_away->name}}<br>
                            <b>Address:</b> {{$take_away->location}}
                        @endif
                    @endif
                </address>
            </div>
            <!-- /.col -->

{{--            {{ dd($order->billing_detail) }}--}}
            <div class="col-sm-4 invoice-col">
                <strong>Billing Address</strong>
                @php($billing_details = $order->billing_detail)
                <address>
                    @if($billing_details)
                        Payment Type: {{$billing_details->payment_type}} <br>
                        Payment Status: {{$billing_details->payment_status}}
                    @endif
                </address>
            </div>
            <!-- /.col -->
            <div class="col-sm-4 invoice-col">
                <b>Invoice #OR00{{ $order->id }}</b><br>
                <br>
                <b>Order ID:</b> OR00{{$order->id}}<br>
                <b>Order Date:</b> {{$order->created_at}}<br>
                <b>Payment Method:</b> {{$order->payment_method}}<br>
                <b>Account:</b> --------
            </div>
            <!-- /.col -->
        </div>
        <!-- /.row -->

        <!-- Table row -->
        <div class="row">
            <div class="col-xs-12 table-responsive">
                <table class="table table-striped">
                    <thead>
                    <tr>
                        <th>Qty</th>
                        <th>Product</th>
                        {{--<th>Toppings</th>--}}
                        <th>Total</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($order->order_details as $order_details)
                        <tr>
                            @php($product = $order_details->product)
                            <td>{{$order_details->product_quantity}}</td>
                            <td>{{$product->title}} - {!! $order_details->product_name !!}</td>
                            {{--<td>{{$product->short_description}}</td>--}}
                            @php( $total_price = (int)$order_details->product_price * (int)$order_details->product_quantity  )
                            <td>৳ {{$total_price}}</td>
                        </tr>
                        <tr>
                    @endforeach
                    {{--<td>1</td>--}}
                    {{--<td>Need for Speed IV</td>--}}
                    {{--<td>247-925-726</td>--}}
                    {{--<td>Wes Anderson umami biodiesel</td>--}}
                    {{--<td>$50.00</td>--}}
                    {{--</tr>--}}
                    {{--<tr>--}}
                    {{--<td>1</td>--}}
                    {{--<td>Monsters DVD</td>--}}
                    {{--<td>735-845-642</td>--}}
                    {{--<td>Terry Richardson helvetica tousled street art master</td>--}}
                    {{--<td>$10.70</td>--}}
                    {{--</tr>--}}
                    {{--<tr>--}}
                    {{--<td>1</td>--}}
                    {{--<td>Grown Ups Blue Ray</td>--}}
                    {{--<td>422-568-642</td>--}}
                    {{--<td>Tousled lomo letterpress</td>--}}
                    {{--<td>$25.99</td>--}}
                    {{--</tr>--}}
                    </tbody>
                </table>
            </div>
            <!-- /.col -->
        </div>
        <!-- /.row -->

        <div class="row">
            <!-- accepted payments column -->
            <div class="col-xs-6">
                <p class="lead">Payment Methods:</p>
                <img src="{{asset('/')}}admin/dist/img/credit/visa.png" alt="Visa">
                <img src="{{asset('/')}}admin/dist/img/credit/mastercard.png" alt="Mastercard">
                <img src="{{asset('/')}}admin/dist/img/credit/american-express.png" alt="American Express">
                <img src="{{asset('/')}}admin/dist/img/credit/paypal2.png" alt="Paypal">

                <p class="text-muted well well-sm no-shadow" style="margin-top: 10px;">
                    Etsy doostang zoodles disqus groupon greplin oooj voxy zoodles, weebly ning heekya handango imeem
                    plugg
                    dopplr jibjab, movity jajah plickers sifteo edmodo ifttt zimbra.
                </p>
            </div>
            <!-- /.col -->
            <div class="col-xs-6">
                <p class="lead">Amount Due {{$order->created_at}}</p>

                <div class="table-responsive">
                    <table class="table">
                        <tr>
                            <th style="width:50%">Subtotal:</th>
                            <td>৳ {{$order->order_total}}</td>
                        </tr>
                        <tr>
                            <th>Tax (0.0%)</th>
                            <td>৳ 00.00</td>
                        </tr>
                        <tr>
                            <th>Shipping:</th>
                            <td>৳ 0.00</td>
                        </tr>
                        <tr>
                            <th>Total:</th>
                            <td>৳ {{$order->order_total}}</td>
                        </tr>
                    </table>
                </div>
            </div>
            <!-- /.col -->
        </div>
        <!-- /.row -->

        <!-- this row will not appear when printing -->
        <div class="row no-print">
            <div class="col-xs-12">
                {{--<a href="invoice-print.html" target="_blank" class="btn btn-default"><i class="fa fa-print"></i> Print</a>--}}
                <button type="button" class="btn btn-success pull-right"><i class="fa fa-credit-card"></i> Submit
                    Payment
                </button>
                <button type="button" class="btn btn-primary pull-right" style="margin-right: 5px;" onclick="generate_pdf()">
                    <i class="fa fa-download"></i> Generate PDF
                </button>
            </div>
        </div>
    </section>
    <!-- /.content -->
    <div class="clearfix"></div>

@endsection

<script>
    function generate_pdf(){
        window.print()
    }
</script>