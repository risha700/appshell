@extends('layouts.app')
@section('hero')
    <div class="uk-height-large uk-background-cover uk-overflow-hidden uk-light uk-flex uk-flex-top" style="background-image: linear-gradient(to right top, #051937, #004d7a, #008793, #00bf72, #a8eb12);height: 150px;">
        <div class="uk-width-1-2@m uk-text-center uk-margin-auto uk-margin-auto-vertical">
        </div>
    </div>
@endsection
@section('content')
    <div class="uk-section">
        <div class="uk-container uk-container-center">

            <div class="uk-width-1-2@m uk-align-center">

                <div class="uk-padding uk-box-shadow-large">

                    <h2>Register</h2>

                    <form class="uk-form-stacked" role="form" method="POST" action="{{ route('register') }}">

                        {{ csrf_field() }}

                        <div>

                            <label class="uk-form-label">Name</label>

                            <div class="uk-inline uk-width-1-1">
                                <span class="uk-form-icon uk-form-icon-flip" uk-icon="icon: user"></span>
                                <input id="name" type="text" class="uk-border-rounded uk-input{{ $errors->has('name') ? ' uk-form-danger' : '' }}" name="name" value="{{ old('name') }}" required autofocus>

                            </div>

                            @if ($errors->has('name'))
                                <div class="uk-alert-danger" uk-alert>
                                    {{ $errors->first('name') }}
                                </div>
                            @endif
                        </div>

                        <div class="uk-margin">
                            <label class="uk-form-label">Email Address</label>
                            <div class="uk-inline uk-width-1-1">
                                <span class="uk-form-icon uk-form-icon-flip" uk-icon="icon: mail"></span>
                                <input id="email" type="email" class="uk-border-rounded uk-input{{ $errors->has('email') ? ' uk-form-danger' : '' }}" name="email" value="{{ old('email') }}" required>

                            </div>
                            @if ($errors->has('email'))
                                <div class="uk-alert-danger" uk-alert>
                                    {{ $errors->first('email') }}
                                </div>
                            @endif
                        </div>

                        <div class="uk-margin uk-form-password">
                            <label class="uk-form-label">Password</label>
                            <div class="uk-inline uk-width-1-1">
                                <input id="password" type="password" class="uk-border-rounded uk-input{{ $errors->has('password') ? ' uk-form-danger' : '' }}" name="password" value="{{ old('password') }}" required>
                                <a id="show_password" uk-icon="icon: unlock"  class="uk-form-icon uk-form-icon-flip"></a>

                            </div>


                            @if ($errors->has('password'))
                                <div class="uk-alert-danger" uk-alert>
                                    {{ $errors->first('password') }}
                                </div>
                            @endif
                        </div>

                        <div class="uk-margin">
                            <label class="uk-form-label">Confirm Password</label>
                            <div class="uk-inline uk-width-1-1">
                                <input id="password_confirmation" type="password" class="uk-border-rounded uk-input{{ $errors->has('password_confirmation') ? ' uk-form-danger' : '' }}" name="password_confirmation" value="{{ old('password_confirmation') }}" required>
                                <a id="show_password_confirmation" uk-icon="icon: unlock"  class="uk-form-icon uk-form-icon-flip"></a>

                            </div>
                            @if ($errors->has('password_confirmation'))
                                <div class="uk-alert-danger" uk-alert>
                                    {{ $errors->first('password_confirmation') }}
                                </div>
                            @endif
                        </div>

                        <div class="uk-margin">
                            <div class="uk-inline uk-width-1-1">
                                <input type="checkbox" id="checkbox" name="checkbox" class=" uk-checkbox " style="{{ $errors->has('checkbox') ? 'border-color:#f0506e' : '' }}"/>

                                <label class="uk-margin-left uk-text-bottom uk-text-background">Agree with terms and conditions</label>

                            </div>
                            @if ($errors->has('checkbox'))
                                <div class="uk-alert-danger" uk-alert>
                                    {{ $errors->first('checkbox') }}
                                </div>
                            @endif
                        </div>

                        <div class="uk-margin">
                            <button class="uk-button uk-button-primary uk-border-rounded" type="submit" name="button">Register</button>
                            <a class="uk-float-right" href="{{ route('login') }}">
                                Already have an account?
                            </a>
                        </div>

                    </form>

                </div>
            </div>

        </div>
    </div>
@endsection
