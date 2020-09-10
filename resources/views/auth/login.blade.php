@extends('layouts.front-app')

@section('title', 'Se Connecter')

@section('auth-content')
    <div class="container d-flex w-100 h-100 p-3 mx-auto flex-column">
        <div class="row shadow-lg  mt-auto">
            <div class="d-none d-sm-block col-md-12 col-sm-12 col-lg-7 col-xl-7 bg-gray-400">
                <div class="mt-3 mr-4">
                    <h6 class="text-md text-primary-2 text-right font-weight-bold"><a href="{{ route('welcome') }}"><img src="/front-office/brand/logo.png" width="125"></a></h6>

                    <p class="text-xs text-right">
                        Lorem ipsum dolor sit amet tempor incid <br> ut labore et dolore magna aliqua.
                    </p>

                    <a href="{{ route('register') }}" class="btn btn-sm rounded-0 float-right btn-outline-dark text-xs text-uppercase">
                        S'enregistrer
                    </a>
                </div>

                <img class="mx-auto d-flex justify-content-center" src="/front-office/brand/signin.svg" width="350px" height="350px">
            </div>

            <div class="bg-light col-md-12 col-sm-12 col-lg-5 col-xl-5 p-5">
                <div class="ml-2 mt-4">
                    <h6 class="d-block d-sm-none text-md text-primary-2 text-center font-weight-bold"><a href="{{ route('welcome') }}"><img src="/front-office/brand/logo.png" width="125"></a></h6>

                    <h1 class="mt-3 mb-4 text-capitalize h3 font-weight-bold text-dark text-center">Connexion</h1>

                    <button class="btn btn-sm btn-block rounded-0 shadow-sm text-dark text-xs">Connectez-vous avec Google</button>

                    <p class="text-uppercase text-xs text-center my-4">
                        <i class="divider"></i> Ou Connectez-vous par email
                    </p>

                    <div class="text-xs">
                        <form method="POST" action="{{ route('login') }}">
                            @csrf

                            <div class="form-group">
                                <input type="text" name="username" class="@error('username') is-invalid @enderror text-xs form-control rounded-0 bg-transparent" placeholder="Adresse E-mail" value="{{ old('email') }}" autofocus>
                                @error('username')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="form-group m-t-5">
                                <input type="password" name="password" class="@error('password') is-invalid @enderror text-xs form-control rounded-0 bg-transparent" placeholder="Mot de passe">
                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="form-group form-check mb-2 font-weight-normal">
                                <input name="remember" type="checkbox" id="remember" class="form-check-input" {{ old('remember') ? 'checked' : '' }}>
                                <label for="remember" class="form-check-label">Rester connecté</label>
                            </div>

                            <div class="form-group mt-3">
                                <button type="submit" class="btn btn-primary btn-md pl-5 pr-5 rounded-0 text-xs shadow-sm">S'identifier</button>
                            </div>

                            @if (Route::has('password.request'))
                                <div class="form-group">
                                    <a href="{{ route('password.request') }}" class="text-danger">Mot de passe oublié ?</a>
                                </div>
                            @endif
                        </form>

                        <hr>

                        <p class="text-center border-right-0 border-bottom-0 border-left-0">
                            Vous n'avez pas de compte ? <a href="{{ route('register') }}" class="text-primary">S'inscrire</a>
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
