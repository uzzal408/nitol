@extends('admin.master')
@section('title')
    Nitol Admin || Ingredient
@endsection
        @section('body')
<!-- Content Header (Page header) -->
<section class="content-header">
    <h1>
        All Ingredients
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
                    <h3 class="box-title">Create New Ingredient</h3>
                </div>
                <!-- /.box-header -->
                {{--@if(Session::get('message'))--}}
                    {{--<div class="alert alert-success" role="alert">--}}
                        {{--{{Session::get('message')}}--}}
                    {{--</div>--}}
                    {{--@endif--}}
                @include('admin.includes.common-error')
                            <!-- form start -->
                    {{Form::open(['route'=>'save-ingredient','class'=>'contact-form','method'=>'POST','name'=>'newIngredient','files' => true])}}

                    {{--<form role="form" method="post" action="{{route('new-ingredient')}}" enctype="multipart/form-data">--}}
{{--                    {{csrf_field()}}--}}
{{--                    {{print_r($errors)}}--}}
                    <div class="box-body">
                        <div class="{{'form-group required'.$errors->first('name',' has-error')}}">
                            <label for="name">Name</label>
                            {{Form::text('name','',array('id' => 'name', 'required' => 'required', 'placeholder' => 'Enter Ingredient Name', 'class' => 'form-control '))}}
                            <div class="help-block">{{$errors->has('name') ? $errors->first('name') : ''}}</div>
                        </div>
                        <div class="form-group">
                            <label>Price</label>
                            {{Form::number('price',null,array('id' => 'price', 'class' => 'form-control ', 'min'=>1, 'max'=>10000))}}
                        </div>
                        <div class="form-group">
                            <label>Description</label>
                            <textarea class="form-control" rows="3" placeholder="Enter ..." name="description"></textarea>
                        </div>
                        <div class="{{'form-group required'.$errors->first('ingredientImage',' has-error')}}">
                            <label for="ingredientImage">Image</label>
                            {{Form::file('ingredientImage', array('id' => 'ingredientImage', 'accept'=>"image/*", 'class' => 'form-control '.$errors->first('ingredientImage','is-invalid')))}}
                            <small>
                                <b>Type:</b> jpeg | png | jpg | gif | svg <b>Maximum Size:</b> 2 MB
                            </small>
                            <div class="help-block">{{$errors->has('ingredientImage') ? $errors->first('ingredientImage') : ''}}</div>

                        </div>
                    </div>
                    <!-- /.box-body -->

                    <div class="box-footer">
                        <button type="submit" class="btn btn-primary">Create Ingredient</button>
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
                    <h3 class="box-title">All Ingredients</h3>

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
                        @foreach($ingredients as $ingredient)
                            <tr>
                                <td><img src="{{$ingredient->image}}" alt="{{$ingredient->name}}" height="48" width="48"></td>
                                <td>{{$ingredient->name}}</td>
                                <td>
                                    @if($ingredient->is_deleted == false)
                                        <span class="label label-success"><span class="glyphicon glyphicon-ok"></span></span></td>
                                    @else
                                    <span class="label label-danger"><span class="glyphicon glyphicon-remove"></span></span></td>


                                    @endif

                                <td>{{$ingredient->description}}</td>
                                <td>
                                    <a href="{{route('edit-ingredient',['id'=>$ingredient->id])}}" class="btn btn-info btn-xs"><span class="glyphicon glyphicon-edit"></span></a>
                                    @if($ingredient->is_deleted == false)
                                        <a class="btn btn-danger btn-xs" href="{{route('delete-ingredient',[$ingredient->id,'1'])}}"><span class="glyphicon glyphicon-trash"></span></a>
                                    @else
                                        <a class="btn btn-success btn-xs" href="{{route('delete-ingredient',[$ingredient->id,'0'])}}"><span class="glyphicon glyphicon-saved"></span></a>
                                    @endif

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