@extends('layouts.front-app', ['about' => 'active'])

@section('title', 'Expedition-Livraison')

@section('front-content')
    <div class="container-fluid p-5 text-center d-none d-md-block" style="background: url('/front-office/brand/background/bg_about.jpg');">
        <h4 class="mb-3 text-capitalize text-white">Livraison / Expédition</h4>
    </div>

    <!-- background mobile -->
    <div class="container-fluid p-5 text-center d-block d-sm-none" style="background: url('/front-office/brand/background/bg_about_mobile.jpg');">
        <h4 class="mb-3 text-capitalize text-white">Livraison / Expédition</h4>
    </div>

    <div class="container">
        <div class="row p-4 mt-5 text-justify">

            <div class="col-md-6 col-lg-6 col-sm-12 align-self-center">
                <img class="img-fluid" src="/front-office/brand/delivery/delivery.jpg">
                <h5 class="text-uppercase mt-2 delivery-title">livraison</h5>
                <p>Grâce à <strong>MOVe4Me</strong> qui est notre service de livraison à domicile de colis plis et marchandises, Nous vous livrons ce que vous aurez souhaité partout dans la ville de Douala, <strong class="text-danger">à partir de 1000 Fcfa</strong>.</p>
            </div>

            <div class="col-md-6 col-lg-6 col-sm-12 align-self-center">
                <img class="img-fluid" src="/front-office/brand/delivery/expedition.jpg">
                <h5 class="text-uppercase mt-2 delivery-title">Expedition</h5>
                <p>Vous êtes hors de la ville de Douala ? Ne paniquez pas ! Après tracking de votre besoin, notre service <strong>MOVe4Me</strong> expédi le colis dans votre ville, <strong class="text-danger">à partir de 1000 Fcfa</strong>.</p>
            </div>
        </div>

    </div>
@endsection
