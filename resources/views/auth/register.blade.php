@extends('layouts.front-app')

@section('title', 'S\'enregistrer')

@section('auth-content')
    <div class="container d-flex w-100 h-100 p-3 mx-auto flex-column">
        <div class="row shadow-lg  mt-auto">
            <div class="d-none d-sm-block col-md-12 col-sm-12 col-lg-7 col-xl-7 bg-gray-400">
                <div class="mt-3 mr-4">
                    <h6 class="text-md text-primary-2 text-right font-weight-bold"><a href="{{ route('welcome') }}"><img src="/front-office/brand/logo.png" width="125"></a></h6>

                    <p class="text-xs text-right">
                        Lorem ipsum dolor sit amet tempor incid <br> ut labore et dolore magna aliqua.
                    </p>

                    <a href="{{ route('login') }}" class="btn btn-sm rounded-0 float-right btn-outline-dark text-xs text-uppercase">
                        Se connecter
                    </a>
                </div>

                <img class="text-center mx-auto d-flex justify-content-center" src="/front-office/brand/welcome.svg" width="350px">
            </div>

            <div class="bg-light col-md-12 col-sm-12 col-lg-5 col-xl-5 p-5">
                <div class="ml-2 mt-4">
                    <h6 class="d-block d-sm-none text-md text-primary-2 text-center font-weight-bold"><a href="{{ route('welcome') }}"><img src="/front-office/brand/logo.png" width="125"></a></h6>

                    <h1 class="mt-3 mb-4 text-capitalize h3 font-weight-bold text-dark text-center">Inscription</h1>

                    <button class="btn btn-sm btn-block rounded-0 shadow-sm text-dark text-xs">S'enregister avec Google</button>

                    <p class="text-uppercase text-xs text-center mt-4">
                        <i class="divider"></i> Ou
                    </p>

                    <div class="text-xs m-t-5">
                        <form method="POST" action="{{ route('register') }}">
                            @csrf

                            <div class="form-group">
                                <input type="text" id="nom" name="name" class="@error('name') is-invalid @enderror text-xs form-control rounded-0 bg-transparent" placeholder="Nom" value="{{ old('name') }}" autofocus>
                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="form-group m-t-5">
                                <input type="text" id="email" name="email" class="@error('email') is-invalid @enderror text-xs form-control rounded-0 bg-transparent" placeholder="Adresse E-mail" value="{{ old('username') }}" autocomplete="email">
                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="form-group m-t-5">
                                <input type="password" id="password" name="password" class="@error('password') is-invalid @enderror text-xs form-control rounded-0 bg-transparent" placeholder="Mot de passe">
                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="form-group form-check mb-2 font-weight-normal">
                                <input type="checkbox" id="remember" class="form-check-input" checked="checked">
                                <label for="remember" class="form-check-label">En vous inscrivant, vous acceptez les <a href="#" class="text-danger-light">Termes & Conditions</a></label>
                            </div>

                            <div class="form-group mt-3">
                                <button type="submit" class="btn btn-primary btn-md pl-5 pr-5 rounded-0 text-xs shadow-sm">S'enregistrer</button>
                            </div>
                        </form>

                        <hr>

                        <p class="text-center border-right-0 border-bottom-0 border-left-0">
                            Etes-vous déjà membre ? <a href="{{ route('login') }}" class="text-primary">Se connecter</a>
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
