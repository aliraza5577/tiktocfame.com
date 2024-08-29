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
                    <h1>Edit Product</h1>
                </div>
                @if(!empty(session('success')))
                    <div class="alert alert-success">{{ session('success') }}</div>
                @endif
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
                            <input type="text" value="{{ old('name', $product->name) }}" name="name" class="form-control form-control-rounded m-b-sm" placeholder="Enter Name">
                            <div style="color: red;">{{ $errors->first('name') }}</div>
                            <input type="text" value="{{ old('slug', $product->slug) }}" name="slug" class="form-control form-control-rounded m-b-sm" placeholder="Enter Slug">
                            <div style="color: red;">{{ $errors->first('slug') }}</div>
                            <label>Category</label>
                            <select name="category_id" id="changeCategory" class="form-select form-control form-control-rounded m-b-sm">
                                @foreach ($getCategory as $item)
                                    <option {{ ($item->id == $product->category_id) ? 'selected' : '' }} value="{{ $item->id }}">{{ $item->name }}</option>
                                @endforeach
                            </select>
                            <label>Sub Category</label>
                            <select name="sub_category_id" id="getSubCategory" class="form-select form-control form-control-rounded m-b-sm">
                                @foreach ($getSubCategory as $item)
                                    <option {{ ($item->id == $product->sub_category_id) ? 'selected' : '' }} value="{{ $item->id }}">{{ $item->name }}</option>
                                @endforeach
                            </select>
                            <input type="file" name="image[]" multiple accept="image/*" class="form-control form-control-rounded m-b-sm" placeholder="Upload Images">
                            <div style="color: red;">{{ $errors->first('image') }}</div>

                            @if(!empty($product->getImage->count()))
                                <div class="row">
                                    @foreach($product->getImage as $image)
                                        @if($image && !empty($image->getProductImage()))
                                            <div class="col-md-2">
                                                <img src="{{ $image->getProductImage() }}" class="img-thumbnail">
                                                <a class="btn btn-danger custom-btn" onclick="return confirm('Are you sure you want to delete?');" href="{{ url('admin/product/image_delete/'.$image->id) }}">
                                                    <i class="material-icons-two-tone text-danger">delete</i>
                                                </a>
                                            </div>
                                        @endif
                                    @endforeach
                                </div>
                            @endif


                            <label>Short Description</label>
                            <textarea name="short_description" style="width: 100%;height: 150px;"> {{ old('short_description', $product->short_description) }}</textarea>
                            <br />
                            <br />
                            <label>Description</label>
                            <textarea class="editor" name="description" style="width: 100%;height: 150px;"> {{ old('description', $product->description) }}</textarea>
                            <br />
                            <br />
                            <label>Specifications</label>
                            <textarea class="editor" name="additional_info" style="width: 100%;height: 150px;"> {{ old('additional_info', $product->additional_info) }}</textarea>
                            <br />
                            <br />
                            <label>Shipping & Returns</label>
                            <textarea class="editor" name="shipping" style="width: 100%;height: 150px;"> {{ old('shipping', $product->shipping) }}</textarea>
                            <br />
                            <br />
                            <label>Status</label>
                            <select name="status" class="form-select form-control form-control-rounded m-b-sm">
                                <option {{ (old('status') == 0) ? 'selected' : '' }} value="0">Active</option>
                                <option {{ (old('status') == 1) ? 'selected' : '' }} value="1">Inactive</option>
                            </select>
                            <br />
                            <input type="text" value="{{ old('meta_title', $product->meta_title) }}" name="meta_title" class="form-control form-control-rounded m-b-sm" placeholder="Enter Meta Title">
                            <div style="color: red;">{{ $errors->first('meta_title') }}</div>
                            <input type="text" value="{{ old('meta_keyword', $product->meta_keyword) }}" name="meta_keyword" class="form-control form-control-rounded m-b-sm" placeholder="Enter Meta Keyword">
                            <label>Meta Description</label>
                            <textarea name="meta_desc" style="width: 100%;height: 150px;"> {{ old('meta_desc', $product->meta_desc) }}</textarea>
                            <br />
                            <br />
                            <input class="btn btn-primary" type="submit" value="Update Product" >
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
