@extends('layouts.app')

@section('content')
    <h2 class="bg-primary text-white p-3 text-center text-lg">Update Institute Info </h2>


    <form id="createblog" action="{{ route('update-college', $college->id) }}" method="post" enctype="multipart/form-data">
        @csrf <main class="flex-grow p-6 ">
            <div class="lg:col-span-4 ">
                <div class="flex justify-end gap-3 mb-2">
                    <a href="{{ route('college') }}"
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
                <div class="col-span-1 flex flex-col gap-6">
                    <div class="card p-6">
                        <h4>Institute Thumbline
                        </h4>
                        <br>




                        <div class="">
                            <input onchange="BlogImage(event)" class="form-control" type="file" name="thumbline"
                                value="{{ $college->thumbline }}">
                            <img id="blog_imagePreview" src="#" alt="Preview"
                                style="display:none; max-width: 100%; max-height: 100px;">
                        </div>
                    </div>
                    <div class="card p-6">
                        <h4>Institute Gallery
                        </h4>
                        <br>
                        <input class="form-control" type="file" name="gallery[]" value="{{ $college->gallery }}"
                            multiple>

                    </div>

                    <div class="card p-6">
                        <h4>Institute Brochuri File
                        </h4>
                        <br>




                        <div class="">
                            <input class="form-control" type="file" name="brochuri" value="{{ $college->brochuri }}">

                        </div>
                    </div>
                    @isset($cities)
                        <div class="card p-6">
                            <div class="flex justify-between items-center mb-4">
                                <p class="card-title">Campuses in Institute</p>
                                <div
                                    class="inline-flex items-center justify-center rounded-lg bg-slate-100 dark:bg-slate-700 w-9 h-9">
                                    <i class="mgc_compass_line"></i>
                                </div>
                            </div>

                            <div class="flex flex-col gap-3">
                                <div class="">
                                    <label for="category_id" class="mb-2 block">Campus Areas</label>
                                    <select name="cities[]" class="selectize" multiple="multiple">
                                        @isset($cities)
                                            @foreach ($cities as $city)
                                                <option value="{{ $city->name }}">{{ $city->name }}</option>
                                            @endforeach
                                        @endisset


                                    </select>
                                </div>


                            </div>
                        </div>
                    @endisset
                    @isset($courses)
                        <div class="card p-6">
                            <div class="flex justify-between items-center mb-4">
                                <p class="card-title">Courses in Institute</p>
                                <div
                                    class="inline-flex items-center justify-center rounded-lg bg-slate-100 dark:bg-slate-700 w-9 h-9">
                                    <i class="mgc_compass_line"></i>
                                </div>
                            </div>

                            <div class="flex flex-col gap-3">
                                <div class="">
                                    <label for="category_id" class="mb-2 block">Courses</label>
                                    <select name="courses[]" class="selectize" multiple="multiple">
                                        @isset($courses)
                                            @foreach ($courses as $course)
                                                <option value="{{ $course->name }}">{{ $course->name }}</option>
                                            @endforeach
                                        @endisset


                                    </select>
                                </div>


                            </div>
                        </div>
                    @endisset
                    @isset($type_of_collages)
                        <div class="card p-6">
                            <div class="flex justify-between items-center mb-4">
                                <p class="card-title">Type Of Institute</p>
                                <div
                                    class="inline-flex items-center justify-center rounded-lg bg-slate-100 dark:bg-slate-700 w-9 h-9">
                                    <i class="mgc_compass_line"></i>
                                </div>
                            </div>

                            <div class="flex flex-col gap-3">
                                <div class="">
                                    <label for="category_id" class="mb-2 block">Type Of Institute</label>
                                    <select name="type_of_collages[]" class="selectize" multiple="multiple">
                                        @isset($type_of_collages)
                                            @foreach ($type_of_collages as $type_of_college)
                                                <option value="{{ $type_of_college->name }}">{{ $type_of_college->name }}</option>
                                            @endforeach
                                        @endisset


                                    </select>
                                </div>


                            </div>
                        </div>
                    @endisset


                    <div class="card p-6">
                        <label for="video_link" class="mb-2 block">Institute Video Link<span
                                class="text-red-500">*</span></label>
                        <input type="text" id="video_link" name="video_link" value="{{ $college->video_link }}"
                            class="form-input" placeholder="Enter video link" aria-describedby="input-helper-text">
                    </div>
                    <div class="card p-6">
                        <label for="meta_keywords" class="mb-2 block">Meta Keywords
                            <span class="text-red-500 text-xs">Please Write With Coma [Example:
                                keywords1,keywords2,keywords3]</span></label>
                        <textarea id="meta_keywords" name="meta_keywords" class="form-input" rows="3">{{ $college->meta_keywords }}</textarea>
                    </div>

                    <div class="card p-6">
                        <label for="meta_description" class="mb-2 block">Meta Description
                        </label>
                        <textarea id="meta_description" name="meta_description" class="form-input" rows="3">{{ $college->meta_description }}</textarea>
                    </div>
                </div>

                <div class="lg:col-span-3 space-y-6">
                    <div class="card p-6">


                        <div class="flex flex-col gap-3">
                            <div class="">
                                <label for="name" class="mb-2 block">Name Of Institute <span
                                        class="text-red-500">*</span></label>
                                <input type="text" id="name" name="name" value="{{ $college->name }}"
                                    class="form-input" placeholder="Enter name" aria-describedby="input-helper-text">
                            </div>
                            <div class="">
                                <label for="slug" class="mb-2 block">Slug <span class="text-red-500">*</span></label>
                                <input type="text" id="slug" name="slug" value="{{ $college->slug }}"
                                    class="form-input" placeholder="Enter Slug" aria-describedby="input-helper-text">
                            </div>
                            <div class="">
                                <label for="summary" class="mb-2 block">Summary
                                    <span class="text-red-500">*</span></label>
                                <textarea id="summary" name="summary" class="form-input" rows="3">{{ $college->summary }}</textarea>
                            </div>
                            <div class="">
                                <label for="about_college" class="mb-2 block">About Of Institute
                                    <span class="text-red-500">*</span></label>
                                {{-- <div id="editorQuill" style="height: 300px;">
                                   
                                </div> --}}
                                <textarea id="about_college" name="about_college" class="form-input" rows="3"> {{ $college->about_college }}</textarea>

                                {{-- <input type="hidden" name="about_college" id="about_college"> --}}
                            </div>
                            <div class="">
                                <label for="admisstion_current_time" class="mb-2 block">Admission Information
                                </label>
                                <textarea id="admisstion_current_time" name="admisstion_current_time" class="form-input" rows="3"> {{ $college->admisstion_current_time }}</textarea>
                            </div>
                            <div class="">
                                <label for="schollership" class="mb-2 block">Schollership Information
                                </label>
                                <textarea id="schollership" name="schollership" class="form-input" rows="3">{{ $college->schollership }}</textarea>
                            </div>
                            <div class="">
                                <label for="faculty" class="mb-2 block">Faculty Information
                                </label>
                                <textarea id="faculty" name="faculty" class="form-input" rows="3">{{ $college->faculty }}</textarea>
                            </div>
                            <div class="">
                                <label for="hostel" class="mb-2 block">Hostel Information
                                </label>
                                <textarea id="hostel" name="hostel" class="form-input" rows="3">{{ $college->hostel }}</textarea>
                            </div>
                            <div class="">
                                <label for="placement" class="mb-2 block">Placement Information
                                </label>
                                <textarea id="placement" name="placement" class="form-input" rows="3">{{ $college->placement }}</textarea>
                            </div>



                            {{-- <div class="">
    <label for="product-status" class="mb-2 block">Status <span
            class="text-red-500">*</span></label>
    <div class="flex gap-x-6">


        <div class="flex">
            <input type="radio" name="radio-group" class="form-radio"
                id="private">
            <label for="private"
                class="text-sm text-gray-500 ms-2 dark:text-gray-400">Private</label>
        </div>

    </div>
</div> --}}

                            {{-- <div class="grid md:grid-cols-2 gap-3">
    <div class="">
        <label for="start-date" class="mb-2 block">Start Date</label>
        <input type="date" id="start-date" class="form-input">
    </div>

    <div class="">
        <label for="due-date" class="mb-2 block">Due Date</label>
        <input type="date" id="due-date" class="form-input">
    </div>
</div> --}}


                        </div>
                    </div>
                </div>


            </div>

        </main>
    </form>
@endsection
