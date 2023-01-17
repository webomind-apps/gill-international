@extends('Admin.layout.master')

@section('page-contents')
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Add Cruise Ship Options page content</h1>
    </div>
    <div class="row">
        <div class="col-lg-10 mx-auto">
            <form method="POST" enctype="multipart/form-data"
                action=@if ($content) {{ route('admin.cruises-ship-options.update', $content->id) }}  @else {{ route('admin.cruises-ship-options.store') }} @endif>
                @if ($content)
                    @method('PATCH')
                @endif
                @csrf
                {{-- Banner title --}}
                <div class="accordion-item">
                    <h2 class="accordion-header" id="headingOne">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
                            Title|Banner
                        </button>
                    </h2>
                    <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne">
                        <div class="accordion-body">
                            <div class="form-group">
                                <label for="Title">Title<span style="color: red">*</span></label>
                                <input type="text" class="form-control" id="title" name="title" placeholder="Title"
                                    value="{{ $content ? $content->title : '' }}">
                                @error('title')
                                    <span class="error">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="Banner">Banner<span style="color: red">*</span></label>
                                <input type="file" class="form-control" id="banner" name="banner"
                                    placeholder="Banner" accept="image/*">

                                @error('banner')
                                    <span class="error">{{ $message }}</span>
                                @enderror
                            </div>
                            @if ($content)
                                <div class="form-group">
                                    <div class="image-section">
                                        <div class="image"> <img src="{{ asset("storage/$content->banner") }}"
                                                height="50px">
                                        </div>
                                    </div>
                                </div>
                            @endif
                        </div>
                    </div>
                </div>

                {{-- Header --}}
                <div class="accordion-item">
                    <h2 class="accordion-header" id="headingTwo">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                            Header
                        </button>
                    </h2>
                    <div id="collapseTwo" class="accordion-collapse collapse show" aria-labelledby="headingTwo">
                        <div class="accordion-body">
                            <div class="form-group">
                                <label for="Header title">Header title<span style="color: red">*</span></label>
                                <input type="text" class="form-control" id="header_title" name="header_title"
                                    placeholder="Header title" value="{{ $content ? $content->header_title : '' }}">
                                @error('header_title')
                                    <span class="error">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="Description">Header Description<span style="color: red">*</span></label>
                                <input type="text" class="form-control" id="header_description" name="header_description"
                                    placeholder="Header Description"
                                    value="{{ $content ? $content->header_description : '' }}">
                                @error('header_description')
                                    <span class="error">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="Header Image">Header Image 1<span style="color: red">*</span></label>
                                <input type="file" class="form-control" id="header_image_1" name="header_image_1"
                                    placeholder="Header Image 1" accept="image/*">
                                @error('header_image_1')
                                    <span class="error">{{ $message }}</span>
                                @enderror
                            </div>
                            @if ($content)
                                <div class="form-group">
                                    <div class="image-section">
                                        <div class="image"> <img src="{{ asset("storage/$content->header_image_1") }}"
                                                height="50px">
                                        </div>
                                    </div>
                                </div>
                            @endif
                            <div class="form-group">
                                <label for="Header Image">Header Image 2<span style="color: red">*</span></label>
                                <input type="file" class="form-control" id="header_image_2" name="header_image_2"
                                    placeholder="Header Image 2" accept="image/*">
                                @error('header_image_2')
                                    <span class="error">{{ $message }}</span>
                                @enderror
                            </div>
                            @if ($content)
                                <div class="form-group">
                                    <div class="image-section">
                                        <div class="image"> <img src="{{ asset("storage/$content->header_image_2") }}"
                                                height="50px">
                                        </div>
                                    </div>
                                </div>
                            @endif

                        </div>
                    </div>
                </div>
                {{-- popular section  --}}
                <div class="accordion-item">
                    <h2 class="accordion-header" id="headingThree">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                            Popular Section
                        </button>
                    </h2>
                    <div id="collapseThree" class="accordion-collapse collapse show" aria-labelledby="headingThree">
                        <div class="accordion-body">
                            <div class="form-group">
                                <label for="Popular title">Popular title<span style="color: red">*</span></label>
                                <input type="text" class="form-control" id="popular_title" name="popular_title"
                                    placeholder="Popular title" value="{{ $content ? $content->popular_title : '' }}">
                                @error('popular_title')
                                    <span class="error">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="Popular Description">Popular Description<span
                                        style="color: red">*</span></label>
                                <input type="text" class="form-control" id="popular_description"
                                    name="popular_description" placeholder="Premium Description"
                                    value="{{ $content ? $content->popular_description : '' }}">
                                @error('popular_description')
                                    <span class="error">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="Popular Image">Popular Image<span style="color: red">*</span></label>
                                <input type="file" class="form-control" id="popular_image" name="popular_image"
                                    placeholder="Popular Image" accept="image/*">
                                @error('popular_image')
                                    <span class="error">{{ $message }}</span>
                                @enderror
                            </div>
                            @if ($content)
                                <div class="form-group">
                                    <div class="image-section">
                                        <div class="image"> <img src="{{ asset("storage/$content->popular_image") }}"
                                                height="50px">
                                        </div>
                                    </div>
                                </div>
                            @endif
                        </div>
                    </div>
                </div>
                {{-- Premium section  --}}
                <div class="accordion-item">
                    <h2 class="accordion-header" id="headingFour">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                            Premium Section
                        </button>
                    </h2>
                    <div id="collapseFour" class="accordion-collapse collapse show" aria-labelledby="headingFour">
                        <div class="accordion-body">
                            <div class="form-group">
                                <label for="Premium title">Premium title<span style="color: red">*</span></label>
                                <input type="text" class="form-control" id="premium_title" name="premium_title"
                                    placeholder="Premium title" value="{{ $content ? $content->premium_title : '' }}">
                                @error('premium_title')
                                    <span class="error">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="Premium Description">Premium Description<span
                                        style="color: red">*</span></label>
                                <input type="text" class="form-control" id="premium_description"
                                    name="premium_description" placeholder="Premium Description"
                                    value="{{ $content ? $content->premium_description : '' }}">
                                @error('premium_description')
                                    <span class="error">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="Premium Image">Premium Image<span style="color: red">*</span></label>
                                <input type="file" class="form-control" id="premium_image" name="premium_image"
                                    placeholder="Premium Image" accept="image/*">
                                @error('premium_image')
                                    <span class="error">{{ $message }}</span>
                                @enderror
                            </div>
                            @if ($content)
                                <div class="form-group">
                                    <div class="image-section">
                                        <div class="image"> <img src="{{ asset("storage/$content->premium_image") }}"
                                                height="50px">
                                        </div>
                                    </div>
                                </div>
                            @endif
                        </div>
                    </div>
                </div>
                {{-- Luxury Section  --}}
                <div class="accordion-item">
                    <h2 class="accordion-header" id="headingFive">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                            Luxury Section
                        </button>
                    </h2>
                    <div id="collapseFive" class="accordion-collapse collapse show" aria-labelledby="headingFour">
                        <div class="accordion-body">
                            <div class="form-group">
                                <label for="Luxury title">Luxury title<span style="color: red">*</span></label>
                                <input type="text" class="form-control" id="luxury_title" name="luxury_title"
                                    placeholder="Luxury title" value="{{ $content ? $content->luxury_title : '' }}">
                                @error('luxury_title')
                                    <span class="error">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="Luxury Description">Luxury Description<span
                                        style="color: red">*</span></label>
                                <input type="text" class="form-control" id="luxury_description"
                                    name="luxury_description" placeholder="Luxury Description"
                                    value="{{ $content ? $content->luxury_description : '' }}">
                                @error('luxury_description')
                                    <span class="error">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="Luxury Image">Luxury Image<span style="color: red">*</span></label>
                                <input type="file" class="form-control" id="luxury_image" name="luxury_image"
                                    placeholder="Luxury Image" accept="image/*">
                                @error('luxury_image')
                                    <span class="error">{{ $message }}</span>
                                @enderror
                            </div>
                            @if ($content)
                                <div class="form-group">
                                    <div class="image-section">
                                        <div class="image"> <img src="{{ asset("storage/$content->luxury_image") }}"
                                                height="50px">
                                        </div>
                                    </div>
                                </div>
                            @endif
                        </div>
                    </div>
                </div>
                {{-- River cruises  --}}
                <div class="accordion-item">
                    <h2 class="accordion-header" id="headingSix">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
                            River cruises Section
                        </button>
                    </h2>
                    <div id="collapseSix" class="accordion-collapse collapse show" aria-labelledby="headingFour">
                        <div class="accordion-body">
                            <div class="form-group">
                                <label for="River cruises">River cruises title<span style="color: red">*</span></label>
                                <input type="text" class="form-control" id="river_cruises_title"
                                    name="river_cruises_title" placeholder="River cruises title"
                                    value="{{ $content ? $content->river_cruises_title : '' }}">
                                @error('river_cruises_title')
                                    <span class="error">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="River cruises Description">River cruises Description<span
                                        style="color: red">*</span></label>
                                <input type="text" class="form-control" id="river_cruises_description"
                                    name="river_cruises_description" placeholder="River cruises Description"
                                    value="{{ $content ? $content->river_cruises_description : '' }}">
                                @error('river_cruises_description')
                                    <span class="error">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="River cruises Image">River cruises Image<span
                                        style="color: red">*</span></label>
                                <input type="file" class="form-control" id="river_cruises_image"
                                    name="river_cruises_image" placeholder="River cruises Image" accept="image/*">
                                @error('river_cruises_image')
                                    <span class="error">{{ $message }}</span>
                                @enderror
                            </div>
                            @if ($content)
                                <div class="form-group">
                                    <div class="image-section">
                                        <div class="image"> <img
                                                src="{{ asset("storage/$content->river_cruises_image") }}"
                                                height="50px">
                                        </div>
                                    </div>
                                </div>
                            @endif
                        </div>
                    </div>
                </div>
                {{-- Meta details  --}}
                <div class="accordion-item">
                    <h2 class="accordion-header" id="headingSeven">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#collapseSeven" aria-expanded="false" aria-controls="collapseSeven">
                            Meta details
                        </button>
                    </h2>
                    <div id="collapseSeven" class="accordion-collapse collapse show" aria-labelledby="headingSeven">
                        <div class="accordion-body">
                            <div class="form-group">
                                <label for="Meta title">Meta title<span style="color: red">*</span></label>
                                <textarea class="form-control" rows="8" id="meta_title" name="meta_title">{{ $content ? $content->meta_title : '' }}</textarea>
                                @error('meta_title')
                                    <span class="error">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="Meta Description">Meta Description<span style="color: red">*</span></label>
                                <textarea class="form-control" rows="8" id="meta_description" name="meta_description"
                                    placeholder="Meta Description">{{ $content ? $content->meta_description : '' }}</textarea>
                                @error('meta_description')
                                    <span class="error">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <div class="form-group">
                                    <label for="Meta Keywords">Meta Keywords<span style="color: red">*</span></label>
                                    <textarea class="form-control" rows="8" id="meta_keywords" name="meta_keywords" placeholder="Meta Keywords">{{ $content ? $content->meta_keywords : '' }}</textarea>
                                    @error('meta_keywords')
                                        <span class="error">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
                <button type="submit" class="btn btn-danger btn-sm">Submit</button>
            </form>
        </div>
    </div>
@endsection
