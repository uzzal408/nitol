@section('stylesheet')
    <style>
        body {
            background-image: url({{asset('/')}}front/assets/imgs/Backdrop.jpg);
            font-family: Arial, Helvetica, sans-serif;
        }

        /* Full-width input fields */
        input[type=text], input[type=password], input[type=email] {
            width: 100%;
            padding: 15px;
            margin: 5px 0 22px 0;
            display: inline-block;
            border: none;
            background: #f1f1f1;
        }

        input[type=text]:focus, input[type=password]:focus, input[type=email]:focus {
            background-color: #ddd;
            outline: none;
        }

        hr {
            border: 1px solid #f1f1f1;
            margin-bottom: 25px;
        }

        /* Set a style for all buttons */
        button {
            background-color: #4CAF50;
            color: white;
            padding: 14px 20px;
            margin: 8px 0;
            border: none;
            cursor: pointer;
            width: 100%;
            opacity: 0.9;
        }

        button:hover {
            opacity: 1;
        }

        /* Extra styles for the cancel button */
        .cancelbtn {
            padding: 14px 20px;
            background-color: #f44336;
        }

        /* Float cancel and signup buttons and add an equal width */
        .cancelbtn, .signupbtn {
            float: left;
            width: 50%;
        }

        /* Add padding to container elements */
        .container {
            padding: 16px;
        }

        /* Clear floats */
        .clearfix::after {
            content: "";
            clear: both;
            display: table;
        }

        /* Change styles for cancel button and signup button on extra small screens */
        @media screen and (max-width: 300px) {
            .cancelbtn, .signupbtn {
                width: 100%;
            }
        }

        .invalid-feedback {
            margin-top: .25rem;
            font-size: .875rem;
            color: #dc3545;
        }
    </style>
@endsection
@extends('front.master', ['body_class' => 'sticky-header left-side-collapsed'])
@section('title')
    Order Pizza Online For Delivery | Customer Login
@endsection
@section('body')


    <section>

        <!-- main content start-->
        <div class="main-content">
            @include('front.includes.back-header')
            <div class="clearfix">
                <div class="scroll-content" style="margin-top: 44px;">
                    <!--notification menu end -->
                    <div class="toolbar-title toolbar-title-md"
                         style="text-transform: uppercase;color: #424242;text-align: center;margin-top: 20px;margin-bottom: 20px; font-weight: 600; font-family: 'Open Sans Condensed', sans-serif;">
                        <i class="fa fa-lock" aria-hidden="true"></i> secure checkout
                    </div>
                    <div class="contain-fluid">
                        <div class="checkout_wrapper">
                            <div class="personal-info">
                                <div class="container-fluid">
                                    <div class="row mt-5">
                                        <div class="col-3"></div>
                                        <div class="col-6">
                                            <div class="row">
                                                <div class="login_wrapper">
                                                    <div class="input_field">
                                                        <div class="input-group mb-3 col-12" style="">
                                                            {{Form::open(['route'=>'send-otp-to-customer','class'=>'contact-form','method'=>'POST','name'=>'newCustomer'])}}
                                                            <div class="container">
                                                                <p style="text-align: center">Please fill in this form
                                                                    to create an account.</p>
                                                                <hr>

                                                                <label for="first"><b>First Name</b></label>
                                                                {{Form::text('first_name','',array('required' => 'required', 'placeholder' => 'Your First Name'))}}
                                                                <div class="invalid-feedback">{{$errors->has('first_name') ? $errors->first('first_name') : ''}}</div>

                                                                <label for="last"><b>Last Name</b></label>
                                                                {{Form::text('last_name','',array('required' => 'required', 'placeholder' => 'Your Last Name'))}}
                                                                <div class="invalid-feedback">{{$errors->has('last_name') ? $errors->first('last_name') : ''}}</div>

                                                                <label for="email"><b>Mobile</b></label>
                                                                {{Form::text('phone_number','',array('required' => 'required', 'placeholder' => 'Your Mobile Number'))}}
                                                                <div class="invalid-feedback">{{$errors->has('phone_number') ? $errors->first('phone_number') : ''}}</div>

                                                                <label for="email"><b>Email</b></label>
                                                                {{Form::email('email_address','',array('required' => 'required', 'placeholder' => 'Your Email Address', 'id' => 'emailAddress'))}}
                                                                <div class="invalid-feedback">{{$errors->has('email_address') ? $errors->first('email_address') : ''}}</div>
                                                                <div id="res"></div>

                                                                <label for="psw"><b>Password</b></label>
                                                                {{Form::password('password',array('required' => 'required', 'placeholder' => 'Your Password'))}}
                                                                <div class="invalid-feedback">{{$errors->has('password') ? $errors->first('password') : ''}}</div>

                                                                <label for="psw-repeat"><b>Repeat Password</b></label>
                                                                {{Form::password('password_confirmation',array('required' => 'required', 'placeholder' => 'Retype Same Password'))}}
                                                                <div class="invalid-feedback">{{$errors->has('password_confirmation') ? $errors->first('password_confirmation') : ''}}</div>


                                                                {{--<label for="first"><b>First Name</b></label>--}}
                                                                {{--<input type="text" placeholder="Enter Email" id="first"--}}
                                                                       {{--required>--}}

                                                                {{--<label for="last"><b>Last Name</b></label>--}}
                                                                {{--<input type="text" placeholder="Enter Email" id="last"--}}
                                                                       {{--required>--}}

                                                                {{--<label for="first"><b>Mobile No</b></label>--}}
                                                                {{--<input type="text" value="+88"--}}
                                                                       {{--placeholder="Please Insert Your Mobile Number"--}}
                                                                       {{--id="mobile" required>--}}

                                                                {{--<label for="email"><b>Email</b></label>--}}
                                                                {{--<input type="text" placeholder="Enter Email" id="email"--}}
                                                                       {{--required>--}}

                                                                {{--<label for="psw"><b>Password</b></label>--}}
                                                                {{--<input type="password" placeholder="Enter Password"--}}
                                                                       {{--id="psw" required>--}}

                                                                {{--<label for="psw-repeat"><b>Repeat Password</b></label>--}}
                                                                {{--<input type="password" placeholder="Repeat Password"--}}
                                                                       {{--id="psw-repeat" required>--}}

                                                                <label>
                                                                    <input type="checkbox" checked="checked"
                                                                           name="remember" style="margin-bottom:15px">
                                                                    Remember me
                                                                </label>

                                                                <p>By creating an account you agree to our <a href="#"
                                                                                                              style="color:dodgerblue">Terms
                                                                        & Privacy</a>.</p>

                                                                <div class="full-button center-align round"
                                                                     margin-top="" padding-bottom="">
                                                                    <button class="button-md" color="green"
                                                                            style="width: 100%">
                                                                        <span class="button-inner"
                                                                              style="border-radius: 10px">Sign Up</span>
                                                                    </button>
                                                                </div>
                                                            </div>
                                                            {{Form::close()}}
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-3"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- main content end-->
    </section>
@endsection