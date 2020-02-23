@extends('admin.master')
        @section('body')
<!-- Content Header (Page header) -->
<section class="content-header">
    <h1>
        All Addons
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
                    <h3 class="box-title">Create New Addon</h3>
                </div>
                <!-- /.box-header -->
                {{--@if(Session::get('message'))--}}
                    {{--<div class="alert alert-success" role="alert">--}}
                        {{--{{Session::get('message')}}--}}
                    {{--</div>--}}
                    {{--@endif--}}
                @include('admin.includes.common-error')
                            <!-- form start -->
                    {{Form::open(['route'=>'save-addon','class'=>'contact-form','method'=>'POST','name'=>'newAddon','files' => true])}}

                    {{--<form role="form" method="post" action="{{route('new-addon')}}" enctype="multipart/form-data">--}}
{{--                    {{csrf_field()}}--}}
{{--                    {{print_r($errors)}}--}}
                    <div class="box-body">
                        <div class="{{'form-group required'.$errors->first('name',' has-error')}}">
                            <label for="name">Name</label>
                            {{Form::text('name','',array('id' => 'name', 'required' => 'required', 'placeholder' => 'Enter Addon Name', 'class' => 'form-control '))}}
                            <div class="help-block">{{$errors->has('name') ? $errors->first('name') : ''}}</div>
                            {{--<input type="text" class="form-control" id="name" placeholder="Enter Addon Name" name="name">--}}
                            {{--<span class="text-danger">{{$errors->has('name') ? $errors->first('name') : ''}}</span>--}}
                        </div>
                        <!-- textarea -->
                        <div class="form-group">
                            <label>Description</label>
                            <textarea class="form-control" rows="3" placeholder="Enter ..." name="description"></textarea>
                        </div>
                        <div class="form-group">
                            <label>Price | Medium</label>
                            {{Form::number('price_medium',null,array('id' => 'price_personal', 'class' => 'form-control ', 'min'=>1, 'max'=>10000))}}
                        </div>
                        <div class="form-group">
                            <label>Price | Personal</label>
                            {{Form::number('price_personal',null,array('id' => 'price_personal', 'class' => 'form-control ', 'min'=>1, 'max'=>10000))}}
                        </div>
                        <div class="form-group">
                            <label>Price | Family</label>
                            {{Form::number('price_family',null,array('id' => 'price_family', 'class' => 'form-control ', 'min'=>1, 'max'=>10000))}}
                        </div>
                        <div class="{{'form-group required'.$errors->first('addonImage',' has-error')}}">
                            <label for="addonImage">Image</label>
                            {{Form::file('addonImage', array('id' => 'addonImage', 'accept'=>"image/*", 'class' => 'form-control '.$errors->first('addonImage','is-invalid')))}}
                            <small>
                                <b>Type:</b> jpeg | png | jpg | gif | svg <b>Maximum Size:</b> 2 MB
                            </small>
                            <div class="help-block">{{$errors->has('addonImage') ? $errors->first('addonImage') : ''}}</div>

                            {{--<input type="file" id="addonImage" name="addonImage">--}}
                            {{--<span class="text-danger">{{$errors->has('addonImage') ? $errors->first('addonImage') : ''}}</span>--}}
                        </div>
                    </div>
                    <!-- /.box-body -->

                    <div class="box-footer">
                        <button type="submit" class="btn btn-primary">Create Addon</button>
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
                    <h3 class="box-title">All Addons</h3>

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
                        @foreach($addons as $addon)
                            <tr>
                                <td><img src="{{$addon->image}}" alt="{{$addon->name}}" height="48" width="48"></td>
                                <td>{{$addon->name}}</td>
                                <td>
                                    @if($addon->is_deleted == false)
                                        <span class="label label-success"><span class="glyphicon glyphicon-ok"></span></span></td>
                                    @else
                                    <span class="label label-danger"><span class="glyphicon glyphicon-remove"></span></span></td>


                                    @endif

                                <td>{{$addon->description}}</td>
                                <td>
                                    <a href="{{route('edit-addon',['id'=>$addon->id])}}" class="btn btn-info btn-xs"><span class="glyphicon glyphicon-edit"></span></a>
                                    {{--@php(if($addon->is_deleted){$activation = 1})--}}
                                    @if($addon->is_deleted == false)
                                        <a class="btn btn-danger btn-xs" href="{{route('delete-addon',[$addon->id,'1'])}}"><span class="glyphicon glyphicon-trash"></span></a>
                                    @else
                                        <a class="btn btn-success btn-xs" href="{{route('delete-addon',[$addon->id,'0'])}}"><span class="glyphicon glyphicon-saved"></span></a>
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