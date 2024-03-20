@extends('layouts.app')

@section('content')
    <div class="content-page">
        <div class="content">

            <!-- Start Content-->
            <div class="container-fluid">

                <!-- start page title -->
                <div class="row">
                    <div class="col-12">
                        <div class="page-title-box">
                            <div class="page-title-right">
                                <div class="hstack gap-2 flex-wrap">
                                    <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                                        data-bs-target="#exampleModal" data-bs-whatever="@mdo">Create Sub Category</button>

                                </div>
                                {{-- <ol class="breadcrumb m-0">
                                    <li class="breadcrumb-item"><a href="javascript: void(0);">Velonic</a></li>
                                    <li class="breadcrumb-item"><a href="javascript: void(0);">Tables</a></li>
                                    <li class="breadcrumb-item active">Data Tables</li>
                                </ol> --}}
                            </div>

                            <h4 class="page-title">Sub Categories</h4>
                            @include('alert.index')
                        </div>

                    </div>
                </div>
                <!-- end page title -->
                <div class="card-body">


                    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
                        aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">Create Sub Category</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                        aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <form method="POST" action="{{ route('create-sub-category') }}"
                                        enctype="multipart/form-data">
                                        @csrf
                                        <div class="mb-3">
                                            <label class="col-form-label">Name:</label>
                                            <input type="text" class="form-control" name="name"
                                                placeholder="Enter Category Name" value="{{ old('name') }}"
                                                id="name">
                                        </div>
                                        <div class="mb-3">
                                            <label class="col-form-label">Slug:</label>
                                            <input type="text" class="form-control" name="slug"
                                                placeholder="Enter Category Slug" value="{{ old('slug') }}"
                                                id="slug">
                                        </div>

                                        <div class="mb-3">
                                            <label class="col-form-label">Parent Category:</label>

                                            <select class="form-select" name="category_id">
                                                @if (!empty($categories))
                                                    @foreach ($categories as $category)
                                                        <option value="{{ $category->id }}">{{ $category->name }}</option>
                                                    @endforeach
                                                @endif


                                            </select>

                                        </div>

                                        <script>
                                            document.addEventListener('DOMContentLoaded', function() {
                                                var titleInput = document.getElementById('name');
                                                var slugInput = document.getElementById('slug');

                                                titleInput.addEventListener('keyup', function() {
                                                    var name = titleInput.value.trim().toLowerCase();
                                                    var slug = name.replace(/\s+/g, '-'); // Replace spaces with dashes
                                                    slugInput.value = slug;
                                                });
                                            });
                                        </script>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary"
                                                data-bs-dismiss="modal">Close</button>
                                            <button type="submit" class="btn btn-primary">Create</button>
                                        </div>
                                    </form>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="header-title">Sub Categories List</h4>

                            </div>
                            <div class="card-body">

                                <table id="basic-datatable" class="table table-striped dt-responsive nowrap w-100">
                                    <thead>
                                        <tr>

                                            <th>Name</th>
                                            <th>Slug</th>
                                            <th>Parent Category</th>
                                            <th>Edit</th>
                                            <th>Delete</th>

                                        </tr>
                                    </thead>






                                    <tbody>
                                        @foreach ($subCategories as $subCategory)
                                            <tr>

                                                <td>{{ $subCategory->name }}</td>
                                                <td>{{ $subCategory->slug }}</td>
                                                <td>{{ $subCategory->category->name }}</td>
                                                <td>


                                                    <div class="modal fade" id="editModal" tabindex="-1"
                                                        aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                        <div class="modal-dialog">
                                                            <div class="modal-content">
                                                                <div class="modal-header">
                                                                    <h5 class="modal-title" id="exampleModalLabel">
                                                                        Update Category</h5>
                                                                    <button type="button" class="btn-close"
                                                                        data-bs-dismiss="modal" aria-label="Close"></button>
                                                                </div>
                                                                <div class="modal-body">
                                                                    <form method="POST"
                                                                        action="{{ route('update-sub-category', $subCategory->id) }}"
                                                                        enctype="multipart/form-data">
                                                                        @csrf
                                                                        <div class="mb-3">
                                                                            <label class="col-form-label">Name:</label>
                                                                            <input type="text" class="form-control"
                                                                                name="name"
                                                                                placeholder="Enter Category Name"
                                                                                value="{{ $subCategory->name }}"
                                                                                id="name">
                                                                        </div>
                                                                        <div class="mb-3">
                                                                            <label class="col-form-label">Slug:</label>
                                                                            <input type="text" class="form-control"
                                                                                name="slug"
                                                                                placeholder="Enter Category Slug"
                                                                                value="{{ $subCategory->slug }}"
                                                                                id="slug">
                                                                        </div>



                                                                        <div class="mb-3">
                                                                            <label class="col-form-label">Parent
                                                                                Category:</label>

                                                                            <select class="form-select"
                                                                                name="category_id">

                                                                                <option
                                                                                    value="{{ $subCategory->category->id }}">
                                                                                    {{ $subCategory->category->name }}
                                                                                </option>

                                                                            </select>

                                                                        </div>

                                                                        <script>
                                                                            document.addEventListener('DOMContentLoaded', function() {
                                                                                var titleInput = document.getElementById('name');
                                                                                var slugInput = document.getElementById('slug');

                                                                                titleInput.addEventListener('keyup', function() {
                                                                                    var name = titleInput.value.trim().toLowerCase();
                                                                                    var slug = name.replace(/\s+/g, '-'); // Replace spaces with dashes
                                                                                    slugInput.value = slug;
                                                                                });
                                                                            });
                                                                        </script>
                                                                        <div class="modal-footer">
                                                                            <button type="button"
                                                                                class="btn btn-secondary"
                                                                                data-bs-dismiss="modal">Close</button>
                                                                            <button type="submit"
                                                                                class="btn btn-primary">Update</button>
                                                                        </div>
                                                                    </form>
                                                                </div>

                                                            </div>
                                                        </div>
                                                    </div>


                                                    <i class="ri-edit-circle-fill text-info" data-bs-toggle="modal"
                                                        data-bs-target="#editModal" data-bs-whatever="@mdo"></i>
                                                </td>
                                                <td>

                                                    <div class="modal fade" id="deleteModal" tabindex="-1"
                                                        aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                        <div class="modal-dialog">
                                                            <div class="modal-content">
                                                                <div class="modal-header">

                                                                    <button type="button" class="btn-close"
                                                                        data-bs-dismiss="modal"
                                                                        aria-label="Close"></button>
                                                                </div>
                                                                <div class="modal-body">
                                                                    <h3 class="text-danger">Are You Sure Detele This
                                                                        Sub Category</h3>

                                                                    <div class="modal-footer">
                                                                        <button type="button" class="btn btn-secondary"
                                                                            data-bs-dismiss="modal">Close</button>
                                                                        <a href="{{ route('delete-sub-category', $subCategory->id) }}"
                                                                            type="submit"
                                                                            class="btn btn-primary">Confirm</a>
                                                                    </div>
                                                                </div>

                                                            </div>
                                                        </div>
                                                    </div>


                                                    <i class="ri-delete-bin-3-fill text-danger" data-bs-toggle="modal"
                                                        data-bs-target="#deleteModal" data-bs-whatever="@mdo"></i>
                                                </td>

                                            </tr>
                                        @endforeach


                                    </tbody>
                                </table>

                            </div> <!-- end card body-->
                        </div> <!-- end card -->
                    </div><!-- end col-->
                </div> <!-- end row-->

            </div> <!-- container -->

        </div> <!-- content -->


    </div>
@endsection
