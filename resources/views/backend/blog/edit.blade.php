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
                    <h1>Edit Blog</h1>
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
                            <input type="text" value="{{ old('title', $getRecord->title) }}" name="title" class="form-control form-control-rounded m-b-sm" placeholder="Enter title">
                            <div style="color: red;">{{ $errors->first('title') }}</div>
                            <input type="text" value="{{ old('slug', $getRecord->slug) }}" name="slug" class="form-control form-control-rounded m-b-sm" placeholder="Enter Slug">
                            <div style="color: red;">{{ $errors->first('slug') }}</div>

                            <label>Featured Image</label>
                            <input type="file" name="featured_image" accept="image/*" class="form-control form-control-rounded m-b-sm" placeholder="Upload Image">
                            <div style="color: red;">{{ $errors->first('featured_image') }}</div>
                            <div class="col-md-2">
                                <img src="{{ url('public/upload/blog/'.$getRecord->featured_image )}}" class="img-thumbnail">
                            </div>

                            <label>Banner Image</label>
                            <input type="file" name="banner_image" accept="image/*" class="form-control form-control-rounded m-b-sm" placeholder="Upload Image">
                            <div style="color: red;">{{ $errors->first('banner_image') }}</div>
                            <div class="col-md-2">
                                <img src="{{ url('public/upload/blog/'.$getRecord->banner_image )}}" class="img-thumbnail">
                            </div>


                            <label>Status</label>
                            <select name="status" class="form-select form-control form-control-rounded m-b-sm">
                                <option {{ (old('status') == 0) ? 'selected' : '' }} value="0">Active</option>
                                <option {{ (old('status') == 1) ? 'selected' : '' }} value="1">Inactive</option>
                            </select>
                            <br />
                            <label>Description</label>
                            <textarea class="editor" name="description" style="width: 100%;height: 150px;"> {{ old('description', $getRecord->description) }}</textarea>
                            <br />
                            <input type="text" value="{{ old('meta_title', $getRecord->meta_title) }}" name="meta_title" class="form-control form-control-rounded m-b-sm" placeholder="Enter Meta Title">
                            <div style="color: red;">{{ $errors->first('meta_title') }}</div>
                            <input type="text" value="{{ old('meta_keyword', $getRecord->meta_keyword) }}" name="meta_keyword" class="form-control form-control-rounded m-b-sm" placeholder="Enter Meta Keyword">
                            <label>Meta Description</label>
                            <textarea name="meta_desc" placeholder="Meta Description" style="width: 100%;height: 150px;"> {{ old('meta_desc', $getRecord->meta_desc) }}</textarea>
                            <br />
                            <br />
                            <input class="btn btn-primary" type="submit" value="Update Blog" >
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
    </script>
@endsection
