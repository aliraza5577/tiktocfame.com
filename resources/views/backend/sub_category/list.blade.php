@extends('backend.layouts.app')
@section('content')
<div class="content-wrapper">
    <div class="container">
        <div class="row">
            <div class="col">
                <div class="page-description">
                    <h1>All Sub Categories</h1>
                    @if(!empty(session('success')))
                        <div class="alert alert-success">{{ session('success') }}</div>
                    @endif
                </div>
            </div>
        </div>

        <table class="table table-striped">
            <thead class="table-dark">
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Sub Category</th>
                    <th scope="col">Category</th>
                    <th scope="col">Slug</th>
                    <th scope="col">Meta Title</th>
                    <th scope="col">Created By</th>
                    <th scope="col">Status</th>
                    <th scope="col">Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($getRecord as $value)
                    <tr>
                        <th scope="row">{{ $value->id }}</th>
                        <td>{{ $value->name }}</td>
                        <td>{{ $value->category_name }}</td>
                        <td>{{ $value->slug }}</td>
                        <td>{{ $value->meta_title }}</td>
                        <td>{{ $value->created_by_name }}</td>
                        <td>{{ ($value->status == 0) ? 'Active' : 'Inactive' }}</td>
                        <td>
                            <a class="btn btn-primary custom-btn" href="{{ url('admin/sub_categories/edit/'.$value->id) }}">
                                <i class="material-icons-two-tone">edit</i>
                            </a>
                            <a class="btn btn-danger custom-btn" href="{{ url('admin/sub_categories/delete/'.$value->id) }}">
                                <i class="material-icons-two-tone text-danger">delete</i>
                            </a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>

        {!! $getRecord->appends(Illuminate\Support\Facades\Request::except('page'))->links() !!}

    </div>
</div>
@endsection