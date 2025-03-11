@extends('backend.layouts.app')

@section('style')
    <link href="{{ url('public/assets/plugins/summernote/summernote-lite.min.css') }}" rel="stylesheet">
@endsection



@section('content')
<div class="content-wrapper">
    <div class="container">
        <div class="row">
            <div class="col">
                <div class="page-description">
                    <h1>Add New Product</h1>
                </div>
            </div>
        </div>

        <div class="card">
            <div class="card-body">
                <div class="example-container">
                    <div class="example-content">
                        @if(!empty(session('error')))
                            <div class="alert alert-danger">{{ session('error') }}</div>
                        @endif
                        <form action="" method="post" enctype="multipart/form-data">
                            {{ csrf_field() }}
                            <input type="text" value="{{ old('name') }}" name="name" class="form-control form-control-rounded m-b-sm" placeholder="Enter Name">
                            <div style="color: red;">{{ $errors->first('name') }}</div>
                            <input type="text" value="{{ old('slug') }}" name="slug" class="form-control form-control-rounded m-b-sm" placeholder="Enter Slug">
                            <div style="color: red;">{{ $errors->first('slug') }}</div>
                            <label>Category</label>
                            <select name="category_id" id="changeCategory" class="form-select form-control form-control-rounded m-b-sm">
                                <option>Select Category</option>
                                @foreach ($getCategory as $item)
                                    <option value="{{ $item->id }}">{{ $item->name }}</option>
                                @endforeach
                            </select>
                            <div style="color: red;">{{ $errors->first('category_id') }}</div>
                            <label>Sub Category</label>
                            <select name="sub_category_id" id="getSubCategory" class="form-select form-control form-control-rounded m-b-sm">
                                    <option value="">Select</option>
                            </select>
                            <div style="color: red;">{{ $errors->first('sub_category_id') }}</div>
                            {{-- <label>Images</label>
                            <input type="file" name="image[]" multiple accept="image/*" class="form-control form-control-rounded m-b-sm" placeholder="Upload Images">
                            <div style="color: red;">{{ $errors->first('image') }}</div> --}}

                            <label>Short Description</label>
                            <textarea name="short_description" style="width: 100%;height: 150px;"> {{ old('short_description') }}</textarea>
                            <br />
                            <br />
                            <label>Description</label>
                            <textarea class="editor" name="description" style="width: 100%;height: 150px;"> {{ old('description') }}</textarea>
                            <br />
                            <label>Actual Price</label>
                            <input type="text" value="{{ old('actual_price') }}" name="actual_price" class="form-control form-control-rounded m-b-sm" placeholder="Enter Actual Price">
                            <label>Sale Price</label>
                            <input type="text" value="{{ old('sale_price') }}" name="sale_price" class="form-control form-control-rounded m-b-sm" placeholder="Enter Sale Price">
                            <label>Status</label>
                            <select name="status" class="form-select form-control form-control-rounded m-b-sm">
                                <option {{ (old('status') == 0) ? 'selected' : '' }} value="0">Active</option>
                                <option {{ (old('status') == 1) ? 'selected' : '' }} value="1">Inactive</option>
                            </select>
                            <br />
                            <input type="text" value="{{ old('meta_title') }}" name="meta_title" class="form-control form-control-rounded m-b-sm" placeholder="Enter Meta Title">
                            <div style="color: red;">{{ $errors->first('meta_title') }}</div>
                            <input type="text" value="{{ old('meta_keyword') }}" name="meta_keyword" class="form-control form-control-rounded m-b-sm" placeholder="Enter Meta Keyword">

                            <input type="text" value="{{ old('seo_schema') }}" name="seo_schema" class="form-control form-control-rounded m-b-sm" placeholder="Enter Schema">

                            <label>Meta Description</label>
                            <textarea name="meta_desc" style="width: 100%;height: 150px;"> {{ old('meta_desc') }}</textarea>
                            <br />
                            <br />
                            <input class="btn btn-primary" type="submit" value="Add Product" >
                        </form>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>
@endsection
@section('script')
<script src="{{ url('public/assets/plugins/summernote/summernote-lite.min.js') }}"></script>
    <script type="text/javascript">
        $('.editor').summernote({
            height: 200
        });

        $('body').delegate('#changeCategory', 'change', function(e){
            var id = $(this).val();

            $.ajax({
                type : "POST",
                url : "{{ url('admin/get_sub_categories') }}",
                data : {
                    "id" : id,
                    "_token": "{{ csrf_token() }}"
                },
                dataType : "json",
                success: function(data){
                    $('#getSubCategory').html(data.html);
                },
                error: function(data){

                }
            })
        });
    </script>
@endsection
