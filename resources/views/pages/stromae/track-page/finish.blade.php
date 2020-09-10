@extends('layouts.front-app')

@section('title', 'Confirmation')

@section('front-content')
    <div class="container-fluid p-5 text-white text-center d-none d-md-block" style="background: url('/front-office/brand/background/bg_confirm.jpg');">
        <h4 class="mb-3">Confirmation</h4>
        <p class="wizard w-100">
            <span class="text-success h6 font-weigh-bold"><i class="fa fa-check-circle"></i> Mon besoin</span>
            <span class="text-success h6 font-weigh-bold"><i class="fa fa-check-circle"></i> Mes informations</span>
            <span class="text-success h6 font-weigh-bold"><i class="fa fa-check-circle"></i> Récapitulatif</span>
        </p>
    </div>

    <!-- background mobile -->
    <div class="container-fluid p-5 text-center d-block d-sm-none" style="background: url('/front-office/brand/background/bg_confirm_mobile.jpg');">
        <h4 class="mb-3">Confirmation</h4>
        <p class="wizard w-100">
            <span class="text-success h6 font-weigh-bold"><i class="fa fa-check-circle"></i> Mon besoin</span>
            <span class="text-success h6 font-weigh-bold"><i class="fa fa-check-circle"></i> Mes informations</span>
            <span class="text-success h6 font-weigh-bold"><i class="fa fa-check-circle"></i> Récapitulatif</span>
        </p>
    </div>

    <div class="my-5 mx-auto">
        <div class="container">
            <div class="text-center text-dark">
                <img class="mx-auto" src="/front-office/brand/order_confirmed.svg" width="150px">
                <h6 class="mt-3">Bravo ! Mr / Mme {{ show_name_user() }}</h6>
                <p class="mt-2">
                    Votre track a bien été prise en compte. <br> Notre équipe se charge dès à présent de le trouver pour vous. Merci
                </p>

                <a href="{{ route('welcome') }}" class="mt-4 btn btn-outline-primary text-primary-2 rounded-0 "><i class="fa fa-home"></i> Retour à l'accueil</a>
            </div>
        </div>
    </div>
@endsection
