@extends('layouts.front-app')

@section('title', 'Réinitialisation')

@section('auth-content')
    <div class="container d-flex w-100 h-100 p-3 mx-auto flex-column">
        <div class="row shadow-lg  mt-auto">
            <div class="d-none d-sm-block col-md-12 col-sm-12 col-lg-7 col-xl-7 bg-gray-400">
                <div class="mt-3 mr-4">
                    <h6 class="text-md text-primary-2 text-right font-weight-bold">
                        <a href="{{ route('welcome') }}"><img src="/front-office/brand/logo.png" width="125"></a>
                    </h6>

                    <p class="text-right">
                        Lorem ipsum dolor sit amet tempor incid <br> ut labore et dolore magna aliqua.
                    </p>
                </div>

                <img class="mx-auto d-flex justify-content-center" src="/front-office/brand/forgot_password.svg" width="450px">
            </div>

            <div class="bg-light col-md-12 col-sm-12 col-lg-5 col-xl-5 p-5">
                <div class="mt-5">
                    <h6 class="d-block d-sm-none text-md text-primary-2 text-center font-weight-bold"><a href="{{ route('welcome') }}"><img src="/front-office/brand/logo.png" width="125"></a></h6>

                    <h1 class="mt-3 text-capitalize h3 font-weight-bold text-dark text-center">Nouveau mot de passe </h1>

                    <p class="text-center mt-1 mb-3">
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Alias autem culpa cumque dolores fugiat fugit quaerat.
                    </p>

                    <div class="mt-4">
                        <form method="POST" action="{{ route('update.password') }}">
                            @csrf

                            <div class="form-group">
                                <input name="username" type="text" class="@error('username') is-invalid @enderror form-control rounded-0" placeholder="Adresse E-mail" value="{{ old('username') }}" autofocus>
                                @error('username')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="form-group">
                                <input name="password" type="password" class="@error('password') is-invalid @enderror form-control rounded-0" placeholder="Nouveau mot de passe">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="form-group">
                                <input type="password" name="password_confirmation" class="form-control form-control rounded-0" placeholder="Confirmation mot de passe">
                            </div>

                            <div class="form-group mt-3 d-flex justify-content-end">
                                <a href="{{ route('reset.email') }}" class="btn btn-dark btn-md pl-5 pr-5 rounded-0 shadow-sm">Retour</a>
                                <button type="submit" class="btn btn-primary btn-md ml-2 px-5 rounded-0 shadow-sm">Valider</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

        <footer class="footer mt-auto py-2">
            <div class="container text-center text-xs text-white ">
                <small>&copy; Copyright 2020. Designed By <b>Simon Stromae</b></small>
            </div>
        </footer>
    </div>
@endsection


@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Reset Password') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('password.update') }}">
                        @csrf


                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ $email ?? old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Reset Password') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
