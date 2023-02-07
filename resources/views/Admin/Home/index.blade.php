@extends('Admin.layout.master')

@section('page-contents')
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Add Vacation page content</h1>
    </div>
    <div class="row">
        <div class="col-lg-10 mx-auto">
            <form method="POST" enctype="multipart/form-data"
                action=@if ($content) {{ route('admin.home.update', $content->id) }}  @else {{ route('admin.home.store') }} @endif>
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
                            About Us
                        </button>
                    </h2>
                    <div id="collapseTwo" class="accordion-collapse collapse show" aria-labelledby="headingTwo">
                        <div class="accordion-body">
                            <div class="form-group">
                                <label for="about us title">About Us Title<span style="color: red">*</span></label>
                                <input type="text" class="form-control" id="about_us_title" name="about_us_title"
                                    placeholder="about_us_title"
                                    value="{{ $content ? $content->about_us_title : '' }}">
                                @error('about_us_title')
                                    <span class="error">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="about_us_image">About Us Image<span style="color: red">*</span></label>
                                <input type="file" class="form-control" id="about_us_image" name="about_us_image"
                                    placeholder="About Us Image" accept="image/*">
                                @error('about_us_image')
                                    <span class="error">{{ $message }}</span>
                                @enderror
                            </div>
                            @if ($content)
                                <div class="form-group">
                                    <div class="image-section">
                                        <div class="image"> <img src="{{ asset("storage/$content->about_us_image") }}"
                                                height="50px">
                                        </div>
                                    </div>
                                </div>
                            @endif
                            <div class="form-group">
                                <label for="About Us Description">About Us Description<span style="color: red">*</span></label>
                                <textarea class="form-control" rows="8" id="about_us_description" name="about_us_description"
                                    placeholder="About Us Description">{{ $content ? $content->about_us_description : '' }}</textarea>
                                @error('about_us_description')
                                    <span class="error">{{ $message }}</span>
                                @enderror
                            </div>
                            
                        </div>
                    </div>
                </div>

                <div class="accordion-item">
                    <h2 class="accordion-header" id="headingFour">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                            Read More Section
                        </button>
                    </h2>
                    <div id="collapseFour" class="accordion-collapse collapse show" aria-labelledby="headingFour">
                        <div class="accordion-body">
                            <div class="form-group">
                                <label for="Read More Title">Read More Title<span
                                        style="color: red">*</span></label>
                                <input type="text" class="form-control" id="read_more_title"
                                    name="read_more_title" placeholder="Read More Title"
                                    value="{{ $content ? $content->read_more_title : '' }}">
                                @error('read_more_title')
                                    <span class="error">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="Read More Description">Read More Description<span
                                        style="color: red">*</span></label>
                                <input type="text" class="form-control" id="read_more_description"
                                    name="read_more_description"
                                    placeholder="Read More Description"
                                    value="{{ $content ? $content->read_more_description : '' }}">
                                @error('read_more_description')
                                    <span class="error">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="Read More Image">Read More Image<span
                                        style="color: red">*</span></label>
                                <input type="file" class="form-control" id="read_more_image"
                                    name="read_more_image" placeholder="Read More Image"
                                    accept="image/*">
                                @error('read_more_image')
                                    <span class="error">{{ $message }}</span>
                                @enderror
                            </div>
                            @if ($content)
                                <div class="form-group">
                                    <div class="image-section">
                                        <div class="image"> <img
                                                src="{{ asset("storage/$content->read_more_image") }}"
                                                height="50px">
                                        </div>
                                    </div>
                                </div>
                            @endif
                            <div class="form-group">
                                <label for="Read More Link">Read More Link<span
                                        style="color: red">*</span></label>
                                <input type="text" class="form-control" id="read_more_link"
                                    name="read_more_link"
                                    placeholder="Read More Link"
                                    value="{{ $content ? $content->read_more_link : '' }}">
                                @error('read_more_link')
                                    <span class="error">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                    </div>
                </div>

                <div class="accordion-item">
                    <h2 class="accordion-header" id="headingFive">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                            Special Offers Image
                        </button>
                    </h2>
                    <div id="collapseFive" class="accordion-collapse collapse show" aria-labelledby="headingFour">
                        <div class="accordion-body">
                            <div class="form-group">
                                <label for="Special Offers Image 1">Special Offers Image 1<span
                                        style="color: red">*</span></label>
                                <input type="file" class="form-control" id="special_offer_banner_1"
                                    name="special_offer_banner_1" placeholder="Special Offers Image 1"
                                    accept="image/*">
                                @error('special_offer_banner_1')
                                    <span class="error">{{ $message }}</span>
                                @enderror
                            </div>
                            @if ($content)
                                <div class="form-group">
                                    <div class="image-section">
                                        <div class="image"> <img
                                                src="{{ asset("storage/$content->special_offer_banner_1") }}"
                                                height="50px">
                                        </div>
                                    </div>
                                </div>
                            @endif
                            <div class="form-group">
                                <label for="Special Offers Image 2">Special Offers Image 2<span
                                        style="color: red">*</span></label>
                                <input type="file" class="form-control" id="special_offer_banner_2"
                                    name="special_offer_banner_2" placeholder="Special Offers Image 2"
                                    accept="image/*">
                                @error('special_offer_banner_2')
                                    <span class="error">{{ $message }}</span>
                                @enderror
                            </div>
                            @if ($content)
                                <div class="form-group">
                                    <div class="image-section">
                                        <div class="image"> <img
                                                src="{{ asset("storage/$content->special_offer_banner_2") }}"
                                                height="50px">
                                        </div>
                                    </div>
                                </div>
                            @endif
                        </div>
                    </div>
                </div>

                <div class="accordion-item">
                    <h2 class="accordion-header" id="headingSix">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
                            News Letter Image
                        </button>
                    </h2>
                    <div id="collapseSix" class="accordion-collapse collapse show" aria-labelledby="headingFour">
                        <div class="accordion-body">
                            <div class="form-group">
                                <label for="News Letter Image">News Letter Image<span
                                        style="color: red">*</span></label>
                                <input type="file" class="form-control" id="new_letter_image"
                                    name="new_letter_image" placeholder="News Letter Image"
                                    accept="image/*">
                                @error('new_letter_image')
                                    <span class="error">{{ $message }}</span>
                                @enderror
                            </div>
                            @if ($content)
                                <div class="form-group">
                                    <div class="image-section">
                                        <div class="image"> <img
                                                src="{{ asset("storage/$content->new_letter_image") }}"
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
