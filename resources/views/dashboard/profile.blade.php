@extends('dashboard.master')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-9">

            <h1><span class="fa fa-user"></span> My Profile</h1>

            <div class="form-panel">
                <div class="row">

                    <div class="col-sm-4 col-sm-offset-4">
                        {!! Html::image('images/avatars/' . $user->avatar, 'Jeffrey Valdehueza',
                        ['class' => 'img-responsive img-circle img-thumbnail', 'width' => '250px']) !!}
                    </div>
                </div>
                <div class="profile-info">
                    <form id="saveProfile" class="form-horizontal">
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">

                        <!-- Avatar -->
                        <div class="form-group">
                            <div class="input-group">
                                <h2>Need a new pic?</h2>
                                <div class="col-sm-12">
                                    <input name="file" id="avatarUpload" type="file" class="file-loading" accept="image/*">
                                </div>
                            </div>
                        </div>
                        <hr>
                        <h2 class="text-center"><span class="fa fa-user"></span> Personal Details</h2>
                        <hr>
                        <div class="form-group">
                            <div class="input-group">
                                <div class="col-sm-2">
                                    <label class="control-label" for="firstName">First Name</label>
                                </div>
                                <div class="col-sm-10">
                                    <input class="form-control" type="text" name="firstName" id="firstName" value="{{$user->firstName}}">
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="input-group">
                                <div class="col-sm-2">
                                    <label class="control-label" for="lastName">Last Name</label>
                                </div>
                                <div class="col-sm-10">
                                    <input class="form-control" type="text" name="lastName" id="lastName" value="{{$user->lastName}}">
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="input-group">
                                <div class="col-sm-2">
                                    <label class="control-label" for="email">Email</label>
                                </div>
                                <div class="col-sm-10">
                                    <input class="form-control" type="text" name="email" id="email" value="{{$user->email}}" disabled>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="input-group">
                                <div class="col-sm-2">
                                    <label class="control-label" for="phone">Phone</label>
                                </div>
                                <div class="col-sm-10">
                                    <input class="form-control" type="number" name="phone" id="phone" value="{{$user->phone}}">
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="input-group">
                                <div class="col-sm-2">
                                    <label class="control-label" for="url">Website</label>
                                </div>
                                <div class="col-sm-10">
                                    <input class="form-control" type="url" name="url" id="url" value="{{$user->url}}">
                                </div>
                            </div>
                        </div>

                        <h2 class="text-center"><span class="fa fa-connectdevelop"></span> Social Media</h2>
                        <hr>

                        <div class="form-group">
                            <div class="input-group">
                                <div class="col-sm-2">
                                    <label class="control-label" for="facebook">Facebook</label>
                                </div>
                                <div class="col-sm-10">
                                    <input class="form-control" type="url" id="facebook" name="facebook" value="{{$user->facebook}}">
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="input-group">
                                <div class="col-sm-2">
                                    <label class="control-label" for="twitter">Twitter</label>
                                </div>
                                <div class="col-sm-10">
                                    <input class="form-control" type="url" name="twitter" id="twitter" value="{{$user->instagram}}">
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="input-group">
                                <div class="col-sm-2">
                                    <label class="control-label" for="instagram">Instagram</label>
                                </div>
                                <div class="col-sm-10">
                                    <input class="form-control" type="url" name="instagram" id="instagram" value="{{$user->instagram}}">
                                </div>
                            </div>
                        </div>

                        <h2 class="text-center">Tell us about yourself</h2>
                        <hr>
                        <div class="form-group">
                            <div class="input-group">
                                <label class="control-label" for="about"></label>
                                <div class="col-sm-12">
                                    <textarea class="form-control" name="about" id="about" cols="30" rows="10">{{$user->about}}</textarea>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="input-group">
                                <div class="col-sm-12 text-center">
                                    <button type="submit" class="btn btn-success">
                                        <span class="fa fa-save"> Save</span>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>

        <!-- Right Side Bar -->

        @include('dashboard.layouts.right-sidebar');

    </div>
</div>
@endsection
@section('load_to_header')
{!! Html::style('assets/vendors/fileinput/fileinput.min.css') !!}
@endsection
@section('load_to_footer')
{!! Html::script('assets/vendors/fileinput/fileinput.min.js') !!}
@endsection