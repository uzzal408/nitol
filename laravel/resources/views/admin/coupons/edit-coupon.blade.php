@extends('admin.master')
@section('title')
    Nitol Admin || Edit Coupon
@endsection
@section('body')
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            All Coupon
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
                        <h3 class="box-title">Edit Coupon</h3>
                    </div>
                    <!-- /.box-header -->
                @include('admin.includes.common-error')
                <!-- form start -->
                    <form role="form" method="post" id="updateAddonForm" action="{{route('admin.coupons.update')}}" enctype="multipart/form-data">
                        @csrf
                        <div class="box-body">
                            <div class="form-group">
                                <label for="coupon_code">Coupon Code</label>
                                <input type="text" class="form-control" id="coupon_code"  name="coupon_code" value="{{$coupon->coupon_code}}" readonly>
                                <span class="text-danger">{{$errors->has('coupon_code') ? $errors->first('coupon_code') : ''}}</span>
                                <input type="hidden" name="id" value="{{$coupon->id}}">
                            </div>
                            <div class="form-group">
                                <label for="discount">Discount</label>
                                <input type="text" class="form-control" id="discount"  name="discount" value="{{$coupon->discount}}">
                                <span class="text-danger">{{$errors->has('discount') ? $errors->first('discount') : ''}}</span>
                                <input type="hidden" name="id" value="{{$coupon->id}}">
                            </div>
                            <div class="form-group">
                                <label for="type">Type</label>
                                <select name="type" id="type" class="form-control">
                                    <option value="1" {{ ($coupon->type) ? 'selected': '' }} >Percentage</option>
                                    <option value="0" {{ (!$coupon->type) ? 'selected': '' }} >Fixed</option>
                                </select>
                                <span class="text-danger">{{$errors->has('type') ? $errors->first('type') : ''}}</span>
                                <input type="hidden" name="id" value="{{$coupon->id}}">
                            </div>
                            <div class="form-group">
                                <label for="status">Status</label>
                                <select name="status" id="status" class="form-control">
                                    <option value="1" {{ ($coupon->status) ? 'selected': '' }} >Active</option>
                                    <option value="0" {{ (!$coupon->status) ? 'selected': '' }} >Inactive</option>
                                </select>
                                <span class="text-danger">{{$errors->has('status') ? $errors->first('status') : ''}}</span>
                                <input type="hidden" name="id" value="{{$coupon->id}}">
                            </div>
                        </div>
                        <!-- /.box-body -->

                        <div class="box-footer">
                            <button type="submit" class="btn btn-primary">Update Coupon</button>
                        </div>
                    </form>
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

@endsection