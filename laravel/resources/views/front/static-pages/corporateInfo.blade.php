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

        <style>
            table {
                font-family: arial, sans-serif;
                border-collapse: collapse;
                width: 100%;
            }
            
            td, th {
                border: 1px solid #dddddd;
                text-align: left;
                padding: 8px;
            }
            
            tr:nth-child(even) {
                background-color: #dddddd;
            }
        </style>


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
                        <div class="repeat-dealor" style="padding:30px;text-align:justify;">
                            <p class="western" text-align="center"><span style="font-size: x-large;"><strong>Corporate Info</strong></span></p>
                            <p class="western"><span style="font-size: large;"><strong>Nitol Electronics Limited (NEL) </strong></span><span style="font-size: large;">is one of fastest growing electronics product manufacturer in Bangladesh. Main brand is </span><span style="font-size: large;"><strong>Atashii</strong></span><span style="font-size: large;">.</span></p>
                            <p class="western"><span style="font-size: large;"><strong>Company Overview</strong></span></p>
                            <p class="western"><span style="font-size: large;">Nitol Electronics Limited (NEL) is one of fastest growing electronics product manufacturer in Bangladesh. We offer world class electronic manufacturing services and support, targeted specially to meet the requirement and budgets of small to medium sized customers.<br /> <br /> Within the brand portfolio the main brands are </span><span style="font-size: large;"><strong>Atashii</strong></span><span style="font-size: large;"> which helps to enhance and enrich lifestyles all around the country. It extends product line LED TV, Refrigerators, Freezers, Air Conditioners, Ovens, Blenders, Irons, and Hairdryers etc.<br /> <br /> NEL has a clear vision towards with quality and innovation including protecting the environment and the climate has been an integral part of the company&rsquo;s corporate strategy. We rely on its outstanding products and the added value that they provide to the customers in terms of performance, conveniences and user-friendliness.</span></p>
                            <p class="western"><span style="font-size: large;"><strong>Nitol Electronics Limited (NEL) is a sister concern of <a href="http://www.nitolniloy.com.bd/">Nitol Niloy Group</a>.</strong></span></p>
                            <p class="western"><br /> </p>
                            <p class="western" text-align="center"><span style="font-family: Roboto, serif;"><span style="font-size: x-large;"><em>If you belong to a Corporate Institution or Government Establishment, we invite you to explore our attractive offers and schemes.</em></span></span></p>   
                        </div>
                    </div>
                


    
    
                    <!---------------------- form -------------------------------------->
                    <div class="row form-bg-st" >
                
                        <!-- Default form register -->
                        {{Form::open(['route'=>'corporateSalesStore','class'=>'text-center border','method'=>'POST','name'=>'frm-billing'])}}
                        
        
                            <p class="form-head-line-tx">Corporate Sales Information</p>
                        
                            <div class="form-row">
                                <div class="col-md-6">
                                    <!-- First name -->
                                    <div class="{{$errors->first('full_name',' has-error')}}">
                                        <label class="control-label" for="inputSuccess1">Full Name</label>
                                        <input type="text" id="defaultRegisterFormFirstName" class="form-control" name="full_name" placeholder="Name" required>
                                        <div class="text-danger">{{$errors->has('full_name') ? $errors->first('full_name') : ''}}</div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <!-- Last name -->
                                    <div class="{{$errors->first('company_name',' has-error')}}">
                                        <label class="control-label" for="inputSuccess1">Company Name</label>
                                        <input type="text" id="defaultRegisterFormLastName" class="form-control" name="company_name" placeholder="Company Name" required>
                                        <div class="text-danger">{{$errors->has('company_name') ? $errors->first('company_name') : ''}}</div>
                                    </div>
                                </div>
                            </div>
                            <!-- Phone number -->
                            <div class="col-md-6">
                                <div class="{{$errors->first('contact_number',' has-error')}}">
                                    <label class="control-label" for="inputSuccess1">Contact Number</label>
                                    <input type="text" id="defaultRegisterPhonePassword" class="form-control" name="contact_number" placeholder="Contact Number" aria-describedby="defaultRegisterFormPhoneHelpBlock" required>
                                    <div class="text-danger">{{$errors->has('contact_number') ? $errors->first('contact_number') : ''}}</div>
                                </div>
                            </div>
                            <!-- E-mail -->
                            <div class="col-md-6">
                                <div class="{{$errors->first('email_address',' has-error')}}">
                                    <label class="control-label" for="inputSuccess1">E mail</label>
                                    <input type="email" id="defaultRegisterFormEmail" class="form-control mb-4" name="email_address" placeholder="E-mail" required>
                                    <div class="text-danger">{{$errors->has('email_address') ? $errors->first('email_address') : ''}}</div>
                                </div>
                            </div>
        
                            <!-- Addres -->
                            <div class="col-md-6">
                                <div class="{{$errors->first('address',' has-error')}}">
                                    <label class="control-label" for="inputSuccess1">Address</label>
                                    <textarea class="form-control" rows="1" name="address" placeholder="Address" required></textarea>
                                    <div class="text-danger">{{$errors->has('address') ? $errors->first('address') : ''}}</div>
                                </div>
                            </div>
        
                            <!-- city -->
                            <div class="col-md-3">
                                <div class="{{$errors->first('city',' has-error')}}">
                                    <label class="control-label" for="inputSuccess1">City</label>
                                    <input type="text" class="form-control" name="city" placeholder="City" required>
                                    <div class="text-danger">{{$errors->has('city') ? $errors->first('city') : ''}}</div>
                                </div>
                            </div>
    
                            <!-- city -->
                            <div class="col-md-3">
                                <div class="{{$errors->first('country',' has-error')}}">
                                    <label class="control-label" for="inputSuccess1">Country</label>
                                    <input type="text" class="form-control" name="country" placeholder="Country">
                                    <div class="text-danger">{{$errors->has('country') ? $errors->first('country') : ''}}</div>
                                </div>
                            </div>
    
                    
                                    
                            <div class="col-md-6 col-xs-12">
                                <div class="{{$errors->first('inlineRadioOptions',' has-error')}}">
                                    <div class="eq-head"><h5 class="control-label"><b>Enquiry Type</b></h5></div>
                                    <div class="col-md-4 col-xs-6">	
                                        <label class="radio-inline form-spas">
                                            <input type="radio" name="inlineRadioOptions" id="inlineRadio1" value="Corporate Business">Corporate Business
                                        </label>
                                    </div>
                                    <div class="col-md-4 col-xs-5">
                                        <label class="radio-inline form-spas">
                                            <input type="radio" name="inlineRadioOptions" id="inlineRadio2" value="Dealer Business">Dealer Business
                                        </label>
                                    </div>
                                    <div class="text-danger">{{$errors->has('inlineRadioOptions') ? $errors->first('inlineRadioOptions') : ''}}</div>
                                </div>
                                    
                                <div class=" col-md-4 col-xs-12">
                                    <div class="{{$errors->first('category',' has-error')}}">
                                        <select class="form-control" style="text-align: leftleft !important;" required name="category">
                                            <option>Preferred Category</option>
                                            <option>TV </option>
                                            <option>Refrigerator</option>
                                            <option>Air Conditioner</option>
                                            <option>Home & Kitchen</option>
                                            <option>Gift Voucher</option>
                                            <option>Other</option>
                                        </select>
                                        <div class="text-danger">{{$errors->has('category') ? $errors->first('category') : ''}}</div>
                                    </div>
                                </div>
        
                            </div>	
    
                            <div class="col-md-6" style="position:static !important">
                                <div class="{{$errors->first('enquiry',' has-error')}}">
                                    <label class="control-label" for="inputSuccess1">Enquiry</label>
                                    <textarea class="form-control" rows="3" name="enquiry" placeholder="Enquiry"></textarea>
                                    <div class="text-danger">{{$errors->has('enquiry') ? $errors->first('enquiry') : ''}}</div>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <!-- Sign up button -->
                                <button class="btn btn-danger btn-lg btn-block" type="submit">Submit</button>
                            </div>
                            <hr>
    
                        </form>
                        <!-- Default form register -->
        
                    </div>
    
                    <!---------------------- form  end-------------------------------------->


                    
                </div>

            </div>
        </div>
        <div class="container">	
            <div class="row equal-cols">
                    <div class="col-md-6 col-sm-4 col-xs-12 ">
                        <div class="locator-sec Market-sec ">
                            
                                <p><strong>Marketing Activities</strong></p>
                                <p><span style="font-weight: 400;">* Advertisement</span><span style="font-weight: 400;"><br></span><span style="font-weight: 400;">* Catalog</span><span style="font-weight: 400;"><br></span><span style="font-weight: 400;">* Promotion</span><span style="font-weight: 400;"><br></span><span style="font-weight: 400;">* Banner &amp; Festoon</span><span style="font-weight: 400;"><br></span><span style="font-weight: 400;">* Social Media (Facebook, Instagram)</span><span style="font-weight: 400;"><br></span><span style="font-weight: 400;">* YouTube </span><span style="font-weight: 400;"><br></span><span style="font-weight: 400;">* Online Newspaper</span></p> 
                                <p><strong>Nitol Electronics Ltd.</strong></p>
                                <p><strong>Hotline:</strong><span style="font-weight: 400;"> 01953400400, 09636 400 400</span></p>
                                <p><span style="font-weight: 400;">www.facebook.com/nitolelectronics</span></p>
                                <p><span style="font-weight: 400;">www. nitolelectronics.com</span></p>
                            
                        </div>
                    </div>
                    
                    {{-- <div class="col-md-4 col-sm-4 col-xs-12">
                        <div class="locator-sec Market-sec">
                            
                                <p><strong>Marketing Activities</strong></p>
                                <p><span style="font-weight: 400;">* Advertisement</span><span style="font-weight: 400;"><br></span><span style="font-weight: 400;">* Catalog</span><span style="font-weight: 400;"><br></span><span style="font-weight: 400;">* Promotion</span><span style="font-weight: 400;"><br></span><span style="font-weight: 400;">* Banner &amp; Festoon</span><span style="font-weight: 400;"><br></span><span style="font-weight: 400;">* Social Media (Facebook, Instagram)</span><span style="font-weight: 400;"><br></span><span style="font-weight: 400;">* YouTube </span><span style="font-weight: 400;"><br></span><span style="font-weight: 400;">* Online Newspaper</span></p> 
                                <p><strong>Nitol Electronics Ltd.</strong></p>
                                <p><strong>Hotline:</strong><span style="font-weight: 400;"> 01953400400, 09636 400 400</span></p>
                                <p><span style="font-weight: 400;">www.facebook.com/nitolelectronics</span></p>
                                <p><span style="font-weight: 400;">www. nitolelectronics.com</span></p>
                            
                        </div>
                    </div> --}}

                    <div class="col-md-6 col-sm-4 col-xs-12 ">
                        <div class="locator-sec Market-sec">

                            <p><strong>Business Concerns of Nitol Niloy Group</strong></p>
        
                            <table>

                                <tr>
                                    <th>SL</th>
                                    <th>Year Of Establishment</th>
                                    <th>Business Name</th>
                                    <th>Type Of Business, Products</th>
                                </tr>

                                <tr>
                                    <td>1</td>
                                    <td>1982</td>
                                    <td>Nitol Motors Ltd.</td>
                                    <td>TATA Vehicle Sole Distributor</td>                                    
                                </tr>

                                <tr>
                                    <td>2</td>
                                    <td>1988</td>
                                    <td>Nikita & Company Ltd.</td>
                                    <td>Trading Company</td>                                    
                                </tr>

                                <tr>
                                    <td>3</td>
                                    <td>1991</td>
                                    <td>NITA Company Ltd.</td>
                                    <td>Assembling vehicle body</td>                                    
                                </tr>

                                <tr>
                                    <td>4</td>
                                    <td>1992</td>
                                    <td>Service Centre Ltd.</td>
                                    <td>TATA Vehicle Servicing</td>                                    
                                </tr>

                                <tr>
                                    <td>5</td>
                                    <td>1994</td>
                                    <td>Central Properties Ltd.</td>
                                    <td>Real Estate Management</td>                                    
                                </tr>

                                <tr>
                                    <td>6</td>
                                    <td>1996</td>
                                    <td>Nitol Construction (Pvt.) Ltd.</td>
                                    <td>Construction Equipment</td>                                    
                                </tr>

                                <tr>
                                    <td>7</td>
                                    <td>1996</td>
                                    <td>Niloy Cement Industries Ltd.</td>
                                    <td>Grey Cement</td>                                    
                                </tr>

                                <tr>
                                    <td>8</td>
                                    <td>1997</td>
                                    <td>Fidelity Assets & Security Company Ltd. (FAS)</td>
                                    <td>Financial Institution</td>                                    
                                </tr>

                                <tr>
                                    <td>9</td>
                                    <td>1999</td>
                                    <td>Nitol Insurance Company Ltd.</td>
                                    <td>General Insurance</td>                                    
                                </tr>

                                <tr>
                                    <td>10</td>
                                    <td>1999</td>
                                    <td>Nitol White Cement Industry</td>
                                    <td>White Cement</td>                                    
                                </tr>

                                <tr>
                                    <td>11</td>
                                    <td>2000</td>
                                    <td>Nitol Bay Resort</td>
                                    <td>Hotel Service</td>                                    
                                </tr>

                                <tr>
                                    <td>12</td>
                                    <td>2001</td>
                                    <td>Nitol Motors Ltd. (Tractor)</td>
                                    <td>Tractor</td>                                    
                                </tr>

                                <tr>
                                    <td>13</td>
                                    <td>2002</td>
                                    <td>Nitol Gas Distribution Company ltd.</td>
                                    <td>Natural Gas</td>                                    
                                </tr>

                                <tr>
                                    <td>14</td>
                                    <td>2004</td>
                                    <td>Nitol Sugar Mills ltd.</td>
                                    <td>Sugar</td>                                    
                                </tr>

                                <tr>
                                    <td>15</td>
                                    <td>2006</td>
                                    <td>Sylhet Pulp & Paper Mills Ltd.</td>
                                    <td>Pulp</td>                                    
                                </tr>

                                <tr>
                                    <td>16</td>
                                    <td>2007</td>
                                    <td>NReach Net (Pvt.) Ltd.</td>
                                    <td>Internet Service Provider</td>                                    
                                </tr>

                                <tr>
                                    <td>17</td>
                                    <td>2007</td>
                                    <td>NITS Service (Pvt.) Ltd.</td>
                                    <td>Vehicle Tracking Device (GPS)</td>                                    
                                </tr>

                                <tr>
                                    <td>18</td>
                                    <td>2009</td>
                                    <td>Nitol Marketing Company Ltd.</td>
                                    <td>Tire and Rubber Distribution</td>                                    
                                </tr>

                                <tr>
                                    <td>19</td>
                                    <td>2009</td>
                                    <td>Nitol Tour and Travels Ltd.</td>
                                    <td>Air Ticketing and Tours Management</td>   
                                </tr>



                                <tr>
                                    <td>20</td>
                                    <td>2010</td>
                                    <td>Nitol-Niloy Filter Industries Ltd.</td>
                                    <td>Engine Filter</td>                                    
                                </tr>

                                <tr>
                                    <td>21</td>
                                    <td>2010</td>
                                    <td>Total Asia Logistics Ltd.</td>
                                    <td>Warehouse Service</td>                                    
                                </tr>

                                <tr>
                                    <td>22</td>
                                    <td>2010</td>
                                    <td>Nitol Curtis Paper Mills Ltd.</td>
                                    <td>Paper</td>                                    
                                </tr>

                                <tr>
                                    <td>23</td>
                                    <td>2011</td>
                                    <td>Nitol Tire Industries Ltd.</td>
                                    <td>Tire Distribution</td>                                    
                                </tr>

                                <tr>
                                    <td>24</td>
                                    <td>2011</td>
                                    <td>Driving Training Institution</td>
                                    <td>Training Service</td>                                    
                                </tr>

                                <tr>
                                    <td>25</td>
                                    <td>2013</td>
                                    <td>Nitol Electronics Ltd.</td>
                                    <td>Electric Products</td>                                    
                                </tr>

                                <tr>
                                    <td>26</td>
                                    <td>2014</td>
                                    <td>Aman Ceramic Ltd.</td>
                                    <td>Ceramic</td>                                    
                                </tr>

                                <tr>
                                    <td>27</td>
                                    <td>2014</td>
                                    <td>Niloy Motors Ltd.</td>
                                    <td>Hero Bike Distributor</td>                                    
                                </tr>

                                <tr>
                                    <td>28</td>
                                    <td>2014</td>
                                    <td>HMCL Niloy Bangladesh Ltd.</td>
                                    <td>Assembling Hero Bike</td>                                    
                                </tr>

                                <tr>
                                    <td>29</td>
                                    <td>2015</td>
                                    <td>Radio Next</td>
                                    <td>FM Radio</td>   
                                </tr>

                                <tr>
                                    <td>30</td>
                                    <td>2015</td>
                                    <td>Horizon Next Media & Event Management Ltd.</td>
                                    <td>Media & Event Management</td>   
                                </tr>

                            </table>
                            
                        </div>
                    </div>
    
                </div>
        </div>
    </section>
@endsection
