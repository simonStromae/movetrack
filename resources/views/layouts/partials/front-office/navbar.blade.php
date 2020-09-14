<div class="d-none d-sm-block bg-black p-2 text-center text-white" style="font-family: nexa-book">
    <span>" Une Equipe de professionels pour vous offrir le service de vos rêves "</span>
</div>
<nav class="navbar navbar-expand-lg navbar-light bg-light shadow-sm">
    <a class="ml-3 navbar-/front-office/brand text-primary" href="#"><img src="/front-office/brand/logo.png" width="125"></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <div class="ml-auto mr-5">
            <ul class="navbar-nav mr-auto ">
                <li class="nav-item {{ $welcome ?? '' }}">
                    <a class="nav-link" href="{{ route('welcome') }}">Accueil</a>
                </li>
                <li class="nav-item {{ $about ?? '' }}">
                    <a class="nav-link" href="{{ route('about') }}">Livraison / Expédition</a>
                </li>
                <li class="nav-item {{ $contact ?? '' }}">
                    <a class="nav-link" href="{{ route('contact') }}">Contact</a>
                </li>
                <li class="nav-item {{ $faq ?? '' }}">
                    <a class="nav-link" href="#">FAQ</a>
                </li>
            </ul>
        </div>
        <div class="row form-inline align-item-center d-flex justify-content-center">
            @guest
                <a href="{{ route('login') }}" class="rounded-0 btn btn-outline-primary btn-md mb-2 text-sm">Se connecter</a>
            @else
                <div class="dropdown">
                    <a href="#" class="text-primary-2 account m-3 text-sm font-weight-bold" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        {{ show_name_user() }} <i class="fa fa-angle-down"></i>
                    </a>
                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                        @if(user()->hasRole('admin'))
                            <a class="dropdown-item" href="{{ route('backend.dashboard') }}">Tableau de bord</a>
                        @else
                            <a class="dropdown-item" href="{{ route('my-account') }}">Mon compte</a>
                        @endif
                        <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">Deconnexion</a>

                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                            @csrf
                        </form>
                    </div>
                </div>
            @endguest
                <a href="{{ route('add-track') }}" class="rounded-0 btn btn-md btn-danger mx-2 mb-2 text-sm">Entrer votre besoin</a>
        </div>
    </div>
</nav>
