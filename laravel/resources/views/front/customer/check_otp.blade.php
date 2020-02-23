@section('stylesheet')
    <style>
        body {
            background-image: url({{asset('/')}}front/assets/imgs/Backdrop.jpg);
            font-family: Arial, Helvetica, sans-serif;
        }
        * {box-sizing: border-box}

        /* Full-width input fields */
        input[type=text], input[type=number] {
            width: 100%;
            padding: 15px;
            margin: 5px 0 22px 0;
            display: inline-block;
            border: none;
            background: #f1f1f1;
        }

        input[type=text]:focus, input[type=number]:focus {
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
            opacity:1;
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
        form{
            border:1px solid #ccc
        }
    </style>
@endsection
@extends('front.master', ['body_class' => 'sticky-header left-side-collapsed'])
@section('title')
    Order Pizza Online For Delivery | Customer Login
@endsection
@section('body')
    <div class="main-content">
    @include('front.includes.back-header')
    <!-- header-starts -->
        {{--<div class="header-section">--}}
        {{--<!--toggle button start-->--}}
        {{--<div class="sr_back_button"><a  href="home.html"><i class="fa fa fa-angle-left icon"></i></a></div>--}}
        {{--<!--toggle button end-->--}}
        {{--<!--notification menu start -->--}}
        {{--<div class="menu-right" style="margin-top: -47px;">--}}
        {{--<a href="home.html">--}}
        {{--<div class="logo_bg edge-shadow">--}}
        {{--<img style="width: 50%;" src="assets/imgs/pizzahut-logo-icon.svg" alt="">--}}
        {{--</div>--}}
        {{--</a>--}}
        {{--</div>--}}
        {{--</div>--}}
        <div class="clearfix">
            <div class="scroll-content" style="margin-top: 44px;">
                <!--notification menu end -->
                <div class="toolbar-title toolbar-title-md" style="text-transform: uppercase;color: #424242;padding: 27px 0px 15px 0px; font-weight: 600; text-align: center">
                    Signin/Login
                </div>

                <div class="contain-fluid">
                    <div class="login_wrapper">
                        <div class="input_field">
                            {{--<form>--}}
                                <div class="input-group mb-3 col-12" style="">
                                    {{--<form action="/action_page.php" style="border:1px solid #ccc">--}}
                                    <div class="container">
                                        <!--<p>Please fill in this form to create an account.</p>
                                        <hr>-->

                                        <h4> <i class="fa fa-mobile"></i> Login With Mobile Number</h4>

                                        <div class="container">
                                            {{Form::open(['route'=>'save-customer','class'=>'contact-form','method'=>'POST','name'=>'saveCustomer'])}}


                                            <label for="code"><b>Verification Code</b>{{Session::get('newCustomerOTP')}}</label>
                                            {{Form::number('otp_pin','',array('required' => 'required', 'placeholder' => 'Enter Verification Code'))}}
                                            <div class="invalid-feedback">{{$errors->has('otp_pin') ? $errors->first('otp_pin') : ''}}</div>

                                            <label>
                                            {{--<input type="checkbox" checked="checked" name="remember"> Remember me--}}
                                            </label>

                                            <div class="full-button center-align round" margin-top="" padding-bottom="">
                                                {{--<input type="submit" value="Login">--}}
                                                <button type="submit"><span class="button-inner" style="border-radius: 10px">Login</span></button>
                                                {{--<button class="button-border disable-hover button button-md button-default button-default-md button-full button-full-md button-md-green" color="green" data-toggle="modal" data-target="#myModal">--}}
                                                    {{--<span class="button-inner" style="border-radius: 10px">Login</span>--}}

                                                {{--</button>--}}
                                            </div>
                                        </div>
                                        {{Form::close()}}
                                    </div>
                            {{--</form>--}}
                        </div>
                        {{--</form>--}}
                    </div>
                </div>

                <!-- The Modal -->


            </div>
        </div>
    </div>
    <!-- End of .clearfix -->

    <div class="modal" id="myModal">
        <div class="modal-dialog">
            <div class="modal-content">

                <!-- Modal Header -->
                <div class="modal-header">

                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>

                <!-- Modal body -->
                <div class="modal-body">
                    Login Success Full
                </div>

                <!-- Modal footer -->
                <div class="modal-footer">
                    <button type="button" class="btn btn-success" data-dismiss="modal">Close</button>
                </div>

            </div>
        </div>
    </div>

    </div>
    <!-- main content end-->
@endsection