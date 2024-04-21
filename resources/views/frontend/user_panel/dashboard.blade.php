@extends('frontend.user_panel.layouts.app')
@section('content')
    <div id="dashboard_overview">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-6">
                    <div class="default-form-area">
                        <h3 class="headline">Best Institute</h3>
                        <div class="row">
                            <div class="col-xl-4">
                                <h6>This Week</h6>
                                <h4 class="color-primary">demo1</h4>
                            </div>
                            <div class="col-xl-4">
                                <h6>Previous Week</h6>
                                <h4 class="color-primary">demo2</h4>
                            </div>
                        </div>
                        <div id="simple-line-chart" class="ct-chart ct-golden-section"></div>
                    </div><!--~./ end default form area ~-->
                </div>
                <div class="col-lg-6">
                    <div class="default-form-area">
                        <h3 class="headline">Total Review</h3>
                        <div class="tickets text-center">
                            <div class="position-relative d-inline-block">
                                <div id="circle"></div>
                                <div class="seat-content">
                                    <h2>20</h2>
                                    <span>Review</span>
                                </div>
                            </div>
                            {{-- <div class="row">
                                <div class="col-6">
                                    <h6>Total Seats</h6>
                                    <h4 class="color-primary">$5500.00</h4>
                                </div>
                                <div class="col-6">
                                    <h6>Sold Seats</h6>
                                    <h4 class="color-primary">$6550.00</h4>
                                </div>
                            </div> --}}
                        </div><!--~./ end tickets ~-->
                    </div><!--~./ end default form area ~-->
                </div>

            </div>


        </div>
    </div>
@endsection
