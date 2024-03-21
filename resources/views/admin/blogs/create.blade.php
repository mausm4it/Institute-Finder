@extends('layouts.app')

@section('content')
    <div class="content-page">
        <div class="content">


            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="header-title">Create Blog</h4>
                                @include('alert.index')

                            </div>
                            <div class="card-body">
                                <form action="{{ route('create-blog') }}" method="POST" enctype="multipart/form-data">
                                    @csrf


                                    <div class="mb-3">
                                        <label class="form-label">Title</label>
                                        <input type="text" class="form-control" id="title" name="title"
                                            placeholder="Enter Blog Title" value="{{ old('title') }}" required>
                                    </div>
                                    <div class="mb-3">
                                        <label class="form-label">Slug</label>
                                        <input type="text" class="form-control" name="slug" id="slug"
                                            placeholder="Enter Blog Slug" value="{{ old('slug') }}" required>

                                    </div>
                                    <div class="mb-3">
                                        <label class="form-label">Summary</label>
                                        <textarea class="form-control" name="summary" maxlength="120" pattern="[a-zA-Z0-9]+"
                                            title="Only 120 letters and numbers are allowed">{{ old('summary') }}</textarea>
                                        <br><span class="text-danger">Only 120 letters and numbers are allowed</span>
                                    </div>



                                    <div class="mb-3">
                                        <label class="form-label">Category</label>
                                        <select value="{{ old('blog_category_id') }}" name="blog_category_id"
                                            class="form-select" required>
                                            @foreach ($categories as $category)
                                                <option value="{{ $category->id }}">{{ $category->name }}</option>
                                            @endforeach


                                        </select>
                                    </div>
                                    <div class="mb-3">
                                        <label class="form-label">Blog Image</label>
                                        <input onchange="BlogImage(event)" class="form-control" type="file"
                                            name="blog_image" value="{{ old('blog_image') }}">
                                        <img id="blog_imagePreview" src="#" alt="Preview"
                                            style="display:none; max-width: 100%; max-height: 100px;">
                                    </div>

                                    <div class="mb-3">

                                        <label class="form-label">Description</label>

                                        <style>
                                            #snow-editor {

                                                height: 300px;
                                            }
                                        </style>
                                        <div id="snow-editor" name="content" style="height: 300px;">

                                        </div>



                                    </div>







                                    <button type="submit" class="btn btn-primary">Post Submit</button>
                                </form>

                            </div> <!-- end card-body -->
                        </div> <!-- end card-->
                    </div> <!-- end col -->
                </div>
            </div>
        </div>
    </div>
@endsection
