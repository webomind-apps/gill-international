@extends('Admin.layout.master')

@section('page-contents')
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Add contact page content</h1>
    </div>
    <div class="row">
        <div class="col-lg-10 mx-auto">
            <form method="POST" enctype="multipart/form-data"
                action=@if ($content) {{ route('admin.contact-us.update', $content->id) }}  @else {{ route('admin.contact-us.store') }} @endif>
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
                                    placeholder="Banner" accept="phone_number/*">

                                @error('banner')
                                    <span class="error">{{ $message }}</span>
                                @enderror
                            </div>
                            @if ($content)
                                <div class="form-group">
                                    <div class="phone_number-section">
                                        <div class="phone_number"> <img src="{{ asset("storage/$content->banner") }}"
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
                            Address Details
                        </button>
                    </h2>
                    <div id="collapseTwo" class="accordion-collapse collapse show" aria-labelledby="headingTwo">
                        <div class="accordion-body">
                            <div class="form-group">
                                <label for="address">Address<span style="color: red">*</span></label>
                                <input type="text" class="form-control" id="address" name="address"
                                    placeholder="address"
                                    value="{{ $content ? $content->address : '' }}">
                                @error('address')
                                    <span class="error">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="Phone Number">Phone Number<span style="color: red">*</span></label>
                                <input type="number" class="form-control" id="phone_number" name="phone_number"
                                    placeholder="Phone Number" value="{{ $content ? $content->phone_number : '' }}">
                                @error('phone_number')
                                    <span class="error">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="Email">Email<span style="color: red">*</span></label>
                                <input type="email" class="form-control" id="email" name="email"
                                    placeholder="Email" value="{{ $content ? $content->email : '' }}">
                                @error('email')
                                    <span class="error">{{ $message }}</span>
                                @enderror
                            </div>
                         
                        </div>
                    </div>
                </div>

                <div class="accordion-item">
                    <h2 class="accordion-header" id="headingThree">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                            Social media Links
                        </button>
                    </h2>
                    <div id="collapseThree" class="accordion-collapse collapse show" aria-labelledby="headingThree">
                        <div class="accordion-body">
                            <div class="form-group">
                                <label for="Map book">Map Link<span style="color: red">*</span></label>
                                <input type="text" class="form-control" id="map_link" name="map_link"
                                    placeholder="Map Link"
                                    value="{{ $content ? $content->map_link : '' }}">
                                @error('map_link')
                                    <span class="error">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="Face book">FaceBook Link<span style="color: red">*</span></label>
                                <input type="text" class="form-control" id="facebook_link" name="facebook_link"
                                    placeholder="FaceBook Link"
                                    value="{{ $content ? $content->facebook_link : '' }}">
                                @error('facebook_link')
                                    <span class="error">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="Instagram Link">Instagram Link<span style="color: red">*</span></label>
                                <input type="text" class="form-control" id="instagram_link" name="instagram_link"
                                    placeholder="Instagram Link"
                                    value="{{ $content ? $content->instagram_link : '' }}">
                                @error('instagram_link')
                                    <span class="error">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="Twitter Link">Twitter Link<span style="color: red">*</span></label>
                                <input type="text" class="form-control" id="twitter_link" name="twitter_link"
                                    placeholder="Twitter Link"
                                    value="{{ $content ? $content->twitter_link : '' }}">
                                @error('twitter_link')
                                    <span class="error">{{ $message }}</span>
                                @enderror
                            </div>
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
                                <textarea class="form-control" rows="8" id="meta_title" name="meta_title" placeholder="Meta Title">{{ $content ? $content->meta_title : '' }}</textarea>
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
