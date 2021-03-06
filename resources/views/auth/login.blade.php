@extends('layouts.app')

@section('navbar')@endsection

@section('content')
<section class="section blue white-text pt_30" id="login-section">
    <div class="container">
        <div class="row">
            <div class="col s12 m6 offset-m3">
                <br>
                <br>
              <div class="card darken-1 center-align">
                <div class="card-content black-text">
                    <h3>
                        <i class="material-icons large">people</i> <br>
                        Social Login
                    </h3>
                 {{--  <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="email" class="col-sm-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required autofocus>

                                @if ($errors->has('email'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-md-6 offset-md-4">
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> {{ __('Remember Me') }}
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn blue btn-primary">
                                    {{ __('Login') }}
                                </button>

                                <a class="btn blue btn-link" href="{{ route('password.request') }}">
                                    {{ __('Forgot Your Password?') }}
                                </a>
                            </div>
                        </div>
                    </form> --}}
                    <div class="social-buttons">
                        <div class="row">
                            <div class="col s6">
                                <a class="waves-effect waves-light btn-large blue darken-4" href="{{route('auth.provider', 'facebook')}}">
                                    <i class="fa fa-facebook"></i> Facebook
                                </a>
                            </div>
                            <div class="col s6">
                                <a class="waves-effect waves-light btn-large red darken-1" href="{{route('auth.provider', 'google')}}">
                                    <i class="fa fa-google-plus"></i> Google+
                                </a>
                            </div>
                        </div>
                    </div>
                    <br>
                    <br>
                </div>
              </div>
              <br>
              <br>
            </div>
        </div>
    </div>
</section>
@endsection
