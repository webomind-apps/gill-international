@extends('Admin.layout.master')

@section('page-contents')
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Add Admin Details</h1>
        {{-- <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
                            class="fas fa-download fa-sm text-white-50"></i> Generate Report</a> --}}
    </div>
    <div class="row">
        <div class="col-lg-10 mx-auto">
            <form method="POST" action="{{ route('admin.admin.store') }}" enctype="multipart/form-data">
                @method('POST')
                @csrf
                <div class="form-group">
                    <label for="Name">Name<span style="color: red">*</span></label>
                    <input type="text" class="form-control slug" id="name" name="name" placeholder="Name">
                    @error('name')
                        <span class="error">{{ $message }}</span>
                    @enderror
                </div>
                
                <div class="form-group">
                    <label for="Email">Email<span style="color: red">*</span></label>
                    <input type="email" class="form-control" id="email" name="email" placeholder="Email">
                    @error('email')
                        <span class="error">{{ $message }}</span>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="Password">Password<span style="color: red">*</span></label>
                    <input type="password" class="form-control" id="password" name="password" placeholder="Password">
                    @error('password')
                        <span class="error">{{ $message }}</span>
                    @enderror
                </div>
             
                <button type="submit" class="btn btn-danger btn-sm">Submit</button>
            </form>
        </div>
    </div>
@endsection
