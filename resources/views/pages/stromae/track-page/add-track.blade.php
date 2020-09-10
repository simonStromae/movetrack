@extends('layouts.front-app')

@section('title', 'Mon Besoin')

@section('front-content')
    <div id="carouselExampleSlidesOnly" class="w-100 carousel slide carousel-fade d-none d-md-block" data-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img class="d-block w-100" src="/front-office/brand/slider/Artboard1.png" alt="1-slide">
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" src="/front-office/brand/slider/Artboard2.png" alt="2-slide">
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" src="/front-office/brand/slider/Artboard3.png" alt="3-slide">
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" src="/front-office/brand/slider/Artboard4.png" alt="4-slide">
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" src="/front-office/brand/slider/Artboard5.png" alt="5-slide">
            </div>
        </div>
    </div>

    <!-- Mobile interface -->
    <div class="container-fluid p-5 text-center d-block d-sm-none" style="background: url('/front-office/brand/background/bg_tracking_mobile.jpg');">
        <h4 class="mb-3 text-capitalize text-white">Mon Compte</h4>
    </div>

    <div class="container mb-5 text-dark">
        <div class="mt-5 rounded-0">
            <div class="card-body">
                <div class="text-center">
                    <h5 class="h5 card-title mt-3 text-primary">De quoi avez-vous besoin ?</h5>
                    <p class="card-subtitle m-2 p-1">Entrer les informations et descriptions du produit que vous souhaitez obtenir.</p>
                </div>

                @livewire('stromae.add-track')
            </div>
        </div>
    </div>
@endsection
