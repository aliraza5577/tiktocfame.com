@extends('backend.layouts.app')
@section('content')
<div class="content-wrapper">
    <div class="container">
        <div class="row">
            <div class="col">
                <div class="page-description">
                    <h1>Add New Category</h1>
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

                            <label>Featured Image</label>
                            <input type="file" name="featured_image" accept="image/*" class="form-control form-control-rounded m-b-sm" placeholder="Upload Image">
                            <div style="color: red;">{{ $errors->first('featured_image') }}</div>

                            <label>Banner Image</label>
                            <input type="file" name="banner_image" accept="image/*" class="form-control form-control-rounded m-b-sm" placeholder="Upload Image">
                            <div style="color: red;">{{ $errors->first('banner_image') }}</div>


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
                            <textarea name="meta_desc" placeholder="Meta Description" style="width: 100%;height: 150px;"> {{ old('meta_desc') }}</textarea>
                            <br />
                            <br />
                            <input class="btn btn-primary" type="submit" value="Add Category" >
                        </form>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>
@endsection
