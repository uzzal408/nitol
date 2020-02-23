@section('stylesheet')
    <link href="{{asset('/')}}client_end/css/styleMobile.css" rel="stylesheet">
    <style>

        body {
            background-image: url({{asset('/')}}front/assets/imgs/Backdrop.jpg);
            font-family: Arial, Helvetica, sans-serif;
        }
        * {box-sizing: border-box}

        /* Full-width input fields */
        input[type=text], input[type=password], input[type=email]  {
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
            border:1px solid #ccc;
            padding:10px;
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
                    <div class="toolbar-title toolbar-title-md" style="text-transform: uppercase;color: #424242;text-align: center;margin-top: 20px;margin-bottom: 20px; font-weight: 600; font-family: 'Open Sans Condensed', sans-serif;">
                        <i class="fa fa-lock" aria-hidden="true"></i> SIGNIN/LOGIN
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
                                                            {{--<form action="/action_page.php" style="border:1px solid #ccc">--}}
                                                            {{Form::open(['route'=>'login-customer-by-email','class'=>'contact-form','method'=>'POST','name'=>'loginCustomerByEmail'])}}
                                                            <div class="container">

                                                                    <label for="uname"><b>Username</b></label>
                                                                    {{Form::email('email_address','',array('required' => 'required', 'placeholder' => 'Your Email Address', 'id' => 'emailAddress'))}}
                                                                    <div class="invalid-feedback">{{$errors->has('email_address') ? $errors->first('email_address') : ''}}</div>
                                                                    <div id="res"></div>
                                                                    {{--<input type="text" placeholder="Enter Username" id="uname" required>--}}

                                                                    <label for="psw"><b>Password</b></label>
                                                                    {{Form::password('password',array('required' => 'required', 'placeholder' => 'Your Password'))}}
                                                                    <div class="invalid-feedback">{{$errors->has('password') ? $errors->first('password') : ''}}</div>
                                                                    <label>
                                                                        <input type="checkbox" checked="checked" name="remember" style="margin-bottom:15px">
                                                                        Remember me
                                                                    </label>
                                                                    <div class="full-button center-align round" margin-top="" padding-bottom="">
                                                                        <button type="submit" class="button-md" color="green" style="width: 100%">
                                                                            <span class="button-inner" style="border-radius: 10px">Login</span>
                                                                        </button>
                                                                    </div>
                                                                </div>
                                                            {{Form::close()}}
                                                            {{--</form>--}}
                                                        </div>
                                                        <h3 style="text-align: center">OR</h3>
                                                        <h5> <i class="fa    fa-mobile"></i> Login With Mobile Number</h5>
                                                        {{Form::open(['route'=>'login-customer-by-mobile','class'=>'contact-form','method'=>'POST','name'=>'loginCustomerByMobile'])}}
                                                        {{--<form action="/action_page.php" style="border:1px solid #ccc">--}}
                                                            <div class="container">
                                                                <label for="first"><b>Mobile No</b></label>
                                                                <input type="text" value="+88" placeholder="Please Insert Your Mobile Number" id="mobile" required>

                                                                <div class="full-button center-align round" margin-top="" padding-bottom="">
                                                                    <button class="button-md" color="green" style="width: 100%">
                                                                        <span class="button-inner" style="border-radius: 10px">Login</span>
                                                                    </button>
                                                                </div>
                                                            </div>
                                                            {{Form::close()}}
                                                        <p>Create a new account <a href="{{route('register-customer')}}" style="color:dodgerblue">SignUp</a>.</p>
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