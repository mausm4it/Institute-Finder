@extends('frontend.layouts.app')
@section('header')
    @include('frontend.layouts.header2')
@endsection
@section('content')
    <div class="page-title-area style-two pd-t-60 pd-b-45 bg-image bg-overlay"
        style="background-image:url('assets/images/header/1.jpg')">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="page-header-content">
                        <h2 class="page-title">{{ $course->name }}</h2>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="todo-grid-list-block mt-5 mb-5">





        <div class="todo-grid-list-block ml-t-60 pd-b-100 mt-5">
            <div class="container">

                @if ($colleges->isNotEmpty() && $colleges != null)
                    <div class="row">
                        @foreach ($colleges as $college)
                            @php

                                $total_rating = $college->reviews->sum('rating_number');
                                $total_count = $college->reviews->count();
                                $avarage_rating = $total_count > 0 ? $total_rating / $total_count : 0;

                            @endphp
                            <div class="col-lg-4 col-md-6">
                                <div class="todo-item">
                                    <div class="todo-thumbnail-area">
                                        <figure class="item-thumb">
                                            <img src="{{ asset('storage/app/' . $college->thumbline) }}" alt="Thmubnail">
                                        </figure><!--./ item-thumb -->
                                        <div class="todo-overlay-info">
                                            <div class="todo-type-cat">
                                                <a href="#" class="offer">{{ $college->type_of_college->name }}</a>
                                                <a href="#" class="nightlife">Rank:
                                                    {{ $college->ranking_number }}</a>
                                            </div><!--./ todo-type-cat -->
                                            <div class="todo-meta-bottom">
                                                <div class="todo-rating">
                                                    <span>{{ number_format($avarage_rating, 1) }}</span>{{ $total_count }}
                                                    Ratings
                                                </div><!--./ todo-rating -->

                                                <div style="margin-right: -10px">
                                                    <form action="{{ route('save_list_post') }}" method="POST">
                                                        @csrf
                                                        @if (auth()->user())
                                                            <input type="hidden" name="users"
                                                                value="{{ auth()->user()->id }}">
                                                        @endif

                                                        <input type="hidden" value="{{ $college->id }}" name="colleges">
                                                        <button type="submit" class="btn btn-primary"
                                                            style=" border-radius: 10%;"><i
                                                                class="fa fa-heart"></i></button>


                                                        </button>

                                                    </form>


                                                </div>
                                                <div class="save">
                                                    <a href="{{ route('compare') }}" class="">
                                                        <i style="font-size:24px" class="fa">&#xf079;</i>
                                                    </a>
                                                </div><!--./ save -->
                                            </div><!--./ todo-meta-bottom -->
                                        </div><!--./ section-header -->
                                    </div><!--./ todo-overlay-info -->
                                    <div class="todo-content">
                                        <h3 class="title"><a
                                                href="{{ route('college-details', $college->slug) }}">{{ $college->name }}</a>
                                        </h3>
                                        <div class="todo-price-status">
                                            <div class="todo-price">
                                                @if ($college->type_of_college != null && $college->type_of_college != '')
                                                    {{ $college->type_of_college->name }}
                                                @endif
                                            </div>
                                            <div class="todo-status">Open Now</div>
                                        </div><!--./ todo-footer -->
                                        <div class="todo-meta">
                                            <div class="todo-location">
                                                <span class="icon-location"></span>
                                                Campuses:
                                                @foreach ($college->campuses as $item)
                                                    {{ $item->name }} ,
                                                @endforeach

                                            </div><!--./ todo-location -->
                                            {{-- <div class="todo-number">
                                        <span class="icon-phone"></span>
                                        Courses:
                                        @foreach ($college->courses as $item)
                                            {{ $item->name }} ,
                                        @endforeach
                                    </div><!--./ todo-number --> --}}
                                        </div><!--./ todo-meta -->
                                    </div><!--./ todo-content -->
                                </div>
                            </div><!--~./ end todo item ~-->
                        @endforeach

                        {{ $colleges->links('pagination::bootstrap-4') }}
                    </div>
                @endif
                <!--./ row -->
            </div><!--./ container -->
        </div>
    @endsection
