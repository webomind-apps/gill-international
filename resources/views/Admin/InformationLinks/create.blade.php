@extends('Admin.layout.master')

@section('page-contents')
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Add Information links</h1>
        {{-- <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
                            class="fas fa-download fa-sm text-white-50"></i> Generate Report</a> --}}
    </div>
    <div class="row">
        <div class="col-lg-10 mx-auto">
            <form method="POST" action="{{ route('admin.information-links.store') }}" enctype="multipart/form-data">
                @method('POST')
                @csrf
                <div class="form-group">
                    <label for="Title">Title<span style="color: red">*</span></label>
                    <input type="text" class="form-control slug" id="title" name="title" placeholder="Title">
                    @error('title')
                        <span class="error">{{ $message }}</span>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="Slug">Slug<span style="color: red">*</span></label>
                    <input type="text" class="form-control" id="slug" name="slug"
                        placeholder="Slug" value="{{ old('slug') }}" readonly>
                </div>
               
                <div class="form-group">
                    <label for="description">Description<span style="color: red">*</span></label>
                    <input type="text" class="form-control" id="description" name="description" placeholder="description">
                    @error('description')
                        <span class="error">{{ $message }}</span>
                    @enderror
                </div>
                
                <div class="form-group">
                    <label for="Position">Position</label>
                    <input type="number" class="form-control" id="position" name="position" placeholder="Position">
                    @error('position')
                        <span class="error">{{ $message }}</span>
                    @enderror
                </div>
                <button type="submit" class="btn btn-danger btn-sm">Submit</button>
            </form>
        </div>
    </div>
@endsection
@push('scripts')
    <script>
        $('.slug').on('change', function() {
            var val = $(this).val();
            var slug = val.replace(/\s+/g, "-");
            $('#slug').val(slug.toLowerCase());
        });
    </script>
@endpush