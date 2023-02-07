@extends('Admin.layout.master')

@section('page-contents')
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Add Destinations</h1>
        {{-- <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
                            class="fas fa-download fa-sm text-white-50"></i> Generate Report</a> --}}
    </div>
    <div class="row">
        <div class="col-lg-10 mx-auto">
            <form method="POST" action="{{ route('admin.destination.store') }}" enctype="multipart/form-data">
                @method('POST')
                @csrf
                <div class="accordion-item">
                    <h2 class="accordion-header" id="headingTwo">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                            Title|Banner
                        </button>
                    </h2>
                    <div id="collapseTwo" class="accordion-collapse collapse show" aria-labelledby="headingTwo">
                        <div class="accordion-body">
                            <div class="form-group">
                                <label for="Title">Title<span style="color: red">*</span></label>
                                <input type="text" class="form-control slug" id="title" name="title"
                                    placeholder="Title">
                                @error('title')
                                    <span class="error">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="Slug">Slug<span style="color: red">*</span></label>
                                <input type="text" class="form-control" id="slug" name="slug" placeholder="Slug"
                                    value="{{ old('slug') }}" readonly>
                            </div>
                            <div class="form-group">
                                <label for="image">Banner<span style="color: red">*</span></label>
                                <input type="file" class="form-control" id="banner" name="banner"
                                    placeholder="Banner" accept="image/*">
                                @error('banner')
                                    <span class="error">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="Destination Image">Destination Image<span style="color: red">*</span></label>
                                <input type="file" class="form-control" id="destination_image" name="destination_image"
                                    placeholder="Destination Image" accept="image/*">
                                @error('destination_image')
                                    <span class="error">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="description">Description<span style="color: red">*</span></label>
                                <input type="text" class="form-control" id="description" name="description"
                                    placeholder="Description">
                                @error('description')
                                    <span class="error">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header" id="headingTwo">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                           Destination
                        </button>
                    </h2>
                    <div id="collapseTwo" class="accordion-collapse collapse show" aria-labelledby="headingTwo">
                        <div class="accordion-body" >
                            <div id="social_list">
                                <div class="form-group">
                                    <label for="Title">Title<span style="color: red">*</span></label>
                                    <input type="text" class="form-control slug" id="title" name="title"
                                        placeholder="Title">
                                    @error('title')
                                        <span class="error">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for="image">Banner<span style="color: red">*</span></label>
                                    <input type="file" class="form-control" id="banner" name="banner"
                                        placeholder="Banner" accept="image/*">
                                    @error('banner')
                                        <span class="error">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for="description">Description<span style="color: red">*</span></label>
                                    <input type="text" class="form-control" id="description" name="description"
                                        placeholder="Description">
                                    @error('description')
                                        <span class="error">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for="Links">Links<span style="color: red">*</span></label>
                                    <input type="text" class="form-control" id="link" name="link"
                                        placeholder="link">
                                    @error('link')
                                        <span class="error">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for="Position">Position<span style="color: red">*</span></label>
                                    <input type="number" class="form-control" id="link" name="position"
                                        placeholder="position">
                                    @error('position')
                                        <span class="error">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <button type="button" class="btn btn-danger btn-sm" id="add_destination">+ Add
                            Destination</button>
                    </div>
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
    <script>
        $(document).on("click", "#add_destination", function(event) {
            alert("hi");
            let social_list = $('#social_list');
            let social_item = $('.social_item').length;
            social_list.append(`
            <div>
                                <div class="form-group">
                                    <label for="Title">Title<span style="color: red">*</span></label>
                                    <input type="text" class="form-control slug" id="title" name="title"
                                        placeholder="Title">
                                    @error('title')
                                        <span class="error">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for="image">Banner<span style="color: red">*</span></label>
                                    <input type="file" class="form-control" id="banner" name="banner"
                                        placeholder="Banner" accept="image/*">
                                    @error('banner')
                                        <span class="error">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for="description">Description<span style="color: red">*</span></label>
                                    <input type="text" class="form-control" id="description" name="description"
                                        placeholder="Description">
                                    @error('description')
                                        <span class="error">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for="Links">Links<span style="color: red">*</span></label>
                                    <input type="text" class="form-control" id="link" name="link"
                                        placeholder="link">
                                    @error('link')
                                        <span class="error">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for="Position">Position<span style="color: red">*</span></label>
                                    <input type="number" class="form-control" id="link" name="position"
                                        placeholder="position">
                                    @error('position')
                                        <span class="error">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>

    `);
    
        });
    </script>
    <script>
        $(document).on("click", ".social_item_remove", function(event) {
                $(this).parent().closest(".social_item").remove();
            });
        </script>
@endpush
