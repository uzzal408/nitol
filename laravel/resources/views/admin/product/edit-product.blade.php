@extends('admin.master')
@section('title')
    Nitol Admin || Edit Products
@endsection
@section('stylesheet')
        <!-- bootstrap wysihtml5 - text editor -->
<link rel="stylesheet" href="{{asset('/')}}admin/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css">
@endsection
@section('body')
        <!-- Content Header (Page header) -->
<section class="content-header">
    <h1>
        Edit Products
        <small>Preview</small>
    </h1>
    <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Forms</a></li>
        <li class="active">General Elements</li>
    </ol>
</section>

<!-- Main content -->
<section class="content">
    <div class="row">
        <!-- left column -->
        <div class="col-md-12">
            <!-- general form elements -->
            <div class="box box-primary">
                <div class="box-header with-border">
                    <h3 class="box-title">Create New Product</h3>
                </div>
                <!-- /.box-header -->
                @include('admin.includes.common-error')
                        <!-- form start -->
                {{Form::open(['route'=>'update-product','class'=>'contact-form','method'=>'POST','name'=>'newProduct','files' => true])}}

                {{--<form role="form" method="post" action="{{route('new-product')}}" enctype="multipart/form-data">--}}
                {{--                    {{csrf_field()}}--}}
                {{--                    {{print_r($errors)}}--}}
                <div class="box-body">
                    <div class="{{'form-group required'.$errors->first('name',' has-error')}}">
                        <label for="title">Title</label>
                        {{Form::text('title',$product->title ,array('id' => 'title', 'required' => 'required', 'placeholder' => 'Enter Product Title', 'class' => 'form-control '))}}
                        <div class="help-block">{{$errors->has('title') ? $errors->first('title') : ''}}</div>
                        {{Form::hidden('product_id',$product->id)}}
                        {{--<input type="text" class="form-control" id="name" placeholder="Enter Product Name" name="name">--}}
                        {{--<span class="text-danger">{{$errors->has('name') ? $errors->first('name') : ''}}</span>--}}
                    </div>




                    <div class="form-group input_fields_wrap" id="">
                        <label>Specification</label>

                        <!-- <input type="button" class="btn btn-secondary" value="+" onClick="addSpecification();" style="padding:0 10px;"> -->

                        @php($specifications = explode(',', $product->specification))
                        @if(empty($specifications))
                            <div class="row">
                                <div class="col-md-8">
                                    <input type="text" name="specifications[]" id="add_button" class="form-control" autocomplete="on">
                                </div>
                                <div class="col-md-3">
                                    <button type="button" class="add_field_button" style="margin-left:20px;">Add More Specification</button>
                                </div>
                            </div>
                        @else
                            <div class="row">
                                @foreach($specifications as $category)
                                    <div>
                                        <div class="col-md-8">
                                            <input type="text" value="{{$category}}" id="add_button" name="specifications[]" class="form-control" autocomplete="on">
                                        </div>
                                    </div>
                                @endforeach
                                <div class="col-md-3">
                                    <button type="button" class="add_field_button" style="margin-left:20px;">Add More Specification</button>
                                </div>
                            </div>
                        @endif

                    </div>

                    
                    <div class="form-group" id="#">
                        <div class="row">
                            <div class="col-md-4">
                                <label>AC Capacity</label>
                                {{Form::number('ac_capacity',$product->ac_capacity,array('id' => 'ac_capacity', 'class' => 'form-control ', 'step'=>0.5, 'min'=>1, 'max'=>20))}}
                            </div>
                            <div class="col-md-4">
                                <label>Screen Size</label>
                                {{Form::number('screen_size',$product->screen_size,array('id' => 'screen_size', 'class' => 'form-control ', 'step'=>0.5, 'min'=>1, 'max'=>200))}}
                            </div>
                            
                            <div class="col-md-4">
                                <label>Refrezarator Capacity</label>
                                {{Form::number('capacity_litre',$product->capacity_litre,array('id' => 'capacity_litre', 'class' => 'form-control ', 'step'=>0.5, 'min'=>1, 'max'=>20000))}}
                            </div>
                        </div>
                    </div>

                    <div class="form-group" id="#">
                        <div class="row">
                            <div class="col-md-3">
                                <label>Price</label>
                                {{Form::number('price',$product->price,array('id' => 'price', 'class' => 'form-control ', 'min'=>1, 'max'=>5000000))}}
                            </div>

                            <div class="col-md-3">
                                <label>Sale Price</label>
                                {{Form::number('sale_price',$product->sale_price,array('id' => 'sale_price', 'class' => 'form-control ', 'min'=>1, 'max'=>5000000))}}
                            </div>

                            <div class="col-md-3">
                                <label>Discount</label>
                                {{Form::number('discount',$product->discount,array('id' => 'discount', 'class' => 'form-control ', 'min'=>0, 'max'=>90, 'step'=>0.01))}}
                            </div>
                            
                            <div class="col-md-3">
                                <label>Stock Quantity</label>
                                {{Form::number('quantity',$product->quantity,array('id' => 'quantity', 'class' => 'form-control ', 'min'=>1, 'max'=>500000))}}
                            </div>
                        </div>
                    </div>


                    <div class="{{'form-group '.$errors->first('productImage1',' has-error')}}">
                        <label for="productImage">Image | 1st</label>
                        {{Form::file('productImage1', array('id' => 'productImage1', 'accept'=>"image/*", 'class' => 'form-control '.$errors->first('productImage1','is-invalid')))}}
                        <small>
                            <b>Type:</b> jpeg | png | jpg | gif | svg <b>Maximum Size:</b> 2 MB
                        </small>
                        <div class="help-block">{{$errors->has('productImage1') ? $errors->first('productImage1') : ''}}</div>

                        {{--<input type="file" id="productImage" name="productImage">--}}
                        {{--<span class="text-danger">{{$errors->has('productImage') ? $errors->first('productImage') : ''}}</span>--}}
                    </div>

                    <div class="{{'form-group '.$errors->first('productImage2',' has-error')}}">
                        <label for="productImage2">Image | 2nd</label>
                        {{Form::file('productImage2', array('id' => 'productImage2', 'accept'=>"image/*", 'class' => 'form-control '.$errors->first('productImage2','is-invalid')))}}
                        <small>
                            <b>Type:</b> jpeg | png | jpg | gif | svg <b>Maximum Size:</b> 2 MB
                        </small>
                        <div class="help-block">{{$errors->has('productImage2') ? $errors->first('productImage2') : ''}}</div>

                        {{--<input type="file" id="productImage" name="productImage">--}}
                        {{--<span class="text-danger">{{$errors->has('productImage') ? $errors->first('productImage') : ''}}</span>--}}
                    </div>

                    <div class="{{'form-group '.$errors->first('productImage3',' has-error')}}">
                        <label for="productImage3">Image | 3rd</label>
                        {{Form::file('productImage3', array('id' => 'productImage3', 'accept'=>"image/*", 'class' => 'form-control '.$errors->first('productImage3','is-invalid')))}}
                        <small>
                            <b>Type:</b> jpeg | png | jpg | gif | svg <b>Maximum Size:</b> 2 MB
                        </small>
                        <div class="help-block">{{$errors->has('productImage3') ? $errors->first('productImage3') : ''}}</div>

                        {{--<input type="file" id="productImage" name="productImage">--}}
                        {{--<span class="text-danger">{{$errors->has('productImage') ? $errors->first('productImage') : ''}}</span>--}}
                    </div>

                    <div class="{{'form-group '.$errors->first('productImage4',' has-error')}}">
                        <label for="productImage4">Image | 4th</label>
                        {{Form::file('productImage4', array('id' => 'productImage4', 'accept'=>"image/*", 'class' => 'form-control '.$errors->first('productImage4','is-invalid')))}}
                        <small>
                            <b>Type:</b> jpeg | png | jpg | gif | svg <b>Maximum Size:</b> 2 MB
                        </small>
                        <div class="help-block">{{$errors->has('productImage4') ? $errors->first('productImage4') : ''}}</div>

                        {{--<input type="file" id="productImage" name="productImage">--}}
                        {{--<span class="text-danger">{{$errors->has('productImage') ? $errors->first('productImage') : ''}}</span>--}}
                    </div>


                    <div class="form-group">
                        <label>Description</label>
                        {{Form::textarea('description',$product->description,array('id' => 'description', 'rows'=> '3', 'placeholder' => 'Enter Description of Your Product', 'class' => 'form-control description'))}}
                    </div>
                    <div class="form-group input_fields_wrap_feature" id="#">
                        <label>Features & Specifications</label>

                        <!-- <input type="button" class="btn btn-secondary" value="+" onClick="addAdditionalInfo();" style="padding:0 10px;"> -->

                        @php($additional_informations = json_decode($product->additional_information))
                        @if(empty($additional_informations))
                            <div class="row">
                                <div class="col-md-5">
                                    <input type="text" name="adInfo_ids[]" class="form-control" autocomplete="on">
                                </div>
                                <div class="col-md-5">
                                    <input type="text" name="adInfo_values[]" class="form-control" autocomplete="on">
                                </div>
                                <div class="col-md-2">
                                    <button type="button" class="add_field_button_feature" style="margin-left:20px;">Add More Feature</button>
                                </div>
                            </div>
                        @else
                            <div class="row">
                                @foreach($additional_informations as $additional_information)
                                    @foreach($additional_information as $key=>$value)
                                        <div>
                                            <div class="col-md-5">
                                                <input type="text" value="{{$key}}" name="adInfo_ids[]" class="form-control" autocomplete="on">
                                            </div>
                                            <div class="col-md-5">
                                                <input type="text" value="{{$value}}" name="adInfo_values[]" class="form-control" autocomplete="on">
                                            </div>
                                            
                                        </div>
                                    @endforeach
                                @endforeach
                                <div class="col-md-2">
                                    <button type="button" class="add_field_button_feature" style="margin-left:20px;">Add More Feature</button>
                                </div>
                            </div>
                        @endif
                    </div>
                    <div class="form-group">
                        <label>Select Categories</label><br/>
                        @foreach($categories as $category)
                            @php($category = (object)$category)
                            <div class="form-check">
                                <label class="form-check-label" for="{{$category->id}}">
                                    {{ Form::checkbox('category_ids[]', $category->id, in_array($category->id,$product_category_ids)?'checked':'', array('id'=>$category->id)) }}
                                    {{$category->name}}
                                </label>
                                @if(isset($category->children))
                                    @foreach($category->children as $subcategory)
                                        @php($subcategory = (object)$subcategory)
                                        <div class="form-check" style="margin-left: 15px;">
                                            <label class="form-check-label" for="{{$subcategory->id}}">
                                                {{ Form::checkbox('category_ids[]', $subcategory->id, in_array($subcategory->id,$product_category_ids)?'checked':'', array('id'=>$subcategory->id)) }}
                                                {{$subcategory->name}}
                                            </label>
                                            @if(isset($subcategory->children))
                                                @foreach($subcategory->children as $subsubcategory)
                                                    @php($subsubcategory = (object)$subsubcategory)
                                                    <div class="form-check" style="margin-left: 15px;">
                                                        <label class="form-check-label" for="{{$subsubcategory->id}}">
                                                            {{ Form::checkbox('category_ids[]', $subsubcategory->id, in_array($subsubcategory->id,$product_category_ids)?'checked':'', array('id'=>$subsubcategory->id)) }}
                                                            {{$subsubcategory->name}}
                                                        </label>
                                                    </div>
                                                @endforeach
                                            @endif
                                        </div>
                                    @endforeach
                                @endif
                            </div>
                        @endforeach
                    </div>
                </div>
                <!-- /.box-body -->

                <div class="box-footer">
                    <button type="submit" class="btn btn-primary">Update Product</button>
                </div>
                {{Form::close()}}
            </div>
            <!-- /.box -->
        </div>
        <!--/.col (left) -->
    </div>
    <!-- /.row -->
