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
            </div><br>
            <div class="table-responsive">
                <table class="table no-margin">
                    <thead>
                        <tr>
                            <th>SL No.</th>
                            <th>Order ID</th>
                            <th>Customer Name</th>
                            <th>Customer Email</th>
                            <th>Phone Number</th>
                            <th>Total Price</th>
                            <th>Order Status</th>
                            <th>Order Date</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($orderDetailsData as $key=>$item)
                            <tr>
                                <td>{{$key+1}}</td>
                                <td scope="row"><a href="{{url('')}}/customer/orderDetails/{{$item->id}}">{{$item->id}}</a></td>
                                <td>{{$item->shipping_detail['name']}}</td>
                                <td>{{$item->shipping_detail['email']}}</td>
                                <td>{{$item->shipping_detail['mobile']}}</td>
                                <td>{{$item->order_total}}</td>
                                <td>{{$item->order_status}}</td>
                                <td>{{$item->created_at}}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            {{ $orderDetailsData->links() }}
        </div><!--end row-->

    </div><!--end container-->

@endsection
