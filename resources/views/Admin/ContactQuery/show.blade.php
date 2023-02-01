@extends('Admin.layout.master')

@section('page-contents')
    <div>
        <div class="row">
            <div class="col-lg-10 mx-auto">

                <div class="form-group">
                    <div class="form-group">
                        <label for="Title">Name</label>
                        <input type="text" class="form-control" value="{{ $enquiry->name }}" readonly>
                    </div>
                   
                    <div class="form-group">
                        <label for="Phone Number">Phone Number</label>
                        <input type="text" class="form-control" value="{{ $enquiry->phone_number }}" readonly>
                    </div>
                    
                    <div class="form-group">
                        <label for="Email">Email</label>
                        <input type="text" class="form-control" value="{{ $enquiry->email }}" readonly>
                    </div>

                    <div class="form-group">
                        <label for="Message">Message</label>
                        <textarea class="form-control" rows="8" readonly>{{ $enquiry->message }}</textarea>
                    </div>
                </div>

                <a href="{{ route('admin.contact-us-query.index') }}">
                    <button class="btn btn-sm btn-info">
                        <i class="fa fa-arrow-left"></i>
                    </button>
                </a>
            </div>
        </div>
    </div>
@endsection
