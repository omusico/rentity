@extends('core.master')
@section('content')
<section class="standAloneForms">
<h1 class="text-center">Please enter you new password</h1>
<div class="container">
    <div class="row">
        <div class="col-md-6 col-md-offset-3">
            <div class="form-panel">
                <form class="form-horizontal" id="resetPassword" action="/password/reset" method="post">
                    {!! csrf_field() !!}
                    <input type="hidden" name="token" value="{{ $token }}">
                    <div class="form-group">
                        <div class="input-group">
                            <div class="col-sm-12 text-center">
                            @if($errors->has())
                                @foreach ($errors->all() as $error)
                                    <div class="label label-danger">{{ $error }}</div>
                                @endforeach
                            @endif
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="input-group">
                            <div class="col-sm-5">
                                <label class="control-label" for="email">Email</label>
                            </div>
                            <div class="col-sm-7">
                                <input class="form-control" type="email" name="email" id="email" value="{{ old('email') }}">
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="input-group">
                            <div class="col-sm-5">
                                <label class="control-label" for="password">New Password</label>
                            </div>
                            <div class="col-sm-7">
                                <input class="form-control" type="password" name="password" id="password">
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="input-group">
                            <div class="col-sm-5">
                                <label class="control-label" for="password">Verify New Password</label>
                            </div>
                            <div class="col-sm-7">
                                <input class="form-control" type="password" name="password_confirmation" id="password">
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="input-group">
                            <div class="col-sm-12 text-center">
                                <button type="submit" class="btn btn-info">
                                    <span class="fa fa-save"></span> Save
                                </button>
                            </div>
                        </div>
                    </div>

                </form>

            </div>
        </div>
    </div>
</div>
</section>
@endsection
@section('test')
<form method="POST" action="/password/reset">
    {!! csrf_field() !!}
    <input type="hidden" name="token" value="{{ $token }}">

    <div>
        <input type="email" name="email" value="{{ old('email') }}">
    </div>

    <div>
        <input type="password" name="password">
    </div>

    <div>
        <input type="password" name="password_confirmation">
    </div>

    <div>
        <button type="submit">
            Reset Password
        </button>
    </div>
</form>
@endsection