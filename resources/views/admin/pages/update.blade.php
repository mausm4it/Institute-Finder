@extends('layouts.app')

@section('content')
    @isset($page->title)
        <h2 class="bg-primary text-white p-3 text-center text-lg">Update {{ $page->title }}</h2>
        @if ($errors->any())
            <div class="bg-danger/25 text-danger  text-sm rounded-md p-4" role="alert">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form id="createblog" action="{{ route('update-page', $page->id) }}" method="post" enctype="multipart/form-data">
            @csrf
            <main class="flex-grow p-6 ">



                <div class="grid lg:grid-cols-4 gap-6">


                    <div class="lg:col-span-3 space-y-6">
                        <div class="card p-6">


                            <div class="flex flex-col gap-3">
                                <div class="">
                                    <label for="title" class="mb-2 block">Page Title <span
                                            class="text-red-500">*</span></label>
                                    <input type="text" id="title" value="{{ old('title', $page->title) }}" name="title"
                                        class="form-input" placeholder="Enter Title" aria-describedby="input-helper-text"
                                        required>
                                    @error('title')
                                        <div class=" text-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="">
                                    <label for="slug" class="mb-2 block">Page Slug <span
                                            class="text-red-500">*</span></label>
                                    <input type="text" value="{{ old('slug', $page->slug) }}" id="slug" name="slug"
                                        class="form-input" placeholder="Enter Slug" aria-describedby="input-helper-text"
                                        required>
                                    @error('slug')
                                        <div class=" text-danger">{{ $message }}</div>
                                    @enderror
                                </div>

                                <div class="">
                                    <label for="description" class="mb-2 block">Page Description
                                        <span class="text-red-500">*</span></label>
                                    @error('description')
                                        <div class=" text-danger">{{ $message }}</div>
                                    @enderror
                                    <textarea id="about_college" name="description" class="form-input" rows="3" required> {{ old('description', $page->description) }}</textarea>
                                </div>
                                <div class="card p-6">
                                    <label for="meta_keywords" class="mb-2 block">Meta Keywords
                                        <span class="text-red-500 text-xs">Please Write With Coma
                                            [Example:
                                            keywords1,keywords2,keywords3]</span></label>
                                    <textarea id="meta_keywords" name="meta_keywords" class="form-input" rows="3">{{ old('meta_keywords', $page->meta_keywords) }}
                                                      
                                                    </textarea>
                                    @error('meta_keywords')
                                        <div class=" text-danger">{{ $message }}</div>
                                    @enderror
                                </div>

                                <div class="card p-6">
                                    <label for="meta_description" class="mb-2 block">Meta Description
                                    </label>
                                    <textarea id="meta_description" name="meta_description" class="form-input" rows="3">{{ old('meta_description', $page->meta_description) }}
                                                     
                                                    </textarea>
                                    @error('meta_description')
                                        <div class=" text-danger">{{ $message }}</div>
                                    @enderror
                                </div>


                            </div>
                        </div>
                    </div>

                    <div class="lg:col-span-4 mt-5">
                        <div class="flex justify-end gap-3">
                            <button
                                class="btn dark:text-gray-200 border border-slate-200 dark:border-slate-700 hover:bg-slate-100 hover:dark:bg-slate-700 transition-all"
                                data-fc-dismiss="" type="button">
                                Cancle
                            </button>
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
