@section('stylesheet')

@endsection

@extends('front.master', ['body_class' => 'home-page home-01','main_class' => 'main-site left-sidebar'])
@section('title')
    Nitol | Home
@endsection
@section('body')


    <div class="container">

        {{-- <div class="wrap-breadcrumb">
            <ul>
                <li class="item-link"><a href="#" class="link">home</a></li>
                <li class="item-link"><span>Digital & Electronics</span></li>
            </ul>
        </div> --}}
        <div class="row">
            <div class="summary-item payment-method"><br>
                @if (Session::get('CustomerId')!='')
                    <button type="submit" class="btn btn-medium"><a title="My Prifile" href="{{url('')}}/customerProfile/{{Session::get('CustomerId')}}" style="color:white">My Profile</a></button>
                @endif
            </div>
            <div class="table-responsive">
                <table class="table no-margin">
                    <thead>
                        <tr>
                            <th>SL No.</th>
                            <th>Product Name</th>
                            <th>Product Price</th>
                            <th>Product Quantity</th>
                            <th>Total Price</th>
                            <th>Order Date</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($orderDetailsData as $key=>$item)
                            {{-- @php($shipping_detail = $item->shipping_detail)
                            @foreach($shipping_detail as $orderDetails)
                                {{$orderDetails}}
                            @endforeach --}}
                            <tr>
                                <th scope="row">{{$key+1}}</th>
                                {{-- <td>{{$shipping_detail->name}}</td>
                                <td>{{$shipping_detail->email}}</td>
                                <td>{{$shipping_detail->mobile}}</td> --}}
                                <td>{{$item->product_name}}</td>
                                <td>{{$item->product_price}}</td>
                                <td>{{$item->product_quantity}}</td>
                                <td>{{$item->product_price*$item->product_quantity}}</td>
                                <td>{{$item->created_at}}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div><!--end row-->

    </div><!--end container-->

@endsection
