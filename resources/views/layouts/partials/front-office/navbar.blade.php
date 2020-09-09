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
                    <a class="nav-link" href="faq.html">FAQ</a>
                </li>
            </ul>
        </div>
        <form class="row form-inline align-item-center d-flex justify-content-center">
            <a href="login.html" class="shadow-sm rounded-0 btn btn-outline-primary btn-md mb-2 text-sm">Se connecter</a>
            <a href="tracking.html" class="shadow-sm rounded-0 btn btn-md btn-danger mx-2 mb-2 text-sm">Entrer votre besoin</a>
        </form>
    </div>
</nav>
