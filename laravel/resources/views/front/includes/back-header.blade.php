<!-- header-starts -->
<div class="header-section">
    <!--toggle button start-->
    @unless(empty($back))
        @php($back_button = $back)
    @else
        @php($back_button = url()->previous())
    @endunless
    <div class="sr_back_button"><a href="{{ $back_button }}"><i class="fa fa fa-angle-left icon"></i></a></div>
    <!--toggle button end-->
    <!--notification menu start -->
    <div class="menu-right" style=" margin-top: -51px;">
        <a href="{{route('/')}}">
            <div style="width: 150px;height: 52px;margin: 0 auto;position: relative;bottom: -10px;text-align: center;">
                <img style="" src="{{asset('/')}}front/images/pizzahut-logo.svg" alt="">
            </div>
        </a>
    </div>
</div>