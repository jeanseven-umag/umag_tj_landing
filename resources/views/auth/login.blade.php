<link rel="stylesheet" type="text/css" href="/css/admin.css" />
@extends('layouts.admin')
@section('content')
<div class="form-signin text-center">
    <form method="POST" action="{{ route('login') }}">
        @csrf
        <img class="mb-4" src="img/umag-logo-circle-slide.svg" alt="" width="120" height="57">
        <h1 class="h3 mb-3 fw-normal">Авторизация</h1>
        <div class="form-group row mb-2">
            <input id="login" class="form-control{{ $errors->has('login') ? ' is-invalid' : '' }}" placeholder="Enter Login" name="login" value="{{ old('login') }}" required autofocus>
            @if ($errors->has('login'))
            <span class="invalid-feedback">
            <strong>{{ $errors->first('login') }}</strong>
        </span>
            @endif
        </div>

        <div class="form-group row">
            <input id="password" placeholder="Password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

            @error('password')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>

        <button class="w-100 btn btn-lg btn-primary" type="submit">Войти</button>
    </form>
</div>
@endsection
<!--<div class="container">-->
<!--    <div class="row justify-content-center">-->
<!--        <div class="col-md-8">-->
<!--            <div class="card">-->
<!--                <div class="card-body">-->
<!--                    <form method="POST" action="{{ route('login') }}">-->
<!--                        @csrf-->
<!---->
<!--                        <div class="form-group row">-->
<!--                            <label for="login" class="col-sm-4 col-form-label text-md-right">{{ __('Login') }}</label>-->
<!---->
<!--                            <div class="col-md-6">-->
<!--                                <input id="login" class="form-control{{ $errors->has('login') ? ' is-invalid' : '' }}" name="login" value="{{ old('login') }}" required autofocus>-->
<!---->
<!--                                @if ($errors->has('login'))-->
<!--                                <span class="invalid-feedback">-->
<!--                                    <strong>{{ $errors->first('login') }}</strong>-->
<!--                                </span>-->
<!--                                @endif-->
<!--                            </div>-->
<!--                        </div>-->
<!---->
<!--                        <div class="form-group row">-->
<!--                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>-->
<!---->
<!--                            <div class="col-md-6">-->
<!--                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">-->
<!---->
<!--                                @error('password')-->
<!--                                    <span class="invalid-feedback" role="alert">-->
<!--                                        <strong>{{ $message }}</strong>-->
<!--                                    </span>-->
<!--                                @enderror-->
<!--                            </div>-->
<!--                        </div>-->
<!---->
<!---->
<!--                        <div class="form-group row mb-0">-->
<!--                            <div class="col-md-8 offset-md-4">-->
<!--                                <button type="submit" class="btn btn-primary">-->
<!--                                    {{ __('Login') }}-->
<!--                                </button>-->
<!--                            </div>-->
<!--                        </div>-->
<!--                    </form>-->
<!--                </div>-->
<!--                <form>-->
<!--                    <img class="mb-4" src="/docs/5.0/assets/brand/bootstrap-logo.svg" alt="" width="72" height="57">-->
<!--                    <h1 class="h3 mb-3 fw-normal">Please sign in</h1>-->
<!--                    <div class="form-group row">-->
<!--                        <label for="inputEmail" class="visually-hidden">{{ __('Login') }}</label>-->
<!--                        <div class="col-md-6">-->
<!--                            <input id="login" class="form-control{{ $errors->has('login') ? ' is-invalid' : '' }}" name="login" value="{{ old('login') }}" required autofocus>-->
<!---->
<!--                            @if ($errors->has('login'))-->
<!--                            <span class="invalid-feedback">-->
<!--                                    <strong>{{ $errors->first('login') }}</strong>-->
<!--                                </span>-->
<!--                            @endif-->
<!--                        </div>-->
<!--                    </div>-->
<!--                    <input type="email" id="inputEmail" class="form-control" placeholder="Email address" required autofocus>-->
<!--                    <label for="inputPassword" class="visually-hidden">Password</label>-->
<!--                    <input type="password" id="inputPassword" class="form-control" placeholder="Password" required>-->
<!--                    <div class="checkbox mb-3">-->
<!--                        <label>-->
<!--                            <input type="checkbox" value="remember-me"> Remember me-->
<!--                        </label>-->
<!--                    </div>-->
<!--                    <button class="w-100 btn btn-lg btn-primary" type="submit">Sign in</button>-->
<!--                    <p class="mt-5 mb-3 text-muted">&copy; 2017–2021</p>-->
<!--                </form>-->
<!--            </div>-->
<!--        </div>-->
<!--    </div>-->
<!--</div>-->

