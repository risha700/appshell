@extends('layouts.app')
@section('hero')
    <div class="uk-height-large uk-background-cover uk-overflow-hidden uk-light uk-flex uk-flex-bottom" style="background-image: linear-gradient(to right top, #051937, #004d7a, #008793, #00bf72, #a8eb12);height: 150px;">

    </div>
@endsection
@section('content')
    <div class="uk-section">
        <div class="uk-container uk-container-center">

            <div class="uk-width-1-2@m uk-align-center">

                <div class="uk-padding uk-box-shadow-large">

                    <h2>Login</h2>

                    <form class="uk-form-stacked" role="form" method="POST" action="{{ route('login') }}">

                        {{ csrf_field() }}

                        <div>

                            <label class="uk-form-label">Email Address</label>
                            <div class="uk-inline uk-width-1-1">
                                <span class="uk-form-icon uk-form-icon-flip" uk-icon="icon: mail"></span>
                                <input id="email" type="email" class="uk-border-rounded uk-input{{ $errors->has('email') ? ' uk-form-danger' : '' }}"
                                       name="email" value="{{ old('email') }}" required autofocus>

                            </div>

                            @if ($errors->has('email'))
                                <div class="uk-alert-danger" uk-alert>
                                    {{ $errors->first('email') }}
                                </div>
                            @endif
                        </div>

                        <div class="uk-margin">
                            <label class="uk-form-label">Password</label>

                            <div class="uk-inline uk-width-1-1" >
                                {{--<span class="uk-form-icon uk-form-icon-flip" uk-icon="icon: lock"></span>--}}
                                <a id="show_password" uk-icon="icon: unlock"  class="uk-form-icon uk-form-icon-flip "></a>
                                <input id="password" type="password" class="uk-border-rounded uk-input{{ $errors->has('password') ? ' uk-form-danger' : '' }}" name="password" value="{{ old('password') }}" required>
                                {{--<a id="show_password" uk-icon="icon: unlock"></a>--}}
                            </div>
                            @if ($errors->has('password'))
                                <div class="uk-alert-danger" uk-alert>
                                    {{ $errors->first('password') }}
                                </div>
                            @endif
                        </div>

                        <div class="uk-margin">
                            <label><input class="uk-checkbox" type="checkbox" name="remember"{{ old('remember') ? ' checked' : '' }}> Remember me</label>
                        </div>

                        <div class="uk-margin">
                            <button class="uk-button uk-button-primary uk-border-rounded " type="submit" name="button">Login</button>
                            <a class="uk-float-right" href="{{ route('password.request') }}">
                                Forgot Your Password?
                            </a>
                        </div>

                    </form>

                </div>
            </div>

        </div>
    </div>
@endsection
