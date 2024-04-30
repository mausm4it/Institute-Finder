@extends('frontend.user_panel.layouts.app')
@section('content')
    <div class="dashboard-contant dashboard-setting-area">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="dashboard-page-title">
                        <h3 class="title">My Setting</h3>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-8">
                    <div class="overall-info-area default-form-area">


                        <form class="default-form" action="{{ route('settings-update') }}" method="POST"
                            enctype="multipart/form-data">@csrf
                            <div class="row">
                                <div class="col-lg-12">
                                    <h3 class="headline">Overall Information</h3>
                                    <div class="form-group">
                                        <label for="name" class="text-info">Name</label>
                                        <input type="text" name="name" value="{{ $user->name }}"
                                            class="form-controllar" placeholder="Enter Full Name">
                                        @error('name')
                                            <div class=" text-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label for="email" class="text-info">Email</label>
                                        <input type="email" value="{{ $user->email }}" name="email"
                                            class="form-controllar" placeholder="Enter Email">
                                        @error('email')
                                            <div class=" text-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label for="phone" class="text-info">Phone</label>
                                        <input type="text" name="phone" value="{{ $user->phone }}"
                                            class="form-controllar" placeholder="Ender Phone">
                                        @error('phone')
                                            <div class=" text-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label for="user_profile" class="text-info">Profile Picture</label>
                                        <input onchange="BlogImage(event)" value="{{ $user->user_profile }}"
                                            class="form-control" type="file" name="user_profile" value="">
                                        <img id="blog_imagePreview" src="#" alt="Preview"
                                            style="display:none; max-width: 100%; max-height: 100px;">
                                        @error('user_profile')
                                            <div class=" text-danger">{{ $message }}</div>
                                        @enderror
                                    </div>

                                </div><!--~./ col-lg-6 ~-->

                                <div class="col-12">
                                    <div class="form-submit form-group">
                                        <button type="submit" class="btn btn-default">Save</button>

                                    </div>
                                </div>
                            </div>
                        </form>


                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="overall-info-area default-form-area">


                        <form method="post" action="{{ route('password.update') }}" class="mt-6 space-y-6">
                            @csrf
                            @method('put')

                            <div class="row">
                                <div class="col-12">
                                    <h3 class="headline">Change Password</h3>
                                    <div class="form-group">
                                        <label for="current_password" class="text-info">Current Password</label>
                                        <input name="current_password" type="password" class="form-controllar"
                                            placeholder="Current Password">

                                        @error('current_password')
                                            <div class=" text-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label for="password" class="text-info">New Password</label>
                                        <br>
                                        <input class="form-controllar" name="password" type="password"
                                            placeholder="New Password">
                                        @error('password')
                                            <div class=" text-danger">{{ $message }}</div>
                                        @enderror
                                    </div>

                                    <div class="form-submit form-group">
                                        <button type="submit" class="btn btn-default">Change Password</button>
                                    </div>
                                </div><!--~./ col-lg-6 ~-->
                            </div>
                        </form><!--~./ default-form ~-->
                    </div><!--~./ default-form-area ~-->
                </div>
            </div>
        </div>
    </div>
@endsection
