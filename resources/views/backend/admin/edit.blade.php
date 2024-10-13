@extends('backend.layouts.app')
@section('content')
<div class="content-wrapper">
    <div class="container">
        <div class="row">
            <div class="col">
                <div class="page-description">
                    <h1>Edit Users</h1>
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
                        <form action="" method="post">
                            {{ csrf_field() }}
                            <input type="text" value="{{ old('name', $getRecord->name) }}" name="name" class="form-control form-control-rounded m-b-sm" placeholder="Enter Name">
                            <div style="color: red;">{{ $errors->first('name') }}</div>
                            <input type="email" value="{{ old('email', $getRecord->email) }}" name="email" class="form-control form-control-rounded m-b-sm" placeholder="Enter Email Address">
                            <div style="color: red;">{{ $errors->first('email') }}</div>
                            <input type="password" name="password" class="form-control form-control-rounded m-b-sm" placeholder="Enter Password">
                            <p>Do you want to change password please add</p>
                            <label>Status</label>
                            <select name="status" class="form-select form-control form-control-rounded m-b-sm">
                                <option {{ ($getRecord->status == 0) ? 'selected' : '' }} value="0">Active</option>
                                <option {{ ($getRecord->status == 1) ? 'selected' : '' }} value="1">Inactive</option>
                            </select>
                            <br />
                            <input class="btn btn-primary" type="submit" value="Update" >
                        </form>       
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>
@endsection