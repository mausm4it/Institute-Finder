@extends('layouts.app')

@section('content')
    @isset($blog->title)
        <h2 class="bg-primary text-white p-3 text-center text-lg">Update {{ $blog->title }}</h2>
        @if ($errors->any())
            <div class="bg-danger/25 text-danger  text-sm rounded-md p-4" role="alert">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form id="createblog" action="{{ route('update-blog', $blog->id) }}" method="post" enctype="multipart/form-data">
            @csrf <main class="flex-grow p-6 ">



                <div class="grid lg:grid-cols-4 gap-6">
                    <div class="col-span-1 flex flex-col gap-6">
                        <div class="card p-6">
                            <div class="flex justify-between items-center mb-4">
                                <h4 class="card-title">update Blog Thumbline
                                </h4>

                                <div
                                    class="inline-flex items-center justify-center rounded-lg bg-slate-100 dark:bg-slate-700 w-9 h-9">

                                    <i class="mgc_add_line"></i>
                                </div>
                            </div>



                            <div class="">
                                <input onchange="BlogImage(event)" class="form-control" type="file" name="blog_image"
                                    value="{{ $blog->blog_image }}">
                                <img id="blog_imagePreview" src="#" alt="Preview"
                                    style="display:none; max-width: 100%; max-height: 100px;">
                                @error('blog_image')
                                    <div class=" text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>

                        <div class="card p-6">
                            <div class="flex justify-between items-center mb-4">
                                <p class="card-title">Blog Category</p>
                                <div
                                    class="inline-flex items-center justify-center rounded-lg bg-slate-100 dark:bg-slate-700 w-9 h-9">
                                    <i class="mgc_compass_line"></i>
                                </div>
                            </div>

                            <div class="flex flex-col gap-3">
                                <div class="">
                                    <label for="category_id" class="mb-2 block">Catagory</label>
                                    <select name="category_id" id="category_id" class="form-select">
                                        @isset($blog->category_id)
                                            <option value="{{ $blog->category_id }}">{{ $blog->category->name }}</option>
                                        @endisset

                                        @isset($categories)
                                            @foreach ($categories as $item)
                                                <option value="{{ $item->id }}">
                                                    {{ $item->name }}
                                                </option>
                                            @endforeach
                                        @endisset



                                    </select>
                                    @error('category_id')
                                        <div class=" text-danger">{{ $message }}</div>
                                    @enderror
                                </div>


                            </div>
                        </div>


                        <div class="card p-6">
                            <label for="meta_keywords" class="mb-2 block">Meta Keywords
                                <span class="text-red-500 text-xs">Please Write With Coma [Example:
                                    keywords1,keywords2,keywords3]</span></label>
                            <textarea id="meta_keywords" name="meta_keywords" class="form-input" rows="3">
                           {{ $blog->meta_keywords }}
                        </textarea>
                            @error('meta_keywords')
                                <div class=" text-danger">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="card p-6">
                            <label for="meta_description" class="mb-2 block">Meta Description
                            </label>
                            <textarea id="meta_description" name="meta_description" class="form-input" rows="3">
                           {{ $blog->meta_description }}
                        </textarea>
                            @error('meta_description')
                                <div class=" text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>

                    <div class="lg:col-span-3 space-y-6">
                        <div class="card p-6">


                            <div class="flex flex-col gap-3">
                                <div class="">
                                    <label for="title" class="mb-2 block">Blog Title <span
                                            class="text-red-500">*</span></label>
                                    <input type="text" id="title" name="title" value="{{ $blog->title }}"
                                        class="form-input" placeholder="Enter Title" aria-describedby="input-helper-text">
                                    @error('title')
                                        <div class=" text-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="">
                                    <label for="slug" class="mb-2 block">Blog Slug <span
                                            class="text-red-500">*</span></label>
                                    <input type="text" id="slug" name="slug" value="{{ $blog->slug }}"
                                        class="form-input" placeholder="Enter Slug" aria-describedby="input-helper-text">
                                    @error('slug')
                                        <div class=" text-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="">
                                    <label for="summary" class="mb-2 block">Blog Summary
                                        <span class="text-red-500">*</span></label>
                                    <textarea id="summary" name="summary" class="form-input" rows="3">
                                                {{ $blog->summary }}

                </textarea>
                                    @error('summary')
                                        <div class=" text-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="">
                                    <label for="content" class="mb-2 block">Blog Description
                                        <span class="text-red-500">*</span></label>
                                    @error('content')
                                        <div class=" text-danger">{{ $message }}</div>
                                    @enderror
                                    <textarea id="content" name="content" class="form-input" rows="3"> {{ $blog->content }}</textarea>

                                </div>

                            </div>
                        </div>
                    </div>

                    <div class="lg:col-span-4 mt-5">
                        <div class="flex justify-end gap-3">
                            <a href="{{ route('blogs') }}"
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
                </div>

            </main>
        </form>
    @endisset


@endsection
