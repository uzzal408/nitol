@section('stylesheet')

@endsection

@extends('front.master', ['body_class' => 'home-page home-01','main_class' => 'main-site left-sidebar'])
@section('title')
    Nitol | Home
@endsection
@section('body')

    <div class="container">
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
                    <button type="submit" class="btn btn-medium"><a title="Edit Prifile" href="{{url('')}}/customerProfileEdit/{{ Auth::guard('customer')->user()->id }}" style="color:white">Edit Profile</a></button>
            </div>
        </div><!--end row-->

    </div><!--end container-->

@endsection
