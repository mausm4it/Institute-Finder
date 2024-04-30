@extends('frontend.user_panel.layouts.app')
@section('content')
    <div class="dashboard-contant dashboard-history-area">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="dashboard-page-title">
                        <h3 class="title">My Institute Save List</h3>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="dashboard-history-table">
                        <div class="table-responsive pd-t-20 mt-15">
                            <table class="table">
                                <tr>
                                    <th>Institute Name</th>

                                    <th>Save Date</th>

                                    <th>Action</th>
                                </tr>
                                @foreach ($save_lists as $item)
                                    <tr>
                                        @foreach ($item->colleges as $college)
                                            <td><a
                                                    href="{{ route('college-details', $college->slug) }}">{{ $college->name }}</a>
                                            </td>
                                            <td>{{ $item->created_at->format('F j, Y \a\t H.i A') }}</td>
                                            <td><button type="button" class="btn btn-danger" data-toggle="modal"
                                                    data-target="#deleteModal">
                                                    Delete
                                                </button>
                                                <div class="modal fade" id="deleteModal" tabindex="-1" role="dialog"
                                                    aria-labelledby="deleteModalLabel" aria-hidden="true">
                                                    <div class="modal-dialog" role="document">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <h5 class="modal-title" id="deleteModalLabel">Confirm Delete
                                                                </h5>
                                                                <button type="button" class="close" data-dismiss="modal"
                                                                    aria-label="Close">
                                                                    <span aria-hidden="true">&times;</span>
                                                                </button>
                                                            </div>
                                                            <div class="modal-body">
                                                                Are you sure you want to delete this item?
                                                            </div>
                                                            <div class="modal-footer">
                                                                <button type="button" class="btn btn-secondary"
                                                                    data-dismiss="modal">Cancel</button>
                                                                <a href="{{ route('delete-save_list', $item->id) }}"
                                                                    type="button"
                                                                    class="btn btn-danger text-light">Delete</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                        </div>

                        </td>
                        @endforeach






                        </tr>
                        @endforeach


                        </table>
                    </div>
                </div><!--~./ default-form-table ~-->
            </div>
        </div>
    </div>
    </div>
@endsection
