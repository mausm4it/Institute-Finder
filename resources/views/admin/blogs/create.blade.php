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

                            </div>
                            <div class="card-body">
                                <form>


                                    <div class="mb-3">
                                        <label class="form-label">Title</label>
                                        <input type="text" class="form-control" name="title"
                                            placeholder="Enter Blog Title" value="{{ old('title') }}">
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
                                            class="form-select">
                                            <option>Choose</option>
                                            <option>Option 1</option>
                                            <option>Option 2</option>
                                            <option>Option 3</option>
                                        </select>
                                    </div>

                                    <div class="mb-3">

                                        <label class="form-label">Description</label>
                                        <textarea name="description" id="editor"></textarea>

                                    </div>



                                    <div class="mb-2">
                                        <div class="form-check">
                                            <input type="checkbox" class="form-check-input" id="customCheck11">
                                            <label class="form-check-label" for="customCheck11">Check this custom
                                                checkbox</label>
                                        </div>
                                    </div>

                                    <button type="submit" class="btn btn-primary">Sign in</button>
                                </form>

                            </div> <!-- end card-body -->
                        </div> <!-- end card-->
                    </div> <!-- end col -->
                </div>
            </div>
        </div>
    </div>
@endsection
