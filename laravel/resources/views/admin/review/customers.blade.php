@extends('admin.master')
        @section('body')
<!-- Content Header (Page header) -->
<section class="content-header">
    <h1>
        Customers Information
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
                <a class="btn btn-primary" href="{{ route('admin.exports.customer-information') }}">Export Excel</a>
                <!-- /.box-header -->
                <div class="box-body table-responsive no-padding">
                    <table class="table table-hover">
                        <tr>
                            <th>ID</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Phone Number</th>
                            <th>Comment</th>
                            <th>Action</th>
                        </tr>
                        @foreach($customers as $customer)
                            
                            <tr>
                                <td>{{ $customer->id }}</td>
                                <td>{{ $customer->name }}</td>
                                <td>{{ $customer->email_address }}</td>
                                <td>{{ $customer->phone_number }}</td>
                                <td>{!! $customer->comment !!}</td>
                                <td>
                                    <a class="btn btn-danger btn-xs" href="{{url('')}}/customerDelete/{{$customer->id}}" onclick="return confirm('Are You Sure ?')">
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