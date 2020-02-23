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

            <div class="wrap-address-billing">
                <h3 class="box-title">Customer Details</h3>
                <p class="row-in-form">
                    <label for="fname">Name: <span>{{$customerInformation->name}}</span></label>
                </p>
                <p class="row-in-form">
                    <label for="lname">Email Addreess: <span>{{$customerInformation->email}}</span></label>
                </p>

                <p class="row-in-form">
                    <label for="fname">Phone Number: <span>{{$customerInformation->phone_number}}</span></label>
                </p>
                <p class="row-in-form">
                    <label for="lname">NID/Birth Certificate: <span>{{$customerInformation->nidNumber}}</span></label>
                </p>

                <p class="row-in-form">
                    <label for="fname">Gender: <span>{{$customerInformation->Gender}}</span></label>
                </p>
                <p class="row-in-form">
                    <label for="fname">Date of Birth: <span>{{$customerInformation->dateOfBirth}}</span></label>
                </p>

                <p class="row-in-form">
                    <label for="lname">Present Address: <span>{{$customerInformation->present_aadress}}</span></label>
                </p>
                <p class="row-in-form">
                    <label for="lname">Permanent Address: <span>{{$customerInformation->permanent_address}}</span></label>
                </p>
            </div>

            <div class="summary-item payment-method">
                @if (Session::get('CustomerId')!='')
                    <button type="submit" class="btn btn-medium"><a title="Edit Prifile" href="{{url('')}}/customerProfileEdit/{{Session::get('CustomerId')}}" style="color:white">Edit Profile</a></button>
                @endif
            </div>
        </div><!--end row-->

    </div><!--end container-->

@endsection
