@section('stylesheet')
@endsection
@extends('front.master', ['body_class' => 'main-site'])
@section('title')
    Nitol | Dealer - Locator
@endsection
@section('body')
    <div class="container">
        <div class="wrap-top-banner-3">
            <!--SLIDER-->
            <div class="wrap-main-slide-3 mt-5">
                <div class="slide-carousel owl-carousel style-nav-1" data-items="1" data-loop="1" data-nav="true" data-dots="false">
                    {{-- <div class="item-slide">
                        <img src="{{asset('/')}}client_end/images/banner-shop-full-width.jpg" alt="" class="img-slide" width="830" height="250">
                        <div class="wrap-banners type-1">

                        </div>
                    </div> --}}
                </div>
            </div>
            {{-- <div class="banner-style-vertical">
                <div class="banner-item">
                    <a href="#" class="link-banner banner-effect-1">
                        <figure><img src="{{asset('/')}}client_end/images/3-slide-banner-2.jpg" alt="" width="330" height="245"></figure>
                    </a>
                </div>
            </div> --}}
        </div>

    </div><!--end container-->
    <section>
        {{-- <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <img src="{{asset('/')}}client_end/images/dilar.jpg" alt="" >
                </div>
            </div>
        </div> --}}
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-sm-12 col-xs-12">
                    
                    <div class="locator-sec">
                        <h3>Dealer locator</h3>
                        <h2>To locate the Dealer closest to you, go to Division then go to District and finally go to Area.</h2>

                        <div class="col-md-12 col-sm-12 col-xs-12">
                            <div class="form-left-box">
                                <div class="row">
                                    <div class="col-md-4 col-sm-6">
                                        <label >Division</label>
                                        <select onchange="selectDivision()" name="division" id="divisionList"  class="form-control" required="required">
                                            <option value="">Select Division: </option>
                                            @foreach ($divisionAll as $divisionValue)
                                                <option style="border:1px;" value={{$divisionValue->id}}>{{$divisionValue->name}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="col-md-4 col-sm-6 ">
                                        <label style="float:left; margin-top:3px;">District: </label>
                                        <select onclick="selectDistrict()" name="district" id="districtList"  class="form-control" required="required" style="display: none">
                                        </select>
                                        
                                    </div>
                                    <div class="col-md-4 col-sm-6">
                                        <label style="float:left; margin-top:3px;">Thana/Upazila: </label>
                                        <select onclick="selectUpazila()" name="upazila" id="upazilaList"  class="form-control" required="required" style="display: none">
                                        </select>
                                        
                                    </div>
                                    {{-- <div class="col-md-2 col-sm-6 ">
                                        <label> </label>
                                        <input class="btn btn-default" type="submit" value="Submit">
                                        <input class="btn btn-default" type="submit" value="Reset">
                                    </div> --}}
                                </div>
                            </div>
                        </div>

                        <div class="col-md-12 col-sm-12 col-xs-12">
                            <div id="dealer_result">
                                <div cass="row">
                                    <div class="repeat-dealor">
                                        <div class="col-md-6 col-sm-12 col-xs-12">
                                            <h4><label id="lblState">Dealer Network: </label> Nitol Center</h4>
                                            <div style="border:2px solid #fff; margin-bottom:10px; width:250px; height:auto;"><img id="imageView" src="https://dummyimage.com/600x400/000/fff" style="width:100%; height:auto;"></div>
                                            <span >Nitol Electronics</span><p id="locationDealer"></p>
                                            <div class="repeat-dealor-height"><i class="fa fa-user"></i> Md. Moniruzzaman<br>
                                                <i class="fa fa-phone"></i> +8801975941837<br><i class="fa fa-envelope"></i>
                                                <a href="bdmotors@gmail.com"> bdmotors@gmail.com</a>
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-sm-12 col-xs-12">
                                            <iframe style="width:100%; height:100%;min-height:300px" frameborder="0" scrolling="no" src="https://maps.google.com/maps?q=22.683475,90.649368&amp;hl=es;z=14&amp;output=embed&amp;key=AIzaSyCJuU_a2OchA1Dh87cgehkh2jQIY6mqfT4"></iframe>
                                        </div>
                                    </div>
                                </div>
                                {{-- <div cass="row">
                                    <div class="repeat-dealor">
                                        <div class="col-md-6 col-sm-12 col-xs-12"><h4>
                                            <label id="lblState">Dealer Network: </label> MAX MOTORS</h4>
                                            <div style="border:2px solid #fff; margin-bottom:10px; width:250px; height:auto;"><img src="https://dummyimage.com/600x400/000/fff" style="width:100%; height:auto;">
                                            </div>
                                            <span>MAX MOTORS</span>
                                            <p>Amtola, Barishal Sadar, Barishal</p>
                                            <div class="repeat-dealor-height">
                                                <i class="fa fa-user"></i> Mr. Masud Kamal<br>
                                                <i class="fa fa-phone"></i> 01717-995545<br>
                                                <i class="fa fa-envelope"></i>
                                                <a href="maxmotors@gmail.com"> maxmotors@gmail.com</a>
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-sm-12 col-xs-12">
                                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3681.1458193841986!2d90.35479031496163!3d22.68561498512482!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x0!2zMjLCsDQxJzA4LjIiTiA5MMKwMjEnMjUuMSJF!5e0!3m2!1sen!2sbd!4v1543658044771" width="100%" height="100%" frameborder="0" style="border:0; min-height:300px" allowfullscreen=""></iframe>
                                        </div>
                                    </div>
                                </div> --}}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

<script>
    function selectDivision() {
        var divisionList = document.getElementById("divisionList").value;
        $.ajax({
            type: "POST",
            url: "{{url('')}}/api/store/locator/division/"+divisionList,
            success: function (response) {
                $('#districtList option').slice(0).remove();
                $('#upazilaList option').slice(0).remove();
                let newOption       = document.getElementById("districtList");
                for(let i = 0; i < response.length; i++ ){
                    //console.log(response[i].id);
                    //console.log(response[i].name);
                    let option          = document.createElement("option");
                    option.textContent  = response[i].name;
                    option.value        = response[i].id;
                    newOption.appendChild(option);
                }
                document.getElementById('districtList').style.display = 'block';
            }
        });
    }

    function selectDistrict() {
        var districtList = document.getElementById("districtList").value;
        $.ajax({
            type: "POST",
            url: "{{url('')}}/api/store/locator/district/"+districtList,
            success: function (response) {
                $('#upazilaList option').slice(0).remove();
                let newOption       = document.getElementById("upazilaList");
                for(let i = 0; i < response.length; i++ ){
                    let option          = document.createElement("option");
                    option.textContent  = response[i].name;
                    option.value        = response[i].id;
                    newOption.appendChild(option);
                }
                document.getElementById('upazilaList').style.display = 'block';
            }
        });
    }

    function selectUpazila() {
        var upazilaId = document.getElementById("upazilaList").value;
        $.ajax({
            type: "POST",
            url: "{{url('')}}/api/store/locator/upazila/"+upazilaId,
            success: function (response) {
                console.log(response.image);
                document.getElementById("locationDealer").innerText = response.description;
                document.getElementById("imageView").src = response.image;

                
                //document.getAttribute('data-src') = response.image;

                //for(let i = 0; i < response.length; i++ ){
                    //let newOption       = document.getElementById("upazilaList");
                    //let option          = document.createElement("option");
                    // option.value        = response[i].id;
                    // option.textContent  = response[i].name;
                    // option.textContent  = response[i].description;
                    // option.textContent  = response[i].image;
                    //console.log(response[i].id+response[i].name+response[i].description+response[i].image)
                    //newOption.appendChild(option);
                //}
            }
        });
    }
</script>