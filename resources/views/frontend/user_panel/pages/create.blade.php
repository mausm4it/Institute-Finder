@extends('frontend.user_panel.layouts.app')
@section('content')
    {{-- <div class="dashboard-contant dashboard-add-listing-area">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="dashboard-page-title">
                        <h3 class="title">{{ __('Add New Institute Info') }}</h3>
                    </div>
                </div>
            </div>
            <div class="row">
                <form id="createblog" action="{{ route('make-college') }}" method="post" enctype="multipart/form-data">
                    @csrf <main class="flex-grow p-6 ">
                        <div class="lg:col-span-4 ">
                            <div class="flex justify-end gap-3 mb-2">
                                <a href="{{ route('dashboard') }}"
                                    class="btn dark:text-gray-200 border border-slate-200 dark:border-slate-700 hover:bg-slate-100 hover:dark:bg-slate-700 transition-all"
                                    data-fc-dismiss="" type="button">
                                    Cancle
                                </a>
                                <button type="submit"
                                    class="inline-flex items-center rounded-md border border-transparent bg-green-500 px-4 py-2 text-sm font-medium text-white shadow-sm hover:bg-green-500 focus:outline-none">
                                    Save
                                </button>
                            </div>
                        </div>



                        <div class="grid lg:grid-cols-4 gap-6">
                            <div class="col-span-1 flex flex-col gap-6 ">

                                <div class="card p-6">
                                    <h4>Select Country <span class="text-red-500">*</span>
                                    </h4>
                                    <br>
                                    <select id="search-select" name="country" class="search-select"
                                        aria-describedby="input-helper-text">
                                        <option value="">Select Country</option>
                                        @foreach ($countries as $country)
                                            <option value="{{ $country->id }}">{{ $country->name }}</option>
                                        @endforeach
                                    </select>

                                    @error('country')
                                        <div class=" text-danger">{{ $message }}</div>
                                    @enderror
                                </div>




                                <div class="card p-6">
                                    <h4>Institute Thumbline <span class="text-red-500">*</span>
                                    </h4>
                                    <br>




                                    <div class="">
                                        <input onchange="BlogImage(event)" class="form-control" type="file"
                                            name="thumbline" value="" required>
                                        <img id="blog_imagePreview" src="#" alt="Preview"
                                            style="display:none; max-width: 100%; max-height: 100px;">
                                        @error('thumbline')
                                            <div class=" text-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="card p-6">
                                    <h4>Institute Gallery
                                    </h4>
                                    <br>
                                    <input class="form-control" type="file" name="gallery[]" value="" multiple>
                                    @error('gallery')
                                        <div class=" text-danger">{{ $message }}</div>
                                    @enderror

                                </div>

                                <div class="card p-6">
                                    <h4>Institute Brochuri File
                                    </h4>
                                    <br>




                                    <div class="">
                                        <input class="form-control" type="file" name="brochuri" value=""
                                            accept=".pdf, .doc, .docx">
                                        @error('brochuri')
                                            <div class=" text-danger">{{ $message }}</div>
                                        @enderror

                                    </div>
                                </div>

                                @if ($campuses->isNotEmpty())
                                    <div class="card p-6">
                                        <div class="flex justify-between items-center mb-4">
                                            <p class="card-title">Campuses in Institute <span class="text-red-500">*</span>
                                            </p>
                                            <div
                                                class="inline-flex items-center justify-center rounded-lg bg-slate-100 dark:bg-slate-700 w-9 h-9">
                                                <i class="mgc_compass_line"></i>
                                            </div>
                                        </div>

                                        <div class="flex flex-col gap-3">
                                            <div class="">
                                                <label for="campuses" class="mb-2 block">Campus Areas</label>
                                                <select name="campuses[]" id="campuses" class="selectize"
                                                    multiple="multiple">
                                                    @isset($campuses)
                                                        @foreach ($campuses as $campus)
                                                            <option value="{{ $campus->id }}">{{ $campus->name }}</option>
                                                        @endforeach
                                                    @endisset


                                                </select>
                                                @error('campuses')
                                                    <div class=" text-danger">{{ $message }}</div>
                                                @enderror
                                            </div>


                                        </div>
                                    </div>
                                @else
                                @endif

                                @if ($courses->isNotEmpty())
                                    <div class="card p-6">
                                        <div class="flex justify-between items-center mb-4">
                                            <p class="card-title">Courses in Institute <span class="text-red-500">*</span>
                                            </p>
                                            <div
                                                class="inline-flex items-center justify-center rounded-lg bg-slate-100 dark:bg-slate-700 w-9 h-9">
                                                <i class="mgc_compass_line"></i>
                                            </div>
                                        </div>

                                        <div class="flex flex-col gap-3">
                                            <div class="">
                                                <label for="courses" class="mb-2 block">Courses</label>
                                                <select name="courses[]" id="courses" class="selectize"
                                                    multiple="multiple">
                                                    @isset($courses)
                                                        @foreach ($courses as $course)
                                                            <option value="{{ $course->id }}">{{ $course->name }}</option>
                                                        @endforeach
                                                    @endisset


                                                </select>
                                                @error('courses')
                                                    <div class=" text-danger">{{ $message }}</div>
                                                @enderror
                                            </div>


                                        </div>
                                    </div>
                                @else
                                @endif
                                @if ($type_of_collages->isNotEmpty())
                                    <div class="card p-6">
                                        <div class="flex justify-between items-center mb-4">
                                            <p class="card-title">Type Of Institute <span class="text-red-500">*</span>
                                            </p>
                                            <div
                                                class="inline-flex items-center justify-center rounded-lg bg-slate-100 dark:bg-slate-700 w-9 h-9">
                                                <i class="mgc_compass_line"></i>
                                            </div>
                                        </div>

                                        <div class="flex flex-col gap-3">
                                            <div class="">
                                                <label for="type_of_college_id" class="mb-2 block">Type Of
                                                    Institute</label>
                                                <select name="type_of_college_id" id="type_of_college_id"
                                                    class="selectize">
                                                    @foreach ($type_of_collages as $type_of_collage)
                                                        <option value="{{ $type_of_collage->id }}">
                                                            {{ $type_of_collage->name }}
                                                        </option>
                                                    @endforeach


                                                </select>
                                                @error('type_of_collages')
                                                    <div class=" text-danger">{{ $message }}</div>
                                                @enderror
                                            </div>


                                        </div>
                                    </div>
                                @else
                                @endif


                                <div class="card p-6">
                                    <label for="video_link" class="mb-2 block">Institute Video Link</label>
                                    <input type="text" id="video_link" name="video_link"
                                        value="{{ old('video_link') }}" class="form-input"
                                        placeholder="Enter video link" aria-describedby="input-helper-text">
                                    @error('video_link')
                                        <div class=" text-danger">{{ $message }}</div>
                                    @enderror

                                </div>

                                <div class="card p-6">
                                    <label for="ranking_number" class="mb-2 block">Ranking Number Of Institute <span
                                            class="text-red-500">*</span></label>
                                    <input type="text" id="ranking_number" name="ranking_number"
                                        value="{{ old('ranking_number') }}" class="form-input"
                                        placeholder="Enter Ranking Number" aria-describedby="input-helper-text">
                                    @error('ranking_number')
                                        <div class=" text-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="card p-6">
                                    <label for="meta_keywords" class="mb-2 block">Meta Keywords
                                        <span class="text-red-500 text-xs">Separate by Coma [Example:
                                            tag1,tag2]</span></label>
                                    <div class="form-group">
                                        <input name="meta_keywords" class="form-controllar"
                                            placeholder="Keywords should be separated by commas" type="text"
                                            id="tag-keyword" value="{{ old('meta_keywords') }}">
                                    </div>

                                    @error('meta_keywords')
                                        <div class=" text-danger">{{ $message }}</div>
                                    @enderror
                                </div>

                                <div class="card p-6">
                                    <label for="meta_description" class="mb-2 block">Meta Description
                                    </label>
                                    <textarea id="meta_description" name="meta_description" class="form-input" rows="3">{{ old('meta_keywords') }}</textarea>
                                    @error('meta_keywords')
                                        <div class=" text-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>

                            <div class="lg:col-span-3 space-y-6">
                                <div class="card p-6">


                                    <div class="flex flex-col gap-3">
                                        <div class="">
                                            <label for="name" class="mb-2 block">Name Of Institute <span
                                                    class="text-red-500">*</span></label>
                                            <input type="text" id="name" name="name"
                                                value="{{ old('name') }}" class="form-input" placeholder="Enter name"
                                                aria-describedby="input-helper-text" required>
                                            @error('name')
                                                <div class=" text-danger">{{ $message }}</div>
                                            @enderror

                                        </div>
                                        <div class="">
                                            <label for="slug" class="mb-2 block">Slug <span
                                                    class="text-red-500">*</span></label>
                                            <input type="text" id="slug" name="slug"
                                                value="{{ old('slug') }}" class="form-input" placeholder="Enter Slug"
                                                aria-describedby="input-helper-text" required>
                                            @error('slug')
                                                <div class=" text-danger">{{ $message }}</div>
                                            @enderror
                                        </div>
                                        <div class="">
                                            <label for="summary" class="mb-2 block">Summary
                                                <span class="text-red-500">*</span></label>
                                            <textarea id="summary" id="summary" name="summary" class="form-input" rows="3" required>{{ old('summary') }}</textarea>
                                            @error('summary')
                                                <div class=" text-danger">{{ $message }}</div>
                                            @enderror
                                        </div>
                                        <div class="">
                                            <label for="about_college" class="mb-2 block">About Of Institute
                                                <span class="text-red-500">*</span></label>
                                            @error('about_college')
                                                <div class=" text-danger">{{ $message }}</div>
                                            @enderror
                                            <div id="editorQuill" style="height: 300px;">
                                            </div>
                                            <input type="hidden" name="about_college" id="about_college">

                                        </div>
                                        <div class="">
                                            <label for="admisstion_current_time" class="mb-2 block">Admission Information
                                            </label>
                                            @error('admisstion_current_time')
                                                <div class=" text-danger">{{ $message }}</div>
                                            @enderror
                                            <textarea id="admisstion_current_time" name="admisstion_current_time" class="form-input" rows="3">{{ old('admisstion_current_time') }}</textarea>

                                        </div>
                                        <div class="">
                                            <label for="schollership" class="mb-2 block">Schollership Information
                                            </label>
                                            @error('schollership')
                                                <div class=" text-danger">{{ $message }}</div>
                                            @enderror
                                            <textarea id="schollership" name="schollership" class="form-input" rows="3">{{ old('schollership') }}</textarea>
                                        </div>
                                        <div class="">
                                            <label for="faculty" class="mb-2 block">Faculty Information
                                            </label>
                                            @error('faculty')
                                                <div class=" text-danger">{{ $message }}</div>
                                            @enderror
                                            <textarea id="faculty" name="faculty" class="form-input" rows="3">{{ old('faculty') }}</textarea>
                                        </div>
                                        <div class="">
                                            <label for="hostel" class="mb-2 block">Hostel Information
                                            </label>
                                            @error('hostel')
                                                <div class=" text-danger">{{ $message }}</div>
                                            @enderror
                                            <textarea id="hostel" name="hostel" class="form-input" rows="3">{{ old('hostel') }}</textarea>
                                        </div>
                                        <div class="">
                                            <label for="placement" class="mb-2 block">Placement Information
                                            </label>
                                            @error('placement')
                                                <div class=" text-danger">{{ $message }}</div>
                                            @enderror
                                            <textarea id="placement" name="placement" class="form-input" rows="3">{{ old('placement') }}</textarea>
                                        </div>





                                    </div>
                                </div>
                            </div>


                        </div>

                    </main>
                </form>
            </div>
        </div> --}}
@endsection
