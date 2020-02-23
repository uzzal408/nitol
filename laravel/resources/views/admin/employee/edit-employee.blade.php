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
        <div class="col-md-12">
            <!-- general form elements -->
            <div class="box box-primary">
                <div class="box-header with-border">
                    <h3 class="box-title">Create New Employee</h3>
                </div>
                <!-- /.box-header -->
                @include('admin.includes.common-error')
                        <!-- form start -->
                    <form role="form" method="post" id="updateEmployeeForm" action="{{route('update-employee')}}" enctype="multipart/form-data">
                        {{csrf_field()}}
                        <div class="box-body">
                            <div class="form-group">
                                <label for="name">Name</label>
                                <input type="text" class="form-control" id="name" placeholder="Enter Employee Name" name="name" value="{{$employee->name}}">
                                <span class="text-danger">{{$errors->has('name') ? $errors->first('name') : ''}}</span>
                                <input type="hidden" name="user_id" value="{{$employee->id}}">
                            </div>
                            <div class="form-group">
                                <label for="name">E-mail</label>
                                <input type="text" class="form-control" id="email" placeholder="Enter Employee E-mail" name="email" value="{{$employee->email}}">
                                <span class="text-danger">{{$errors->has('email') ? $errors->first('email') : ''}}</span>
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
                            <button type="submit" class="btn btn-primary">Update Employee</button>
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

<script !src="">
        $(document).ready(function () {
            document.forms['updateEmployeeForm'].elements['storeId'].value = '{{ $store_id }}';
        });
    </script>
@endsection