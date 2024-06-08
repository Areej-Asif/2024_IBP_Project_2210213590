@extends('layouts.auth')

@section('content')

<div class="nk-block nk-block-middle nk-auth-body wide-xs" style="background-color:#d9ecfa;">
    <div class="brand-logo pb-4 text-center">
    <a href="/#" class="logo-link" style="display: flex; align-items: center; justify-content: center; height: 100px; width: 100%;">
    <div style="font-size: 36px; font-weight: bold; text-align: center; width: 100%;">Assignment</div>
</a>

    </div>
    <div class="card" style="border-radius:15px;margin:15px;box-shadow: 3px 3px whitesmoke;">
        <div class="card-inner card-inner-lg">
            <div class="nk-block-head">
                <div class="nk-block-head-content">
                    <h4 class="nk-block-title" style="text-align: center;font-weight:700;">{{ trans('Admin login') }}</h4>
                    <!-- <div class="nk-block-des">
                        <p>{{ trans('panel.access_dashboard') }}</p>
                    </div> -->
                </div>
            </div>
            <form method="POST" action="{{ route('login') }}">
                @csrf
                <div class="form-group">
                    <!-- <div class="form-label-group">
                        <label class="form-label" for="email">{{ trans('global.login_email') }}</label>
                    </div> -->
                    <div class="form-control-wrap">
                        <input type="text" class="form-control form-control-lg {{ $errors->has('registration_no') ? 'is-invalid' : '' }}" id="registration_no" name="registration_no" placeholder="{{ trans('Registration no') }}" value="{{ old('registration_no', null) }}" autofocus required>
                        @if($errors->has('registration_no'))
                            <div class="invalid-feedback">{{ $errors->first('registration_no') }}</div>
                        @endif
                    </div>
                </div>
                <div class="form-group">
                    <!-- <div class="form-label-group">
                        <label class="form-label" for="password">{{ trans('global.login_password') }}</label>
                    </div> -->
                    <div class="form-control-wrap">
                        <a href="#" class="form-icon form-icon-right passcode-switch lg" data-target="password">
                            <em class="passcode-icon icon-show icon ni ni-eye"></em>
                            <em class="passcode-icon icon-hide icon ni ni-eye-off"></em>
                        </a>
                        <input type="password" class="form-control form-control-lg {{ $errors->has('password') ? 'is-invalid' : '' }}" id="password" name="password" placeholder="{{ trans('global.login_password') }}" required>
                        @if($errors->has('password'))
                            <div class="invalid-feedback">{{ $errors->first('password') }}</div>
                        @endif

                    </div>
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-lg btn-block" style="border-radius:25px;background:#1b488c;color:white;">{{ trans('global.login') }}</button>
                </div>
            </form>
            <div class="form-note-s2 text-center pt-4 mt-2">
                <p>New On our platform? <a href="{{route('register')}}"  class="link">Sign up</a></p>
                <a class="text-primary" style="color:black;" href="{{ route('password.request') }}">{{ trans('global.forgot_password') }}</a>

            </div>
        </div>
    </div>
    <div class="text-center p2 mt-5">
        <p>&copy; FYP Design & Develop by M.Saeed Sheikh & Sahbat Mirza</p>
    </div>
</div>
@endsection
