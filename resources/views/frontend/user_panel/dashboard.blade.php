@extends('frontend.user_panel.layouts.app')
@section('content')
    <div id="dashboard_overview">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-6">
                    <div class="default-form-area">
                        <h3 class="headline">My Board</h3>
                        <div class="row">
                            <div class="col-xl-4">
                                <h6>Total Apply</h6>
                                <h4 class="color-primary bg-dark h1 text-center p-3 ">{{ $applies->count() }}</h4>
                            </div>
                            <div class="col-xl-4">
                                <h6>Total Save info</h6>

                                <h4 class="color-primary bg-dark h1 text-center p-3 ">{{ $save_lists->count() }}</h4>
                            </div>
                        </div>
                        <div id="simple-line-chart" class="ct-chart ct-golden-section"></div>
                    </div><!--~./ end default form area ~-->
                </div>


            </div>


        </div>
    </div>
@endsection
