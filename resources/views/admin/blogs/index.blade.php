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
                                    <button type="button" class="btn btn-primary">Create New Blog</button>

                                </div>

                            </div>

                            <h4 class="page-title">Blogs and News</h4>
                            @include('alert.index')
                        </div>

                    </div>
                </div>
                <!-- end page title -->

                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="header-title">Blogs List</h4>

                            </div>
                            <div class="card-body">

                                <table id="basic-datatable" class="table table-striped dt-responsive nowrap w-100">
                                    <thead>
                                        <tr>

                                            <th>Name</th>
                                            <th>Slug</th>
                                            <th>Edit</th>
                                            <th>Delete</th>

                                        </tr>
                                    </thead>






                                    <tbody>

                                        <tr>

                                            <td>1</td>
                                            <td>2</td>
                                            <td>



                                                <i class="ri-edit-circle-fill text-info"></i>
                                            </td>
                                            <td>

                                                <div class="modal fade" id="deleteModal" tabindex="-1"
                                                    aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                    <div class="modal-dialog">
                                                        <div class="modal-content">
                                                            <div class="modal-header">

                                                                <button type="button" class="btn-close"
                                                                    data-bs-dismiss="modal" aria-label="Close"></button>
                                                            </div>
                                                            <div class="modal-body">
                                                                <h3 class="text-danger">Are You Sure Detele This
                                                                    Blog</h3>

                                                                <div class="modal-footer">
                                                                    <button type="button" class="btn btn-secondary"
                                                                        data-bs-dismiss="modal">Close</button>
                                                                    <a href="" type="submit"
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
