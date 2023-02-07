@extends('Admin.layout.master')

@section('page-contents')
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Add Cruise Ship Options page content</h1>
    </div>
    <div class="row">
        <div class="col-lg-10 mx-auto">
            <form method="POST" enctype="multipart/form-data"
                action=@if ($content) {{ route('admin.cruises-vacations.update', $content->id) }}  @else {{ route('admin.cruises-vacations.store') }} @endif>
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
                            Section One
                        </button>
                    </h2>
                    <div id="collapseTwo" class="accordion-collapse collapse show" aria-labelledby="headingTwo">
                        <div class="accordion-body">
                            <div class="form-group">
                                <label for="Section One title">Section One title<span style="color: red">*</span></label>
                                <input type="text" class="form-control" id="section_1_title" name="section_1_title"
                                    placeholder="Section One title" value="{{ $content ? $content->section_1_title : '' }}">
                                @error('section_1_title')
                                    <span class="error">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="Section One Description">Section One Description<span style="color: red">*</span></label>
                                <input type="text" class="form-control" id="section_1_description" name="section_1_description"
                                    placeholder="Section One Description"
                                    value="{{ $content ? $content->section_1_description : '' }}">
                                @error('section_1_description')
                                    <span class="error">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="Section One Image">Section One Image <span style="color: red">*</span></label>
                                <input type="file" class="form-control" id="section_1_image" name="section_1_image"
                                    placeholder="Section One Image" accept="image/*">
                                @error('section_1_image')
                                    <span class="error">{{ $message }}</span>
                                @enderror
                            </div>
                            @if ($content)
                                <div class="form-group">
                                    <div class="image-section">
                                        <div class="image"> <img src="{{ asset("storage/$content->section_1_image") }}"
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
                            Section Two
                        </button>
                    </h2>
                    <div id="collapseThree" class="accordion-collapse collapse show" aria-labelledby="headingThree">
                        <div class="accordion-body">
                            <div class="form-group">
                                <label for="Section Two title">Section Two title<span style="color: red">*</span></label>
                                <input type="text" class="form-control" id="section_2_title" name="section_2_title"
                                    placeholder="Section Two title" value="{{ $content ? $content->section_2_title : '' }}">
                                @error('section_2_title')
                                    <span class="error">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="Section Two Description">Section Two Description<span style="color: red">*</span></label>
                                <input type="text" class="form-control" id="section_2_description" name="section_2_description"
                                    placeholder="Section Two Description"
                                    value="{{ $content ? $content->section_2_description : '' }}">
                                @error('section_2_description')
                                    <span class="error">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="Section Two Image">Section Two Image <span style="color: red">*</span></label>
                                <input type="file" class="form-control" id="section_2_image" name="section_2_image"
                                    placeholder="Section Two Image" accept="image/*">
                                @error('section_2_image')
                                    <span class="error">{{ $message }}</span>
                                @enderror
                            </div>
                            @if ($content)
                                <div class="form-group">
                                    <div class="image-section">
                                        <div class="image"> <img src="{{ asset("storage/$content->section_2_image") }}"
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
                             Section Three
                        </button>
                    </h2>
                    <div id="collapseFour" class="accordion-collapse collapse show" aria-labelledby="headingFour">
                        <div class="accordion-body">
                            <div class="form-group">
                                <label for="Section Three title">Section Three title<span style="color: red">*</span></label>
                                <input type="text" class="form-control" id="section_3_title" name="section_3_title"
                                    placeholder="Section Three title" value="{{ $content ? $content->section_3_title : '' }}">
                                @error('section_3_title')
                                    <span class="error">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="Section Three Description">Section Three Description<span style="color: red">*</span></label>
                                <input type="text" class="form-control" id="section_3_description" name="section_3_description"
                                    placeholder="Section Three Description"
                                    value="{{ $content ? $content->section_3_description : '' }}">
                                @error('section_3_description')
                                    <span class="error">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="Section Three Image">Section Three Image <span style="color: red">*</span></label>
                                <input type="file" class="form-control" id="section_3_image" name="section_3_image"
                                    placeholder="Section Three Image" accept="image/*">
                                @error('section_3_image')
                                    <span class="error">{{ $message }}</span>
                                @enderror
                            </div>
                            @if ($content)
                                <div class="form-group">
                                    <div class="image-section">
                                        <div class="image"> <img src="{{ asset("storage/$content->section_3_image") }}"
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
                             Section Four
                        </button>
                    </h2>
                    <div id="collapseFive" class="accordion-collapse collapse show" aria-labelledby="headingFour">
                        <div class="accordion-body">
                            <div class="form-group">
                                <label for="Section Four title">Section Four title<span style="color: red">*</span></label>
                                <input type="text" class="form-control" id="section_4_title" name="section_4_title"
                                    placeholder="Section Four title" value="{{ $content ? $content->section_4_title : '' }}">
                                @error('section_4_title')
                                    <span class="error">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="Section Four Description">Section Four Description<span style="color: red">*</span></label>
                                <input type="text" class="form-control" id="section_4_description" name="section_4_description"
                                    placeholder="Section Four Description"
                                    value="{{ $content ? $content->section_4_description : '' }}">
                                @error('section_4_description')
                                    <span class="error">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="Section Two Image">Section Four Image <span style="color: red">*</span></label>
                                <input type="file" class="form-control" id="section_4_image" name="section_4_image"
                                    placeholder="Section Four Image" accept="image/*">
                                @error('section_4_image')
                                    <span class="error">{{ $message }}</span>
                                @enderror
                            </div>
                            @if ($content)
                                <div class="form-group">
                                    <div class="image-section">
                                        <div class="image"> <img src="{{ asset("storage/$content->section_4_image") }}"
                                                height="50px">
                                        </div>
                                    </div>
                                </div>
                            @endif
                        </div>
                    </div>
                </div>
                
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
