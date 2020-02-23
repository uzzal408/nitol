@extends('admin.master')
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
        <div class="col-md-12">
            <!-- general form elements -->
            <div class="box box-primary">
                <div class="box-header with-border">
                    <h3 class="box-title">Create New Ingredient</h3>
                </div>
                <!-- /.box-header -->
                @include('admin.includes.common-error')
                        <!-- form start -->
                    <form role="form" method="post" id="updateIngredientForm" action="{{route('update-ingredient')}}" enctype="multipart/form-data">
                        {{csrf_field()}}
                        <div class="box-body">
                            <div class="form-group">
                                <label for="name">Name</label>
                                <input type="text" class="form-control" id="name" placeholder="Enter Ingredient Name" name="name" value="{{$ingredient->name}}">
                                <span class="text-danger">{{$errors->has('name') ? $errors->first('name') : ''}}</span>
                                <input type="hidden" name="ingredient_id" value="{{$ingredient->id}}">
                            </div>
                            <div class="form-group">
                                <label>Price</label>
                                {{Form::number('price',$ingredient->price,array('id' => 'price', 'class' => 'form-control ', 'min'=>1, 'max'=>10000))}}
                            </div>
                            <!-- textarea -->
                            <div class="form-group">
                                <label>Description</label>
                                <textarea class="form-control" rows="3" placeholder="Enter ..." name="description">{{$ingredient->description}}</textarea>
                            </div>
                            <div class="form-group">
                                <label for="ingredientImage">Image</label>
                                <input type="file" id="ingredientImage" name="ingredientImage">
                                <p class="help-block">Example block-level help text here.</p>
                                <span class="text-danger">{{$errors->has('ingredientImage') ? $errors->first('ingredientImage') : ''}}</span>
                                <img src="{{asset($ingredient->image)}}" alt="Image"/>
                            </div>

                        </div>
                        <!-- /.box-body -->

                        <div class="box-footer">
                            <button type="submit" class="btn btn-primary">Update Ingredient</button>
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
            var publication_status  = "{{$ingredient->publication_status}}"
            if(publication_status == "1"){
                $('#publication_status_published').prop('checked', true);
            }else{
                $('#publication_status_unpublished').prop('checked', true);
            }
            document.forms['updateIngredientForm'].elements['parentId'].value = '{{ $ingredient->parent_id }}';
            document.forms['updateIngredientForm'].elements['parentId'].value = '{{ $ingredient->parent_id }}';
        });
    </script>
@endsection