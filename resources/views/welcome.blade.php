@extends('layouts.front-app', ['welcome' => 'active'])

@section('title', 'Bienvenue')

@section('front-content')
    <!-- Sliders -->
    <div>
        <div id="carouselExampleControls" class="carousel slide carousel-fade" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
            </ol>

            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="d-block w-100" src="/front-office/brand/slider/slide-2.jpg" alt="First slide">
                    <div class="carousel-caption d-none d-md-block text-carousel">
                        <h2 style="font-size: 54px">Nous trouvons ce que vous désirez</h2>
                        <p>dites nous ce que vous désirez et notre équipe se charge de vous l'apportez en <strong>72 H</strong></p>
                        <a href="{{ route('add-track') }}" class="mt-2 btn btn-primary rounded-0">Entrer votre besoin</a>
                    </div>

                    <!-- Mobile interface -->
                    <div class="d-block d-sm-none carousel-caption">
                        <h2 class="h4">Nous trouvons ce que vous désirez</h2>
                        <a href="#" class="mt-2 btn btn-primary rounded-0">Entrer votre besoin</a>
                    </div>
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100" src="/front-office/brand/slider/slide-3.jpg" alt="Second slide">
                    <div class="carousel-caption d-none d-md-block text-carousel">
                        <h2 style="font-size: 54px">Expédition / Livraison où que vous soyez</h2>
                        <p>N'ayez aucune crainte, nous vous livrons où que vous soyez.</p>
                        <a href="{{ route('add-track') }}" class="mt-2 btn btn-primary rounded-0">Entrer votre besoin</a>
                    </div>

                    <!-- Mobile interface -->
                    <div class="d-block d-sm-none carousel-caption">
                        <h2 class="h4">Expédition / Livraison où que vous soyez</h2>
                        <a href="{{ route('add-track') }}" class="mt-2 btn btn-primary rounded-0">Entrer votre besoin</a>
                    </div>
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100" src="/front-office/brand/slider/slide-1.jpg" alt="Third slide">
                    <div class="carousel-caption d-none d-md-block text-carousel">
                        <h2 style="font-size: 54px">Votre satisfaction, notre priorité</h2>
                        <p>Notre équipe est à votre entière disposition pour vous offrir le meilleur service.</p>
                        <a href="{{ route('add-track') }}" class="mt-2 btn btn-primary rounded-0">Entrer votre besoin</a>
                    </div>

                    <!-- Mobile interface -->
                    <div class="d-block d-sm-none carousel-caption">
                        <h2 class="h4">Votre satisfaction, notre priorité</h2>
                        <a href="{{ route('add-track') }}" class="btn btn-primary rounded-0">Entrer votre besoin</a>
                    </div>
                </div>
            </div>

            <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </div>

    <!-- Comment ça marche -->
    <div class="bg">
        <div class="p-5 container">
            <h1 class="text-center text-dark h1">Comment ça marche ?</h1>
            <div class="row mt-5">
                <div class="col-md-7 col-sm-12">
                    <img src="/front-office/brand/track.svg"class="float-left m-4" width="200px">
                    <div>
                        <h3 class="text-primary-2 h1">01</h3>
                        <p class="mt-0">
                            <strong class="text-primary-2">Entre ton besoin</strong><br>
                            Faites votre recherche en remplissant le formulaire. Ce formulaire vous demandera des renseignements précis sur votre besoin.
                        </p>
                    </div>
                </div>

                <div class="offset-md-5 col-md-7 col-sm-12">
                    <img src="/front-office/brand/search.svg" class="float-left m-4" width="200px">
                    <div class="mt-5">
                        <h3 class="text-primary-2 h1">02</h3>
                        <p class="mt-0">
                            <strong class="text-primary-2">Movetrack recherche</strong><br>
                            Une fois votre besoin exprimé, notre équipe se charge de vous le retrouver en un maximum de 48H.
                        </p>
                    </div>
                </div>

                <div class="col-md-7 col-sm-12">
                    <img src="/front-office/brand/delivery.svg" class="float-left m-4" width="200px">
                    <div>
                        <h3 class="text-primary-2 h1">03</h3>
                        <p class="mt-0">
                            <strong class="text-primary-2">Livraison / Expédition</strong><br>
                            Que vous soyez dans la ville ou non! aucune crainte à vous faire. Notre équipe de livraison <strong>MOVe4Me</strong> vous l'apporte à votre domicile ou vous l'expédie en 24H.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Partner -->
    <div class="partner text-white">
        <div class="container p-5">
            <div class="row d-flex justify-content-center text-center">
                <div class="col-sm-2">
                    <img src="/front-office/brand/patners/1.png">
                </div>

                <div class="col-sm-2">
                    <img src="/front-office/brand/patners/2.png">
                </div>

                <div class="col-sm-2">
                    <img src="/front-office/brand/patners/3.png">
                </div>

                <div class="col-sm-2">
                    <img src="/front-office/brand/patners/4.png">
                </div>

                <div class="col-sm-2">
                    <img src="/front-office/brand/patners/5.png">
                </div>
            </div>
        </div>
    </div>
@endsection
