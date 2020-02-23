@section('stylesheet')
@endsection
@extends('front.master', ['body_class' => 'main-site'])
@section('title')
    Nitol | Dealer - Locator
@endsection
@php
    header('X-Frame-Options: GOFORIT');
@endphp
@section('body')
    <div class="container">
        <div class="row">
            <div class=" main-content-area">
                <div class="col-lg-12 col-sm-12 col-md-12 col-xs-12" style="margin-bottom: 20px">   
                        <h2>CALCULATE AND GET RECOMMENDED COOLING CAPACITY REQUIRED BY THE ROOM</h2>      
                </div>
                <form method="POST" action="{{url('')}}/ac_ton_calculation/recommend" name='tonCalculation' id="tonCalculation">
                    @csrf
                    <div class="form-row">
                        <div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
                            <div class="{{$errors->first('roomWidth',' has-error')}}">
                                <label for="name">Room Width(feet):</label>
                                <input type="number" class="form-control" id="width" placeholder="Enter Width"  name="roomWidth" >
                                <div class="text-danger">{{$errors->has('roomWidth') ? $errors->first('roomWidth') : ''}}</div>
                            </div>

                            <div class="{{$errors->first('roomLength',' has-error')}}">
                                <label for="name">Room Length(feet):</label>
                                <input type="number" class="form-control" id="length" placeholder="Enter Length"  name="roomLength">
                                <div class="text-danger">{{$errors->has('roomLength') ? $errors->first('roomLength') : ''}}</div>
                            </div>

                            <div class="{{$errors->first('roomHeight',' has-error')}}">
                                <label for="name">Room Height(feet):</label>
                                <input type="number" class="form-control" id="width" placeholder="Enter Width"  name="roomHeight" >
                                <div class="text-danger">{{$errors->has('roomHeight') ? $errors->first('roomHeight') : ''}}</div>
                            </div>
                        </div>


                        <div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
                            <div class="{{$errors->first('window',' has-error')}}">
                                <label for="name">Number of Window:</label>
                                <input type="number" class="form-control" id="window" placeholder="Enter Number of Window"  name="window">
                                <div class="text-danger">{{$errors->has('window') ? $errors->first('window') : ''}}</div>
                            </div>

                            <div class="{{$errors->first('door',' has-error')}}">
                                <label for="name">Number of Door:</label>
                                <input type="number" class="form-control" id="door" placeholder="Enter Number of Door"  name="door">
                                <div class="text-danger">{{$errors->has('door') ? $errors->first('door') : ''}}</div>
                            </div>


                            <div class="{{$errors->first('people',' has-error')}}">
                                <label for="name">Number of People:</label>
                                <input type="number" class="form-control" id="people" placeholder="Enter Number of Window"  name="people">
                                <div class="text-danger">{{$errors->has('people') ? $errors->first('people') : ''}}</div>
                            </div> 
                        </div>
                    </div>
                        
                    <label class="col-lg-12 col-sm-12 col-md-12 col-xs-12" style="margin-right: 10px">Please select if You are in Top Floor: </label>
                    <div class="col-lg-12 col-sm-12 col-md-12 col-xs-12">
                        <label class="radio-inline">
                            <input type="radio" name="floor" value="top"> Top Floor
                        </label>
                        <label class="radio-inline">
                            <input type="radio" name="floor" value="other" checked=""> Others
                        </label>
                    </div>
                    <div class="col-lg-12 col-sm-12 col-md-12 col-xs-12 ton_calculation">
                        <button type="submit" class="btn btn-danger btn-lg" style="margin: 15px 0 15px 0">Submit</button>
                        <br>
                    </div>     
                </form>

                <div class="col-lg-12 col-sm-12 col-md-12 col-xs-12 ton_calculation">
                    <label for="name">RECOMMENDED AC CAPACITY </label>
                    <div style="border:1px solid gray;width:100%; text-align: center; margin-top: 15px">
                        <h4>
                            @if(isset($suggestAcTon))
                                {{$suggestAcTon}} TON
                            @else
                                0 TON
                            @endif
                        </h4>
                    </div>
                    <div style=" margin-top: 8%"></div>
                    <button type="button" class="btn btn-danger"><a href="{{url('')}}/ac_ton_calculation"><font color="white">Clear</font></a></button>
                </div>

                <div class="col-lg-12 col-md-8 col-sm-8 col-xs-12 main-content-area">
                    @if(isset($allSuggestAC))
                        <div class="row">
                            <ul class="product-list grid-products equal-container">
                                @foreach ($allSuggestAC as $product)
                                    <li class="col-lg-4 col-md-6 col-sm-6 col-xs-6 ">
                                        <div class="product product-style-3 equal-elem ">
                                            <div class="product-thumnail">
                                                <a href="{{route('show-product',['id'=>$product->id])}}" title="T-Shirt Raw Hem Organic Boro Constrast Denim">
                                                    <figure>
                                                        @if($product->image1)
                                                            <img src="{{asset($product->image1)}}" width="800" height="800" alt="T-Shirt Raw Hem Organic Boro Constrast Denim">
                                                        @else
                                                            <img src="https://via.placeholder.com/511x357" width="800" height="800" style="width:100%">
                                                        @endif
                                                    </figure>
                                                    {{--<img src="{{asset('/')}}client_end/images/products/digital_20.jpg" alt="T-Shirt Raw Hem Organic Boro Constrast Denim"></figure>--}}
                                                </a>
                                            </div>
                                            <div class="product-info">
                                                <a href="{{route('show-product',['id'=>$product->id])}}" class="product-name"><span>{{$product->title}}</span></a>
                                                <div class="wrap-price">
                                                    @if($product->discount==0)
                                                        <ins><p class="product-price">৳ {{$product->price}}</p></ins>
                                                    @else
                                                        <ins><p class="product-price">৳ {{ ($product->price/100)*(100-$product->discount) }} </p></ins> <del><p class="product-price">৳ {{$product->price}}</p></del><p class="product-price" style="margin-left:10px;">-{{$product->discount}}% off</p>
                                                    @endif
                                                </div>
                                                <a href="{{route('show-product',['id'=>$product->id])}}" class="btn add-to-cart">Add To Cart</a>
                                            </div>
                                        </div>
                                    </li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                </div><!--end main products area-->
            </div><!--end row-->

        </div><!--end container-->
    </div>
@endsection