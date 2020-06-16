@extends('front.customerLogin.layouts.app')
@section('content')
    <link rel="stylesheet" type="text/css" href="{{asset('/')}}client_end/css/login/registration.css">
    <div id="logreg-forms">
        <form class="form-signin" method="POST" action="{{ route('customer.registration-create') }}">
            @csrf
            <h1 class="h3 mb-3 font-weight-normal" style="text-align: center">Registration</h1>
            <div class="social-login">
                <button class="btn facebook-btn social-btn" type="button" onclick="window.location='{{url('redirect/facebook')}}'"><span><i class="fab fa-facebook-f"></i> Sign in with Facebook</span> </button>
                <button class="btn google-btn social-btn" type="button" onclick="window.location='{{url('redirect/google')}}'"><span><i class="fab fa-google-plus-g"></i> Sign in with Google+</span> </button>
            </div>
            <p style="text-align:center"> OR  </p>
                <input type="name" id="inputName" name="name" class="form-control
                @if($errors->has('name')) is-invalid @endif" placeholder="Your name" value="{{ old('name') }}" autofocus="">
                @if($errors->has('name'))
                    <div class="error">{{ $errors->first('name') }}</div>
                @endif
            <input type="email" id="inputEmail" name="email" class="form-control @if($errors->has('email')) is-invalid @endif" placeholder="Email address" value="{{ old('email') }}" autofocus="">
            @if($errors->has('email'))
                <div class="error">{{ $errors->first('email') }}</div>
            @endif
            <input type="password" id="inputPassword" name="password" class="form-control @if($errors->has('password')) is-invalid @endif" placeholder="Password">
            @if($errors->has('password'))
                <div class="error">{{ $errors->first('password') }}</div>
            @endif
            <input type="password" id="inputPasswordConfirm" name="password_confirmation" class="form-control" placeholder="Password confirmation">

            <button class="btn btn-success btn-block" type="submit"><i class="fas fa-sign-in-alt"></i> Sign in</button>
            <a href="#" id="forgot_pswd">Forgot password?</a>
            <hr>
            <!-- <p>Don't have an account!</p>  -->
{{--            <button class="btn btn-primary btn-block" type="button" id="btn-signup"><i class="fas fa-user-plus"></i> Sign up New Account</button>--}}
        </form>

        <form action="/reset/password/" class="form-reset">
            <input type="email" id="resetEmail" class="form-control" placeholder="Email address" required="" autofocus="">
            <button class="btn btn-primary btn-block" type="submit">Reset Password</button>
            <a href="#" id="cancel_reset"><i class="fas fa-angle-left"></i> Back</a>
        </form>

{{--        <form action="/signup/" class="form-signup">--}}
{{--            <div class="social-login">--}}
{{--                <button class="btn facebook-btn social-btn" type="button"><span><i class="fab fa-facebook-f"></i> Sign up with Facebook</span> </button>--}}
{{--            </div>--}}
{{--            <div class="social-login">--}}
{{--                <button class="btn google-btn social-btn" type="button"><span><i class="fab fa-google-plus-g"></i> Sign up with Google+</span> </button>--}}
{{--            </div>--}}

{{--            <p style="text-align:center">OR</p>--}}

{{--            <input type="text" id="user-name" class="form-control" placeholder="Full name" required="" autofocus="">--}}
{{--            <input type="email" id="user-email" class="form-control" placeholder="Email address" required autofocus="">--}}
{{--            <input type="password" id="user-pass" class="form-control" placeholder="Password" required autofocus="">--}}
{{--            <input type="password" id="user-repeatpass" class="form-control" placeholder="Repeat Password" required autofocus="">--}}

{{--            <button class="btn btn-primary btn-block" type="submit"><i class="fas fa-user-plus"></i> Sign Up</button>--}}
{{--            <a href="#" id="cancel_signup"><i class="fas fa-angle-left"></i> Back</a>--}}
{{--        </form>--}}
{{--        <br>--}}

    </div>
    <p style="text-align:center">
        <a href="http://bit.ly/2RjWFMfunction toggleResetPswd(e){
    e.preventDefault();
    $('#logreg-forms .form-signin').toggle() // display:block or none
    $('#logreg-forms .form-reset').toggle() // display:block or none
}

function toggleSignUp(e){
    e.preventDefault();
    $('#logreg-forms .form-signin').toggle(); // display:block or none
    $('#logreg-forms .form-signup').toggle(); // display:block or none
}

$(()=>{
    // Login Register Form
    $('#logreg-forms #forgot_pswd').click(toggleResetPswd);
    $('#logreg-forms #cancel_reset').click(toggleResetPswd);
    $('#logreg-forms #btn-signup').click(toggleSignUp);
    $('#logreg-forms #cancel_signup').click(toggleSignUp);
})g" target="_blank" style="color:black">Ismail Hossen</a>
    </p>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script src="{{asset('/')}}client_end/js/login/registration.js"></script>
@endsection