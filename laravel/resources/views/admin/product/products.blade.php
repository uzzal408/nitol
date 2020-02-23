@extends('admin.master')
        @section('body')
<!-- Content Header (Page header) -->
<section class="content-header">
    <h1>
        All Products
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
        <!-- right column -->
        <div class="col-md-12">
            <div class="box">
                <div class="box-header">
                    <h3 class="box-title">All Products</h3>

                    <div class="box-tools">
                        <div class="input-group input-group-sm" style="width: 150px;">
                            <input type="text" name="table_search" class="form-control pull-right" placeholder="Search">

                            <div class="input-group-btn">
                                <button type="submit" class="btn btn-default"><i class="fa fa-search"></i></button>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /.box-header -->
                <div class="box-body table-responsive no-padding">
                    <table class="table table-hover">
                        <tr>
                            <th>Image1</th>
                            <th>Image2</th>
                            <th>Image3</th>
                            <th>Image4</th>
                            <th>Name</th>
                            <th>AC Capacity</th>
                            <th>Screen Size</th>
                            <th>Refrezarator Capacity</th>
                            <th>Price</th>
                            <th>Sale Price</th>
                            <th>Discount</th>
                            <th>Quantity</th>
                            <th>Description</th>
                            <th>Categories</th>
                            <th>Specification</th>
                            <th>Action</th>
                        </tr>
                        @foreach($products as $product)
                            @php($specifications = explode(',', $product->specification))
                            <tr>
                                <td><img src="{{$product->image1}}" alt="{{$product->name1}}" height="48" width="48"></td>
                                <td><img src="{{$product->image2}}" alt="{{$product->name2}}" height="48" width="48"></td>
                                <td><img src="{{$product->image3}}" alt="{{$product->name3}}" height="48" width="48"></td>
                                <td><img src="{{$product->image4}}" alt="{{$product->name4}}" height="48" width="48"></td>
                                <td>{{$product->title}}</td>
                                <td>{{$product->ac_capacity}}</td>
                                <td>{{$product->screen_size}}</td>
                                <td>{{$product->capacity_litre}}</td>
                                <td>{{$product->price}}</td>
                                <td>{{$product->sale_price}}</td>
                                <td>{{$product->discount}}</td>
                                <td>{{$product->quantity}}</td>
                                <td>{!!$product->description!!}</td>
                                <td>
                                    <ul>
                                        @foreach($product->categories as $category)
                                            <li>{{$category->name}}</li>
                                        @endforeach
                                    </ul>
                                </td>
                                <td>
                                    <ul>
                                        @foreach($specifications as $category)
                                            <li>{{$category}}</li>
                                        @endforeach
                                    </ul>
                                </td>
                                <td>
                                    <ul>
                                        @foreach($product->ingredients as $category)
                                            <li>{{$category->name}}</li>
                                        @endforeach
                                    </ul>
                                </td>
                                <td>
                                    <a href="{{route('edit-product',['id'=>$product->id])}}" class="btn btn-info btn-xs"><span class="glyphicon glyphicon-edit"></span></a>
                                    <a
                                    class="btn btn-danger btn-xs"
                                    href="{{route('delete-product',[$product->id])}}"
                                    onclick="return confirm('Are You Sure ?')">
                                    <span class="glyphicon glyphicon-trash"></span>
                                    </a>
                                </td>
                            </tr>
                        @endforeach
                    </table>
                </div>
                <!-- /.box-body -->
            </div>
            <!-- /.box -->
        </div>
        <!--/.col (right) -->
    </div>
    <!-- /.row -->
</section>
<!-- /.content -->
@endsection
@section('scripts')
    <script !src="">
        $(document).ready(function () {

        });
    </script>
@endsection