</section>
<!-- /.content -->
@endsection
@section('scripts')
        <!-- jQuery Validation -->
<script src="{{asset('/')}}admin/dist/js/jquery.validate.min.js"></script>
<!-- Present Form Validation  -->
<script src="{{asset('/')}}admin/dist/js/implement.validate.js"></script>
<!-- Bootstrap WYSIHTML5 -->
<script src="{{asset('/')}}admin/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js"></script>
        <script>
            $(function () {
                //bootstrap WYSIHTML5 - text editor
                $('.description').wysihtml5();
            });
            function addAdditionalInfo(){
                var additional_info = "<div class=\"row\">\n" +
                    "                            <div class=\"col-md-5\">\n" +
                    "                                <input type=\"text\" name=\"adInfo_ids[]\" class=\"form-control\" autocomplete=\"on\">\n" +
                    "                            </div>\n" +
                    "                            <div class=\"col-md-5\">\n" +
                    "                                <input type=\"text\" name=\"adInfo_values[]\" class=\"form-control\" autocomplete=\"on\">\n" +
                    "                            </div>\n" +
                    "                        </div>";
                $('#additional_info').append(additional_info);
            }
            function addSpecification(){
                var new_specification = "<div class=\"row\">\n" +
                    "                            <div class=\"col-md-8\">\n" +
                    "                                <input type=\"text\" name=\"specifications[]\" class=\"form-control\" autocomplete=\"on\">\n" +
                    "                            </div>\n" +
                    "                        </div>";
                $('#specification').append(new_specification);
            }
        </script>

