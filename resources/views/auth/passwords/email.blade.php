@extends('layouts.auth')

@section('content')
<div class="nk-block nk-block-middle nk-auth-body wide-xs">

<div class="brand-logo pb-4 text-center">

<div class="card">
    <div class="card-inner card-inner-lg">
        <div class="nk-block-head">
            <div class="nk-block-head-content">
                <h5 class="nk-block-title">Reset password</h5>
                <div class="nk-block-des">
                    <p>If you forgot your password, we'll email you instructions to reset it.</p>
                </div>
            </div>
        </div>
        @if(session('status'))
        <div class="alert alert-success" role="alert">
            {{ session('status') }}
        </div>
        @endif
        <form method="POST" action="{{ route('password.email') }}">
            @csrf
            <div class="form-group">
                <div class="form-label-group">
                    <label class="form-label" for="email">{{ trans('global.login_email') }}</label>
                </div>
                <div class="form-control-wrap">
                    <input id="email" type="email" class="form-control form-control-lg{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" required autocomplete="email" autofocus value="{{ old('email') }}" placeholder="Enter your email address">
                    @if($errors->has('email'))
                        <div class="invalid-feedback">{{ $errors->first('email') }}</div>
                    @endif
                </div>
            </div>
            <div class="form-group">
                <button type="submit" class="btn btn-lg btn-primary btn-block">{{ trans('global.send_password') }}</button>
            </div>
        </form>
        <div class="form-note-s2 text-center pt-4">
            <a href="{{ route('login') }}"><strong>{{ trans('global.login') }}</strong></a>
        </div>
    </div>
</div>

</div>
</div>
@endsection
