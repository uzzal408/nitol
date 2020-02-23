@extends('admin.master')
        @section('body')
<!-- Content Header (Page header) -->
<section class="content-header">
    <h1>
        All Categories
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
        <div class="col-md-6">
            <!-- general form elements -->
            <div class="box box-primary">
                <div class="box-header with-border">
                    <h3 class="box-title">Create New Category</h3>
                </div>
                <!-- /.box-header -->
                {{--@if(Session::get('message'))--}}
                    {{--<div class="alert alert-success" role="alert">--}}
                        {{--{{Session::get('message')}}--}}
                    {{--</div>--}}
                    {{--@endif--}}
                @include('admin.includes.common-error')
                            <!-- form start -->
                    {{Form::open(['route'=>'save-category','class'=>'contact-form','method'=>'POST','name'=>'newCategory','files' => true])}}

                    {{--<form role="form" method="post" action="{{route('new-category')}}" enctype="multipart/form-data">--}}
{{--                    {{csrf_field()}}--}}
{{--                    {{print_r($errors)}}--}}
                    <div class="box-body">
                        <div class="{{'form-group required'.$errors->first('name',' has-error')}}">
                            <label for="name">Name</label>
                            {{Form::text('name','',array('id' => 'name', 'required' => 'required', 'placeholder' => 'Enter Category Name', 'class' => 'form-control '))}}
                            <div class="help-block">{{$errors->has('name') ? $errors->first('name') : ''}}</div>
                            {{--<input type="text" class="form-control" id="name" placeholder="Enter Category Name" name="name">--}}
                            {{--<span class="text-danger">{{$errors->has('name') ? $errors->first('name') : ''}}</span>--}}
                        </div>
                        <!-- textarea -->
                        <div class="form-group">
                            <label>Description</label>
                            <textarea class="form-control" rows="3" placeholder="Enter ..." name="description"></textarea>
                        </div>

                        
                        <div class="form-group">
                            <label>Store Locator</label>
                            <input type="text" class="form-control" rows="3" placeholder="Enter Google Map URL" name="storeLocator">
                        </div>


                        <div class="{{'form-group required'.$errors->first('categoryImage',' has-error')}}">
                            <label for="categoryImage">Image</label>
                            {{Form::file('categoryImage', array('id' => 'categoryImage', 'accept'=>"image/*", 'class' => 'form-control '.$errors->first('categoryImage','is-invalid')))}}
                            <small>
                                <b>Type:</b> jpeg | png | jpg | gif | svg <b>Maximum Size:</b> 2 MB
                            </small>
                            <div class="help-block">{{$errors->has('categoryImage') ? $errors->first('categoryImage') : ''}}</div>

                            {{--<input type="file" id="categoryImage" name="categoryImage">--}}
                            {{--<span class="text-danger">{{$errors->has('categoryImage') ? $errors->first('categoryImage') : ''}}</span>--}}
                        </div>
                        <div class="form-group">
                            <label>Parent Category</label>
                            <select class="form-control" name="parentId">
                                <option value="0">None</option>
                                @foreach($categories as $category)
                                    <option value="{{$category->id}}">{{$category->name}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label>Order</label>
                            <select class="form-control" name="order">
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                                <option value="5">5</option>
                            </select>
                        </div>
                    </div>
                    <!-- /.box-body -->

                    <div class="box-footer">
                        <button type="submit" class="btn btn-primary">Create Category</button>
                    </div>
                    {{Form::close()}}
            </div>
            <!-- /.box -->
        </div>
        <!--/.col (left) -->
        <!-- right column -->
        <div class="col-md-6">
            <div class="box">
                <div class="box-header">
                    <h3 class="box-title">All Categories</h3>

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
                            <th>Image</th>
                            <th>Name</th>
                            <th>Active</th>
                            <th>Desription</th>
                            <th>Action</th>
                        </tr>
                        @foreach($categories as $category)
                            <tr>
                                <td>
                                    @if($category->image)
                                        <img src="{{$category->image}}" alt="{{$category->name}}" height="48" width="48">
                                    @endif
                                </td>
                                <td>{{$category->name}}</td>
                                <td>
                                    @if($category->publication_status == 1)
                                        <span class="label label-success"><span class="glyphicon glyphicon-ok"></span></span></td>
                                    @else
                                    <span class="label label-danger"><span class="glyphicon glyphicon-remove"></span></span></td>


                                    @endif

                                <td>{{$category->description}}</td>
                                <td>
                                    <a href="{{route('edit-category',['id'=>$category->id])}}" class="btn btn-info btn-xs"><span class="glyphicon glyphicon-edit"></span></a>
                                    <a
                                    class="btn btn-danger btn-xs"
                                    href="{{route('delete-category',[$category->id])}}"
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
        <!-- jQuery Validation -->
        <script src="{{asset('/')}}admin/dist/js/jquery.validate.min.js"></script>
        <!-- Present Form Validation  -->
        <script src="{{asset('/')}}admin/dist/js/implement.validate.js"></script>

<script !src="">
        $(document).ready(function () {


        });
    </script>
@endsection