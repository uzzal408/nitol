@extends('admin.master')
@section('title')
    Nitol Admin || Reviews
@endsection
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
                    <h3 class="box-title">All Reviews</h3>

                    <div class="box-tools">
                        <div class="input-group input-group-sm" style="width: 150px;">
                            <input type="text" name="table_search" class="form-control pull-right" placeholder="Search">

                            <div class="input-group-btn">
                                <button type="submit" class="btn btn-default"><i class="fa fa-search"></i></button>
                            </div>
                        </div>
                    </div>
                </div>
                <a href="{{ route('admin.exports.review') }}" class="btn btn-primary">Export Review</a>
                <!-- /.box-header -->
                <div class="box-body table-responsive no-padding">
                    <table class="table table-hover">
                        @if($productReviews!=null)
                        <tr>
                            <th>ID</th>
                            <th>Product Name</th>
                            <th>Product Price</th>
                            <th>Product Review</th>
                            <th>Product Comment</th>
                            <th>Customer Name</th>
                            <th>Action</th>
                        </tr>
                        @foreach($productReviews as $review)
                            
                            <tr>
                                <td>{{$review->id}}</td>
                                <td>{{$review->products->title}}</td>
                                <td>{{$review->products->price}}</td>
                                <td>{{$review->product_review}}</td>
                                <td>{!!$review->product_comment!!}</td>
                                <td>{{$review->customer_name}}</td>
                                <td>
                                    <a class="btn btn-danger btn-xs" href="{{url('')}}/reviewDelete/{{$review->id}}" onclick="return confirm('Are You Sure ?')">
                                        <span class="glyphicon glyphicon-trash"></span>
                                    </a>
                                </td>
                            </tr>
                        @endforeach
                            @else
                            <h2>No Date is found</h2>
                            @endif
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