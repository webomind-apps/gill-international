@extends('Admin.layout.master')

@section('page-contents')
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Add Disney page content</h1>
    </div>
    <div class="row">
        <div class="col-lg-10 mx-auto">
            <form method="POST" enctype="multipart/form-data" action={{ route('admin.home-image.update', $content->id) }}>
                @method('PATCH')
                @csrf
                {{-- image title --}}
                <div class="accordion-item">
                    <h2 class="accordion-header" id="headingOne">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
                            Title|image
                        </button>
                    </h2>
                    <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne">
                        <div class="accordion-body">
                            <div class="form-group">
                                <label for="Title">Title<span style="color: red">*</span></label>
                                <input type="text" class="form-control" id="title" name="title"
                                    value="{{ $content->title }}">
                                @error('title')
                                    <span class="error">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="image">image<span style="color: red">*</span></label>
                                <input type="file" class="form-control" id="image" name="image" placeholder="image"
                                    accept="image/*">

                                @error('image')
                                    <span class="error">{{ $message }}</span>
                                @enderror
                            </div>
                            @if ($content)
                                <div class="form-group">
                                    <div class="image-section">
                                        <div class="image"> <img src="{{ asset("storage/$content->image") }}"
                                                height="50px">
                                        </div>
                                    </div>
                                </div>
                            @endif

                            <div class="form-group">
                                <label for=" Description"> Description<span style="color: red">*</span></label>
                                <textarea class="form-control" rows="8" id="description" name="description"
                                    placeholder=" Description">{{$content->description}}</textarea>
                                @error('description')
                                    <span class="error">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="Link">Link<span style="color: red">*</span></label>
                                <input type="text" class="form-control" id="link" name="link"
                                    value="{{ $content->link }}">
                                @error('link')
                                    <span class="error">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="Position">Position<span style="color: red">*</span></label>
                                <input type="number" class="form-control" id="position" name="position"
                                    value="{{ $content->position }}">
                                @error('position')
                                    <span class="error">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                    </div>
                </div>




                <button type="submit" class="btn btn-danger btn-sm">Submit</button>
            </form>
        </div>
    </div>
@endsection
