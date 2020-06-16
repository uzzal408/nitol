@extends('admin.master')
@section('title')
    Nitol Admin || Edit Category
@endsection
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
        <div class="col-md-12">
            <!-- general form elements -->
            <div class="box box-primary">
                <div class="box-header with-border">
                    <h3 class="box-title">Create New Category</h3>
                </div>
                <!-- /.box-header -->
                @include('admin.includes.common-error')
                        <!-- form start -->
                    <form role="form" method="post" id="updateCategoryForm" action="{{route('update-category')}}" enctype="multipart/form-data">
                        {{csrf_field()}}
                        <div class="box-body">
                            <div class="form-group">
                                <label for="name">Name</label>
                                <input type="text" class="form-control" id="name" placeholder="Enter Category Name" name="name" value="{{$category->name}}" readonly=true>
                                <span class="text-danger">{{$errors->has('name') ? $errors->first('name') : ''}}</span>
                                <input type="hidden" name="category_id" value="{{$category->id}}">
                            </div>
                            <!-- textarea -->
                            <div class="form-group">
                                <label>Description</label>
                                <textarea class="form-control" rows="3" placeholder="Enter ..." name="description">{{$category->description}}</textarea>
                            </div>

                            <div class="form-group">
                                <label>Store Locator</label>
                                <input type="text" class="form-control" rows="3" placeholder="Enter Google Map URL" name="storeLocator" value="{{$category->storeLocator}}">
                            </div>


                            <div class="form-group">
                                <label for="categoryImage">Image</label>
                                <input type="file" id="categoryImage" name="categoryImage">
                                <p class="help-block">Example block-level help text here.</p>
                                <span class="text-danger">{{$errors->has('categoryImage') ? $errors->first('categoryImage') : ''}}</span>
                                <img src="{{asset($category->image)}}" alt="Image"/>
                            </div>
                            <div class="form-group">
                                <label>Parent Category</label>
                                <select class="form-control" name="parentId">
                                    <option value="0">None</option>
                                    @foreach($categories as $a_category)
                                        <option value="{{$a_category->id}}">{{$a_category->name}}</option>
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
                            <div class="form-group">
                                <label for="inputPassword3" class="col-sm-3 control-label">Publication Status</label>
                                <div class="col-sm-9">
                                    <input type="radio" id="publication_status_published"  name="publicationStatus" value="1"> Published
                                    <input type="radio" id="publication_status_unpublished" name="publicationStatus" value="0"> Unpublished
                                </div>
                            </div>

                        </div>
                        <!-- /.box-body -->

                        <div class="box-footer">
                            <button type="submit" class="btn btn-primary">Update Category</button>
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
            var publication_status  = "{{$category->publication_status}}"
            if(publication_status == "1"){
                $('#publication_status_published').prop('checked', true);
            }else{
                $('#publication_status_unpublished').prop('checked', true);
            }
            //document.forms['updateCategoryForm'].elements['parentId'].value = '{{ $category->parent_id }}';
            document.forms['updateCategoryForm'].elements['parentId'].value = '{{ $category->parent_id }}';
        });
    </script>
@endsection