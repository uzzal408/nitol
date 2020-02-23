@extends('admin.master')
        @section('body')
<!-- Content Header (Page header) -->
<section class="content-header">
    <h1>
        All Employees
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
                    <h3 class="box-title">Create New Employee</h3>
                </div>
                <!-- /.box-header -->
                {{--@if(Session::get('message'))--}}
                    {{--<div class="alert alert-success" role="alert">--}}
                        {{--{{Session::get('message')}}--}}
                    {{--</div>--}}
                    {{--@endif--}}
                @include('admin.includes.common-error')
                            <!-- form start -->
                    {{Form::open(['route'=>'save-employee','class'=>'contact-form','method'=>'POST','name'=>'newEmployee','files' => true])}}

                    {{--<form role="form" method="post" action="{{route('new-employee')}}" enctype="multipart/form-data">--}}
{{--                    {{csrf_field()}}--}}
{{--                    {{print_r($errors)}}--}}
                    <div class="box-body">
                        <div class="{{'form-group required'.$errors->first('name',' has-error')}}">
                            <label for="name">Name</label>
                            {{Form::text('name','',array('id' => 'name', 'required' => 'required', 'placeholder' => 'Enter Employee Name', 'class' => 'form-control '))}}
                            <div class="help-block">{{$errors->has('name') ? $errors->first('name') : ''}}</div>
                            {{--<input type="text" class="form-control" id="name" placeholder="Enter Employee Name" name="name">--}}
                            {{--<span class="text-danger">{{$errors->has('name') ? $errors->first('name') : ''}}</span>--}}
                        </div>
                        <div class="{{'form-group required'.$errors->first('email',' has-error')}}">
                            <label for="email">E-Mail</label>
                            {{Form::text('email','',array('id' => 'email', 'required' => 'required', 'placeholder' => 'Enter Employee email', 'class' => 'form-control '))}}
                            <div class="help-block">{{$errors->has('email') ? $errors->first('email') : ''}}</div>
                            {{--<input type="text" class="form-control" id="name" placeholder="Enter Employee Name" name="name">--}}
                            {{--<span class="text-danger">{{$errors->has('name') ? $errors->first('name') : ''}}</span>--}}
                        </div>
                        <div class="{{'form-group required'.$errors->first('password',' has-error')}}">
                            <label for="password">password</label>
                            {{Form::password('password',array('id' => 'password', 'required' => 'required', 'class' => 'form-control '))}}
                            <div class="help-block">{{$errors->has('password') ? $errors->first('password') : ''}}</div>
                            {{--<input type="text" class="form-control" id="name" placeholder="Enter Employee Name" name="name">--}}
                            {{--<span class="text-danger">{{$errors->has('name') ? $errors->first('name') : ''}}</span>--}}
                        </div>
                        <div class="{{'form-group required'.$errors->first('password_confirmation',' has-error')}}">
                            <label for="password_confirmation">{{ __('Confirm Password') }}</label>
                            {{Form::password('password_confirmation',array('id' => 'password_confirmation', 'required' => 'required', 'class' => 'form-control '))}}
                            <div class="help-block">{{$errors->has('password_confirmation') ? $errors->first('password_confirmation') : ''}}</div>
                            {{--<input type="text" class="form-control" id="name" placeholder="Enter Employee Name" name="name">--}}
                            {{--<span class="text-danger">{{$errors->has('name') ? $errors->first('name') : ''}}</span>--}}
                        </div>
                        <div class="form-group">
                            <label>Select Store</label>
                            <select class="form-control" name="storeId">
                                <option value="">All</option>
                                @foreach($stores as $store)
                                    <option value="{{$store->id}}">{{$store->name}}</option>
                                @endforeach
                            </select>
                        </div>

                    </div>
                    <!-- /.box-body -->

                    <div class="box-footer">
                        <button type="submit" class="btn btn-primary">Create Employee</button>
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
                    <h3 class="box-title">All Employees</h3>

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
                            <th>Name</th>
                            <th>Email</th>
                            <th>Store</th>
                            <th>Action</th>
                        </tr>
                        @foreach($employees as $employee)
                            <tr>
                                <td>{{$employee->name}}</td>
                                <td>{{$employee->email}}</td>
                                @if($employee->store->isEmpty())
                                    <td>All</td>
                                @else
                                    <td>{{$employee->store->first()->name}}</td>
                                @endif
                                <td>
                                    <a href="{{route('edit-employee',['id'=>$employee->id])}}" class="btn btn-info btn-xs"><span class="glyphicon glyphicon-edit"></span></a>
                                    {{--<a--}}
                                    {{--class="btn btn-danger btn-xs"--}}
                                    {{--href="{{route('delete-employee',[$employee->id])}}"--}}
                                    {{--onclick="return confirm('Are You Sure ?')">--}}
                                    {{--<span class="glyphicon glyphicon-trash"></span>--}}
                                    {{--</a>--}}
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