@extends('Admin.layout.master')

@section('page-contents')
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Add Wedding page content</h1>
    </div>
    <div class="row">
        <div class="col-lg-10 mx-auto">
            <form method="POST" enctype="multipart/form-data"
                action=@if ($content) {{ route('admin.wedding.update', $content->id) }}  @else {{ route('admin.wedding.store') }} @endif>
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
                            Destination wedding section
                        </button>
                    </h2>
                    <div id="collapseTwo" class="accordion-collapse collapse show" aria-labelledby="headingTwo">
                        <div class="accordion-body">
                            <div class="form-group">
                                <label for="Destination wedding title">Destination wedding title<span
                                        style="color: red">*</span></label>
                                <input type="text" class="form-control" id="destination_wedding_title"
                                    name="destination_wedding_title" placeholder="Destination wedding title"
                                    value="{{ $content ? $content->destination_wedding_title : '' }}">
                                @error('destination_wedding_title')
                                    <span class="error">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="Description">Destination wedding Description<span
                                        style="color: red">*</span></label>
                                <input type="text" class="form-control" id="destination_wedding_description"
                                    name="destination_wedding_description" placeholder="Destination wedding Description"
                                    value="{{ $content ? $content->destination_wedding_description : '' }}">
                                @error('destination_wedding_description')
                                    <span class="error">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="Header Image">Destination wedding Image <span
                                        style="color: red">*</span></label>
                                <input type="file" class="form-control" id="destination_wedding_image"
                                    name="destination_wedding_image" placeholder="Destination wedding Image"
                                    accept="image/*">
                                @error('destination_wedding_image')
                                    <span class="error">{{ $message }}</span>
                                @enderror
                            </div>
                            @if ($content)
                                <div class="form-group">
                                    <div class="image-section">
                                        <div class="image"> <img
                                                src="{{ asset("storage/$content->destination_wedding_image") }}"
                                                height="50px">
                                        </div>
                                    </div>
                                </div>
                            @endif
                        </div>
                    </div>
                </div>
                {{-- Destination Wedding Request Form Section  --}}
                <div class="accordion-item">
                    <h2 class="accordion-header" id="headingThree">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                            Destination Wedding Request Form
                        </button>
                    </h2>
                    <div id="collapseThree" class="accordion-collapse collapse show" aria-labelledby="headingThree">
                        <div class="accordion-body">
                            <div class="form-group">
                                <label for="Destination Wedding Request Form title">Destination Wedding Request Form
                                    title<span style="color: red">*</span></label>
                                <input type="text" class="form-control" id="destination_wedding_form_title"
                                    name="destination_wedding_form_title"
                                    placeholder="Destination Wedding Request Form title"
                                    value="{{ $content ? $content->destination_wedding_form_title : '' }}">
                                @error('destination_wedding_form_title')
                                    <span class="error">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="Destination Wedding Request Form Description">Destination Wedding Request Form
                                    Description<span style="color: red">*</span></label>
                                <input type="text" class="form-control" id="destination_wedding_form_description"
                                    name="destination_wedding_form_description"
                                    placeholder="Destination Wedding Request Form Description"
                                    value="{{ $content ? $content->destination_wedding_form_description : '' }}">
                                @error('destination_wedding_form_description')
                                    <span class="error">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="Destination Wedding Request Form Image">Destination Wedding Request Form
                                    Image<span style="color: red">*</span></label>
                                <input type="file" class="form-control" id="destination_wedding_form_image"
                                    name="destination_wedding_form_image"
                                    placeholder="Destination Wedding Request Form Image" accept="image/*">
                                @error('destination_wedding_form_image')
                                    <span class="error">{{ $message }}</span>
                                @enderror
                            </div>
                            @if ($content)
                                <div class="form-group">
                                    <div class="image-section">
                                        <div class="image"> <img
                                                src="{{ asset("storage/$content->destination_wedding_form_image") }}"
                                                height="50px">
                                        </div>
                                    </div>
                                </div>
                            @endif
                        </div>
                    </div>
                </div>
                {{-- destination wedding plan section  --}}
                <div class="accordion-item">
                    <h2 class="accordion-header" id="headingFour">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                            Destination wedding plan Section
                        </button>
                    </h2>
                    <div id="collapseFour" class="accordion-collapse collapse show" aria-labelledby="headingFour">
                        <div class="accordion-body">
                            <div class="form-group">
                                <label for="Destination wedding plan title">Destination wedding plan title<span
                                        style="color: red">*</span></label>
                                <input type="text" class="form-control" id="destination_wedding_plan_title"
                                    name="destination_wedding_plan_title" placeholder="Destination wedding plan title"
                                    value="{{ $content ? $content->destination_wedding_plan_title : '' }}">
                                @error('destination_wedding_plan_title')
                                    <span class="error">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="Premium Description">Destination wedding plan Description<span
                                        style="color: red">*</span></label>
                                <input type="text" class="form-control" id="destination_wedding_plan_description"
                                    name="destination_wedding_plan_description"
                                    placeholder="Destination wedding plan Description"
                                    value="{{ $content ? $content->destination_wedding_plan_description : '' }}">
                                @error('destination_wedding_plan_description')
                                    <span class="error">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="Premium Image">Destination wedding plan Image<span
                                        style="color: red">*</span></label>
                                <input type="file" class="form-control" id="destination_wedding_plan_image"
                                    name="destination_wedding_plan_image" placeholder="Destination wedding plan Image"
                                    accept="image/*">
                                @error('destination_wedding_plan_image')
                                    <span class="error">{{ $message }}</span>
                                @enderror
                            </div>
                            @if ($content)
                                <div class="form-group">
                                    <div class="image-section">
                                        <div class="image"> <img
                                                src="{{ asset("storage/$content->destination_wedding_plan_image") }}"
                                                height="50px">
                                        </div>
                                    </div>
                                </div>
                            @endif
                        </div>
                    </div>
                </div>
                {{-- About Section  --}}
                <div class="accordion-item">
                    <h2 class="accordion-header" id="headingFive">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                            About Section
                        </button>
                    </h2>
                    <div id="collapseFive" class="accordion-collapse collapse show" aria-labelledby="headingFour">
                        <div class="accordion-body">
                            <div class="form-group">
                                <label for="About title">About title<span style="color: red">*</span></label>
                                <input type="text" class="form-control" id="about_title" name="about_title"
                                    placeholder="About title" value="{{ $content ? $content->about_title : '' }}">
                                @error('about_title')
                                    <span class="error">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="About Description">About Description<span style="color: red">*</span></label>
                                <input type="text" class="form-control" id="about_description"
                                    name="about_description" placeholder="About Description"
                                    value="{{ $content ? $content->about_description : '' }}">
                                @error('about_description')
                                    <span class="error">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="About Image">About Image<span style="color: red">*</span></label>
                                <input type="file" class="form-control" id="about_image" name="about_image"
                                    placeholder="About Image" accept="image/*">
                                @error('about_image')
                                    <span class="error">{{ $message }}</span>
                                @enderror
                            </div>
                            @if ($content)
                                <div class="form-group">
                                    <div class="image-section">
                                        <div class="image"> <img src="{{ asset("storage/$content->about_image") }}"
                                                height="50px">
                                        </div>
                                    </div>
                                </div>
                            @endif
                        </div>
                    </div>
                </div>
                {{-- Gift Registry --}}
                <div class="accordion-item">
                    <h2 class="accordion-header" id="headingSix">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
                            Gift Registry Section
                        </button>
                    </h2>
                    <div id="collapseSix" class="accordion-collapse collapse show" aria-labelledby="headingFour">
                        <div class="accordion-body">
                            <div class="form-group">
                                <label for="Gift Registry">Gift Registry title<span style="color: red">*</span></label>
                                <input type="text" class="form-control" id="gift_registry_title"
                                    name="gift_registry_title" placeholder="Gift Registry title"
                                    value="{{ $content ? $content->gift_registry_title : '' }}">
                                @error('gift_registry_title')
                                    <span class="error">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="Gift Registry Description">Gift Registry Description<span
                                        style="color: red">*</span></label>
                                <input type="text" class="form-control" id="gift_registry_description"
                                    name="gift_registry_description" placeholder="Gift Registry Description"
                                    value="{{ $content ? $content->gift_registry_description : '' }}">
                                @error('gift_registry_description')
                                    <span class="error">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="Gift Registry Image">Gift Registry Image<span
                                        style="color: red">*</span></label>
                                <input type="file" class="form-control" id="gift_registry_image"
                                    name="gift_registry_image" placeholder="Gift Registry Image" accept="image/*">
                                @error('gift_registry_image')
                                    <span class="error">{{ $message }}</span>
                                @enderror
                            </div>
                            @if ($content)
                                <div class="form-group">
                                    <div class="image-section">
                                        <div class="image"> <img
                                                src="{{ asset("storage/$content->gift_registry_image") }}"
                                                height="50px">
                                        </div>
                                    </div>
                                </div>
                            @endif
                        </div>
                    </div>
                </div>
                {{-- Easy Registration --}}
                <div class="accordion-item">
                    <h2 class="accordion-header" id="headingSeven">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#collapseSeven" aria-expanded="false" aria-controls="collapseSeven">
                            Easy Registration Section
                        </button>
                    </h2>
                    <div id="collapseSeven" class="accordion-collapse collapse show" aria-labelledby="headingFour">
                        <div class="accordion-body">
                            <div class="form-group">
                                <label for="Easy Registration title">Easy Registration title<span
                                        style="color: red">*</span></label>
                                <input type="text" class="form-control" id="easy_registration_title"
                                    name="easy_registration_title" placeholder="Easy Registration title"
                                    value="{{ $content ? $content->easy_registration_title : '' }}">
                                @error('easy_registration_title')
                                    <span class="error">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="Easy Registration Description">Easy Registration Description<span
                                        style="color: red">*</span></label>
                                <input type="text" class="form-control" id="easy_registration_description"
                                    name="easy_registration_description" placeholder="Easy Registration Description"
                                    value="{{ $content ? $content->easy_registration_description : '' }}">
                                @error('easy_registration_description')
                                    <span class="error">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="Easy Registration Image">Easy Registration Image<span
                                        style="color: red">*</span></label>
                                <input type="file" class="form-control" id="easy_registration_image"
                                    name="easy_registration_image" placeholder="Easy Registration Image"
                                    accept="image/*">
                                @error('easy_registration_image')
                                    <span class="error">{{ $message }}</span>
                                @enderror
                            </div>
                            @if ($content)
                                <div class="form-group">
                                    <div class="image-section">
                                        <div class="image"> <img
                                                src="{{ asset("storage/$content->easy_registration_image") }}"
                                                height="50px">
                                        </div>
                                    </div>
                                </div>
                            @endif
                        </div>
                    </div>
                </div>

                {{-- Buying Process --}}
                <div class="accordion-item">
                    <h2 class="accordion-header" id="headingEight">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#collapseEight" aria-expanded="false" aria-controls="collapseEight">
                            Buying Process Section
                        </button>
                    </h2>
                    <div id="collapseEight" class="accordion-collapse collapse show" aria-labelledby="headingEight">
                        <div class="accordion-body">
                            <div class="form-group">
                                <label for="Buying Process">Buying Process title<span style="color: red">*</span></label>
                                <input type="text" class="form-control" id="buying_process_title"
                                    name="buying_process_title" placeholder="Buying Process title"
                                    value="{{ $content ? $content->buying_process_title : '' }}">
                                @error('buying_process_title')
                                    <span class="error">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="Buying Process Description">Buying Process Description<span
                                        style="color: red">*</span></label>
                                <input type="text" class="form-control" id="buying_process_description"
                                    name="buying_process_description" placeholder="Buying Process Description"
                                    value="{{ $content ? $content->buying_process_description : '' }}">
                                @error('buying_process_description')
                                    <span class="error">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="Buying Process Image">Buying Process Image<span
                                        style="color: red">*</span></label>
                                <input type="file" class="form-control" id="buying_process_image"
                                    name="buying_process_image" placeholder="Buying Process Image" accept="image/*">
                                @error('buying_process_image')
                                    <span class="error">{{ $message }}</span>
                                @enderror
                            </div>
                            @if ($content)
                                <div class="form-group">
                                    <div class="image-section">
                                        <div class="image"> <img
                                                src="{{ asset("storage/$content->buying_process_image") }}"
                                                height="50px">
                                        </div>
                                    </div>
                                </div>
                            @endif
                        </div>
                    </div>
                </div>

                {{-- Gift Card  --}}
                <div class="accordion-item">
                    <h2 class="accordion-header" id="headingNine">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#collapseNine" aria-expanded="false" aria-controls="collapseNine">
                            Gift Card Section
                        </button>
                    </h2>
                    <div id="collapseNine" class="accordion-collapse collapse show" aria-labelledby="headingNine">
                        <div class="accordion-body">
                            <div class="form-group">
                                <label for="Gift Card">Gift Card title<span style="color: red">*</span></label>
                                <input type="text" class="form-control" id="gift_card_title" name="gift_card_title"
                                    placeholder="Gift Card title"
                                    value="{{ $content ? $content->gift_card_title : '' }}">
                                @error('gift_card_title')
                                    <span class="error">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="Gift Card Description">Gift Card Description<span
                                        style="color: red">*</span></label>
                                <input type="text" class="form-control" id="gift_card_description"
                                    name="gift_card_description" placeholder="Gift Card Description"
                                    value="{{ $content ? $content->gift_card_description : '' }}">
                                @error('gift_card_description')
                                    <span class="error">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="Gift Card Image">Gift Card Image<span style="color: red">*</span></label>
                                <input type="file" class="form-control" id="gift_card_image" name="gift_card_image"
                                    placeholder="Gift Card Image" accept="image/*">
                                @error('gift_card_image')
                                    <span class="error">{{ $message }}</span>
                                @enderror
                            </div>
                            @if ($content)
                                <div class="form-group">
                                    <div class="image-section">
                                        <div class="image"> <img src="{{ asset("storage/$content->gift_card_image") }}"
                                                height="50px">
                                        </div>
                                    </div>
                                </div>
                            @endif
                        </div>
                    </div>
                </div>

                {{-- Let your Guests know --}}
                <div class="accordion-item">
                    <h2 class="accordion-header" id="headingEleven">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#collapseEleven" aria-expanded="false" aria-controls="collapseEleven">
                            Let your Guests know Section
                        </button>
                    </h2>
                    <div id="collapseEleven" class="accordion-collapse collapse show" aria-labelledby="headingEleven">
                        <div class="accordion-body">
                            <div class="form-group">
                                <label for="Let your Guests know">Let your Guests know title<span
                                        style="color: red">*</span></label>
                                <input type="text" class="form-control" id="guest_title" name="guest_title"
                                    placeholder="Let your Guests know title"
                                    value="{{ $content ? $content->guest_title : '' }}">
                                @error('guest_title')
                                    <span class="error">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="Let your Guests know Description">Let your Guests know Description<span
                                        style="color: red">*</span></label>
                                <input type="text" class="form-control" id="guest_description"
                                    name="guest_description" placeholder="Let your Guests know Description"
                                    value="{{ $content ? $content->guest_description : '' }}">
                                @error('guest_description')
                                    <span class="error">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="Let your Guests know Image">Let your Guests know Image<span
                                        style="color: red">*</span></label>
                                <input type="file" class="form-control" id="guest_image" name="guest_image"
                                    placeholder="Let your Guests know Image" accept="image/*">
                                @error('guest_image')
                                    <span class="error">{{ $message }}</span>
                                @enderror
                            </div>
                            @if ($content)
                                <div class="form-group">
                                    <div class="image-section">
                                        <div class="image"> <img src="{{ asset("storage/$content->guest_image") }}"
                                                height="50px">
                                        </div>
                                    </div>
                                </div>
                            @endif
                        </div>
                    </div>
                </div>
                {{-- Upside of  Destination Weddings  --}}
                <div class="accordion-item">
                    <h2 class="accordion-header" id="headingTen">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#collapseTen" aria-expanded="false" aria-controls="collapseTen">
                            Upside of Destination Weddings Section
                        </button>
                    </h2>
                    <div id="collapseTen" class="accordion-collapse collapse show" aria-labelledby="headingTen">
                        <div class="accordion-body">
                            <div class="form-group">
                                <label for="Upside of  Destination Weddings">Upside of Destination Weddings title<span
                                        style="color: red">*</span></label>
                                <input type="text" class="form-control" id="advantage_title" name="advantage_title"
                                    placeholder="Upside of  Destination Weddings title"
                                    value="{{ $content ? $content->advantage_title : '' }}">
                                @error('advantage_title')
                                    <span class="error">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="Upside of  Destination Weddings Description">Upside of Destination Weddings
                                    Description<span style="color: red">*</span></label>
                                <input type="text" class="form-control" id="advantage_description"
                                    name="advantage_description" placeholder="Upside of  Destination Weddings Description"
                                    value="{{ $content ? $content->advantage_description : '' }}">
                                @error('advantage_description')
                                    <span class="error">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="Upside of  Destination Weddings Image">Upside of Destination Weddings
                                    Image<span style="color: red">*</span></label>
                                <input type="file" class="form-control" id="advantage_image" name="advantage_image"
                                    placeholder="Upside of  Destination Weddings Image" accept="image/*">
                                @error('advantage_image')
                                    <span class="error">{{ $message }}</span>
                                @enderror
                            </div>
                            @if ($content)
                                <div class="form-group">
                                    <div class="image-section">
                                        <div class="image"> <img src="{{ asset("storage/$content->advantage_image") }}"
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
                    <h2 class="accordion-header" id="headingTwelve">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#collapseTwelve" aria-expanded="false" aria-controls="collapseTwelve">
                            Meta details Section
                        </button>
                    </h2>
                    <div id="collapseTwelve" class="accordion-collapse collapse show" aria-labelledby="headingTwelve">
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
