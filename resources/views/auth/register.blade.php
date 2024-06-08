@extends('layouts.auth')

@section('content')

<div class="nk-block nk-block-middle nk-auth-body wide-xs" >
    <div class="brand-logo pb-4 text-center">
    <a href="/#" class="logo-link" style="display: flex; align-items: center; justify-content: center; height: 100px; width: 100%;">
    <div style="font-size: 36px; font-weight: bold; text-align: center; width: 100%;">Assignment</div>
</a>

    </div>
    <div class="card shadow" style="border-radius:25px;">
        <div class="card-inner card-inner-lg">
            <div class="nk-block-head">
                <div class="nk-block-head-content">
                    <h4 class="nk-block-title">{{ trans('global.register') }}</h4>
                    <div class="nk-block-des">
                        <p>{{ trans('panel.access_dashboard') }}</p>
                    </div>
                </div>
            </div>
            <form method="POST" action="{{ route('register') }}">
                @csrf
                <div class="form-group">
                    <div class="form-label-group">
                        <label class="form-label" for="name">{{ trans('global.login_name') }}</label>
                    </div>
                    <div class="form-control-wrap">
                        <input type="text" class="form-control form-control-lg {{ $errors->has('name') ? 'is-invalid' : '' }}" id="name" name="name" placeholder="{{ trans('global.login_name') }}" value="{{ old('name', null) }}" autofocus required>
                        @if($errors->has('name'))
                            <div class="invalid-feedback">{{ $errors->first('name') }}</div>
                        @endif
                    </div>
                </div>
                <div class="form-group">
                    <div class="form-label-group">
                        <label class="form-label" for="email">{{ trans('Registration No') }}</label>
                    </div>
                    <div class="form-control-wrap">
                        <input type="text" class="form-control form-control-lg {{ $errors->has('registration_no') ? 'is-invalid' : '' }}" id="registration_no" name="registration_no" placeholder="{{ trans('Registration No') }}" value="{{ old('registration_no', null) }}"  required>
                        @if($errors->has('registration_no'))
                            <div class="invalid-feedback">{{ $errors->first('registration_no') }}</div>
                        @endif
                    </div>
                </div>
                <div class="form-group">
                    <div class="form-label-group">
                        <label class="form-label" for="email">{{ trans('global.login_email') }}</label>
                    </div>
                    <div class="form-control-wrap">
                        <input type="text" class="form-control form-control-lg {{ $errors->has('email') ? 'is-invalid' : '' }}" id="email" name="email" placeholder="{{ trans('global.login_email') }}" value="{{ old('email', null) }}"  required>
                        @if($errors->has('email'))
                            <div class="invalid-feedback">{{ $errors->first('email') }}</div>
                        @endif
                    </div>
                </div>
                <div class="form-group">
                    <!-- <div class="form-label-group">
                        <label class="form-label" for="password">{{ trans('global.login_password') }}</label>
                        <a class="link link-primary link-sm" href="{{ route('password.request') }}">{{ trans('global.forgot_password') }}?</a>
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
                        <div class="form-note-s2 text-center pt-1 " style="font-size:11px;font-weight:700;color:red;">
                        the password must contain one capital, one special and minimum 6 letters
            
                         </div>
                    </div>
                </div>
                <div class="form-group">
                    <div class="form-label-group">
                        <label class="form-label" for="password">{{ trans('global.login_password_confirmation') }}</label>
                    </div>
                    <div class="form-control-wrap">
                        <a href="#" class="form-icon form-icon-right passcode-switch lg" data-target="password_confirmation">
                            <em class="passcode-icon icon-show icon ni ni-eye"></em>
                            <em class="passcode-icon icon-hide icon ni ni-eye-off"></em>
                        </a>
                        <input type="password" class="form-control form-control-lg {{ $errors->has('password_confirmation') ? 'is-invalid' : '' }}" id="password_confirmation" name="password_confirmation" placeholder="{{ trans('global.login_password') }}" required>
                        @if($errors->has('password_confirmation'))
                            <div class="invalid-feedback">{{ $errors->first('password_confirmation') }}</div>
                        @endif
                    </div>
                </div>

                <div class="form-group">
                    <button type="submit" class="btn btn-lg  btn-block" style="border-radius:25px;background:#1b488c;color:white;">{{ trans('global.register') }}</button>
                </div>
            </form>
            <div class="form-note-s2 text-center pt-4"> Already have a Account? <a href="{{route('login')}}">Login</a>
            </div>
        </div>
    </div>
</div>
@endsection