@endsection

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script type="text/javascript">
    $(document).ready(function() {
        var max_fields      = 15; //maximum input boxes allowed
        var wrapper         = $(".input_fields_wrap"); //Fields wrapper
        var add_button      = $(".add_field_button"); //Add button ID
        
        var x = 1; //initlal text box count
        $(add_button).click(function(e){ //on add input button click
            //alert("Hello");
            e.preventDefault();
            if(x < max_fields){ //max input box allowed
                x++; //text box increment
                $(wrapper).append('<div class"row"><div class="col-md-8"><input type="text" class="form-control" name="specifications[]"/><a href="#" class="remove_field"><i class="fa fa-times"></i></a></div></div>'); //add input box
            }
        });
        
        $(wrapper).on("click",".remove_field", function(e){ //user click on remove text
            e.preventDefault(); 
            $(this).parent('div').remove(); 
            x--;
        })
    });


    $(document).ready(function() {
        var max_fields              = 15; //maximum input boxes allowed
        var wrapper_feature         = $(".input_fields_wrap_feature"); //Fields wrapper
        var add_button_feature      = $(".add_field_button_feature"); //Add button ID
        
        var x = 1; //initlal text box count
        $(add_button_feature).click(function(e){ //on add input button click
            e.preventDefault();
            if(x < max_fields){ //max input box allowed
                x++; //text box increment
                $(wrapper_feature).append('<div class"row"><div><div class="col-md-5"><input type="text" class="form-control" name="adInfo_ids[]"/></div><div class="col-md-5"><input type="text" class="form-control" name="adInfo_values[]"/></div><a href="#" class="remove_field_feature"><i class="fa fa-times"></i></a></div></div><br>'); //add input box
            }
        });
        
        $(wrapper_feature).on("click",".remove_field_feature", function(e){ //user click on remove text
            e.preventDefault(); $(this).parent('div').remove(); x--;
        })
    });
</script>



