@section('stylesheet')
    <style>
        ion-list{
            border-bottom: 1px #e5e5e5 solid;
            padding-bottom: 10px;
        }
        .sr_wrapper{
            margin-top: -9px !important;
        }
        .sr_back_button{
            margin: 10px 0px 0px 10px !important;
        }
    </style>
@endsection
@extends('front.master')
@section('title')
    Order Pizza Online For Delivery | Location
@endsection
@section('body')
    <div class="sr_header">
        <div class="sr_back_button"><a href="{{URL::previous()}}"><i class="fa fa fa-angle-left icon"></i></a></div>
        <div class="sr_wrapper">
            <button class="scerch_button" full=""
                    style="touch-action: pan-y; user-select: none; -webkit-user-drag: none; -webkit-tap-highlight-color: rgba(0, 0, 0, 0); border: 1px #b2b2b2 solid">
                <i color="fill-grey" name="search" role="img" style="color: #e0e0e0;float: left;"
                   class="icon icon-md icon-md-fill-grey ion-md-search" aria-label="search" ng-reflect-color="fill-grey"
                   ng-reflect-name="search" placeholder="Enter your location"></i>
                <span style="color:#cecece; text-align:left; float: left; padding-left: 10px; padding-top: 5px;">Search</span>
            </button>
        </div>
    </div>
    <div class="gps_wrapper" style="">
        <ion-item style="">
            <ion-icon item-start="" name="gps" role="img" class="icon icon-md ion-md-gps item-icon" aria-label="gps"
                      ng-reflect-name="gps" style="padding-right: 10px;">
            </ion-icon>
            Use Current Location <br/><span>Using GPS</span>
        </ion-item>
    </div>

    <div class="recent_wrapper" style="">
        <ion-list style="">
            <i color="fill-grey" name="search" role="img" style="color: #e0e0e0;float: left; padding-right: 10px;"
               class="icon icon-md icon-md-fill-grey ion-md-search" aria-label="search" ng-reflect-color="fill-grey"
               ng-reflect-name="search"></i>RecentSearches
        </ion-list>
    </div>

    <div class="location_wrapper" style="">
        <ion-list>
            <i color="fill-grey" name="location" role="img" style="color: #e0e0e0;float: left; padding-right: 10px;"
               class="icon icon-md icon-md-fill-grey ion-md-location" aria-label="location" ng-reflect-color="fill-grey"
               ng-reflect-name="location"></i>
            <a href="#">Kirti Nagar, New Delhi, Delhi, India</a>
        </ion-list>
        <ion-list>
            <i color="fill-grey" name="location" role="img" style="color: #e0e0e0;float: left; padding-right: 10px;"
               class="icon icon-md icon-md-fill-grey ion-md-location" aria-label="location" ng-reflect-color="fill-grey"
               ng-reflect-name="location"></i>
            <a href="#">
                Dilip Buildcon Ltd, Kolar Rd, Inside Govind Narayan Singh Gate, Janki Nagar, Chuna Bhatti, Bhopal, Madhya Pradesh, India
            </a>
        </ion-list>


    </div>
@endsection
@section('script')
    <script !src="">
        (function () {
            $(".location_wrapper a").bind("click", function (ev) {
                ev.preventDefault();
                var locationDetail = $(this).html();
                var url ="{{route('save-location',['location'=>':location','mode'=>':mode'])}}"
                url = url.replace(':location', locationDetail);
                url = url.replace(':mode', '{{$mode}}');
                window.location.replace(url);

            });

        })();
    </script>
@endsection