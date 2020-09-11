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

                    <p class="text-xs text-right">
                        Lorem ipsum dolor sit amet tempor incid <br> ut labore et dolore magna aliqua.
                    </p>
                </div>

                <img class="mx-auto d-flex justify-content-center" src="/front-office/brand/forgot_password.svg" width="450px">
            </div>

            <div class="bg-light col-md-12 col-sm-12 col-lg-5 col-xl-5 p-5">
                <div class="mt-5">
                    <h6 class="d-block d-sm-none text-md text-primary-2 text-center font-weight-bold"><a href="{{ route('welcome') }}"><img src="/front-office/brand/logo.png" width="125"></a></h6>

                    <h1 class="mt-3 text-capitalize h3 font-weight-bold text-dark text-center">Réinitialisation </h1>

                    <p class="text-xs text-center mt-1">
                        Entrez votre adresse e-mail et nous enverrons des instructions sur comment réinitialiser votre mot de passe
                    </p>

                    <div class="text-xs">
                        <form method="POST" action="{{ route('password.email') }}">
                            @csrf

                            <div class="form-group">
                                <input name="email" type="text" id="email" class="@error('email') is-invalid @enderror text-xs form-control rounded-0 bg-transparent" placeholder="Adresse E-mail" value="{{ old('email') }}" required autocomplete="email" autofocus>
                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="form-group mt-3">
                                <button type="submit" class="btn btn-primary btn-md btn-block pl-5 pr-5 rounded-0 text-xs shadow-sm">Envoyer</button>
                            </div>
                        </form>

                        <p class="text-center">
                            <i class="fa fa-arrow-left text-primary-2"></i> <a href="{{ route('login') }}" class="text-primary-2">Se Connecter</a>
                        </p>
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
