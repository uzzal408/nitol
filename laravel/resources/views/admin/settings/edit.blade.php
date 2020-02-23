@extends('admin.master')
@section('body')
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
           {{ $data->name }}
            <small>Preview</small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li><a href="#">Settings</a></li>
            <li class="active">{{ $data->name }}</li>
        </ol>
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="row">
            <!-- left column -->
            <div class="col-md-12">
                <!-- general form elements -->
                <div class="box box-primary">
{{--                    <div class="box-header with-border">--}}
{{--                        <h3 class="box-title">Create New Addon</h3>--}}
{{--                    </div>--}}
                    <!-- /.box-header -->
                @include('admin.includes.common-error')
                <!-- form start -->
                    <form role="form" method="post" id="settingsForm" action="{{route('admin.settings.upload')}}" enctype="multipart/form-data">
                        {{csrf_field()}}
                        <div class="box-body">
                            <div class="form-group">
                                <label for="name">Name</label>
                                <input type="text" class="form-control" id="name"  name="name" value="{{$data->name}}" readonly>
                                <span class="text-danger">{{$errors->has('name') ? $errors->first('name') : ''}}</span>
                                <input type="hidden" name="id" value="{{$data->id}}">
                            </div>
                            <input type="hidden" name="type" value="{{ $data->type }}">
                            @if($data->type==1)
                                <div class="form-group">
                                    <label>Value</label>
                                    <input type="text" class="form-control" name="value" value="{{ $data->value }}">
                                </div>
                                @endif
                            @if($data->type == 2)
                            <!-- textarea -->
                            <div class="form-group">
                                <label>Value</label>
                                <textarea class="form-control" rows="3" placeholder="Enter ..." name="value">{{$data->value}}</textarea>
                            </div>
                            @endif
                            @if($data->type==3)
                            <div class="form-group">
                                <label for="value">Image</label>
                                <input type="file" id="value" name="value">
                                <p class="help-block">Example block-level help text here.</p>
                                <span class="text-danger">{{$errors->has('value') ? $errors->first('value') : ''}}</span>
{{--                                <img src="" alt="Image"/>--}}
                                <iframe src="{{asset($data->value)}}"></iframe>
                            </div>
                                @endif
                        </div>
                        <!-- /.box-body -->

                        <div class="box-footer">
                            <button type="submit" class="btn btn-primary">Update</button>
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