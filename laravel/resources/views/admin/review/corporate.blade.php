@extends('admin.master')
@section('title')
    Nitol Admin || Corporates
@endsection
        @section('body')
<!-- Content Header (Page header) -->
<section class="content-header">
    <h1>
        Corporate Sales Information
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
                <!-- /.box-header -->
                <div class="box-body table-responsive no-padding">
                    <a href="{{ route('admin.exports.corporate-sale') }}" class="btn btn-primary">Export Excel</a>
                    <table class="table table-hover">
                        <tr>
                            <th>ID</th>
                            <th>Full Name</th>
                            <th>Company Name</th>
                            <th>Contact Number</th>
                            <th>Email Address</th>
                            <th>Address</th>
                            <th>City</th>
                            <th>Country</th>
                            <th>Enquiry Type</th>
                            <th>Category</th>
                            <th>Enquiry</th>
                            <th>Action</th>
                        </tr>
                        @foreach($corporateSales as $corporateSale)
                            
                            <tr>
                                <td>{{ $corporateSale->id }}</td>
                                <td>{{ $corporateSale->full_name }}</td>
                                <td>{{ $corporateSale->company_name }}</td>
                                <td>{{ $corporateSale->contact_number }}</td>
                                <td>{{ $corporateSale->email_address }}</td>
                                <td>{{ $corporateSale->address }}</td>
                                <td>{{ $corporateSale->city }}</td>
                                <td>{{ $corporateSale->country }}</td>
                                <td>{{ $corporateSale->enquiry_type }}</td>
                                <td>{{ $corporateSale->category }}</td>
                                <td>{!! $corporateSale->enquiry !!}</td>
                                <td>
                                    <a class="btn btn-danger btn-xs" href="{{url('')}}/corporateSalesDelete/{{$corporateSale->id}}" onclick="return confirm('Are You Sure ?')">
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