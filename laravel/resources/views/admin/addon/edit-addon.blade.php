@extends('admin.master')
@section('title')
    Nitol Admin || Edit Addon
@endsection
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
        <div class="col-md-12">
            <!-- general form elements -->
            <div class="box box-primary">
                <div class="box-header with-border">
                    <h3 class="box-title">Create New Addon</h3>
                </div>
                <!-- /.box-header -->
                @include('admin.includes.common-error')
                        <!-- form start -->
                    <form role="form" method="post" id="updateAddonForm" action="{{route('update-addon')}}" enctype="multipart/form-data">
                        {{csrf_field()}}
                        <div class="box-body">
                            <div class="form-group">
                                <label for="name">Name</label>
                                <input type="text" class="form-control" id="name" placeholder="Enter Addon Name" name="name" value="{{$addon->name}}">
                                <span class="text-danger">{{$errors->has('name') ? $errors->first('name') : ''}}</span>
                                <input type="hidden" name="addon_id" value="{{$addon->id}}">
                            </div>
                            <div class="form-group">
                                <label>Price | Medium</label>
                                {{Form::number('price_medium',$addon->price_medium,array('id' => 'price_personal', 'class' => 'form-control ', 'min'=>1, 'max'=>10000))}}
                            </div>
                            <div class="form-group">
                                <label>Price | Personal</label>
                                {{Form::number('price_personal',$addon->price_personal,array('id' => 'price_personal', 'class' => 'form-control ', 'min'=>1, 'max'=>10000))}}
                            </div>
                            <div class="form-group">
                                <label>Price | Family</label>
                                {{Form::number('price_family',$addon->price_family,array('id' => 'price_family', 'class' => 'form-control ', 'min'=>1, 'max'=>10000))}}
                            </div>
                            <!-- textarea -->
                            <div class="form-group">
                                <label>Description</label>
                                <textarea class="form-control" rows="3" placeholder="Enter ..." name="description">{{$addon->description}}</textarea>
                            </div>
                            <div class="form-group">
                                <label for="addonImage">Image</label>
                                <input type="file" id="addonImage" name="addonImage">
                                <p class="help-block">Example block-level help text here.</p>
                                <span class="text-danger">{{$errors->has('addonImage') ? $errors->first('addonImage') : ''}}</span>
                                <img src="{{asset($addon->image)}}" alt="Image"/>
                            </div>
                        </div>
                        <!-- /.box-body -->

                        <div class="box-footer">
                            <button type="submit" class="btn btn-primary">Update Addon</button>
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
            var publication_status  = "{{$addon->publication_status}}"
            if(publication_status == "1"){
                $('#publication_status_published').prop('checked', true);
            }else{
                $('#publication_status_unpublished').prop('checked', true);
            }
            document.forms['updateAddonForm'].elements['parentId'].value = '{{ $addon->parent_id }}';
            document.forms['updateAddonForm'].elements['parentId'].value = '{{ $addon->parent_id }}';
        });
    </script>
@endsection