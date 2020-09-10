@extends('layouts.front-app')

@section('title', 'Informations Livraison')

@section('front-content')

    <div class="container-fluid p-5 text-dark text-center d-none d-md-block" style="background: url('/front-office/brand/background/bg_checkout.jpg');">
        <h4 class="mb-3 text-capitalize text-white">Information personnelle</h4>
        <p class="wizard w-100">
            <span class="text-success h6 font-weight-bold"><i class="fa fa-check-circle"></i> Mon besoin</span>
        </p>
    </div>

    <!-- background mobile -->
    <div class="container-fluid p-5 text-center d-block d-sm-none" style="background: url('/front-office/brand/background/bg_checkout_mobile.jpg');">
        <h4 class="mb-3 text-capitalize text-white">Information personnelle</h4>
        <p class="wizard w-100">
            <span class="text-success h6 font-weight-bold"><i class="fa fa-check-circle"></i> Mon besoin</span>
        </p>
    </div>

    <div class="main">
        <div class="container mb-5 text-dark">
            <div class="row">
                <div class="col-md-8 col-sm-12">
                    @livewire('stromae.checkout', ['id_track' => $track->id])
                </div>

                <div class="col-md-4 col-sm-12">
                    <div class="bg-light card mt-5 border-white rounded-0">
                        <div class="card-body">
                            <h6 class="card-title mt-3">Mon Besoin</h6>
                            <table class="table">
                                <tr>
                                    <td>Nom</td>
                                    <td class="text-right">{{ $track->designation }}</td>
                                </tr>
                                <tr>
                                    <td>Marque</td>
                                    <td class="text-right">{{ $track->brand }}</td>
                                </tr>
                                <tr>
                                    <td>Budget</td>
                                    <td class="text-right">{{ number_format($track->budget, 0, '.', ' ') }} Fcfa</td>
                                </tr>
                                <tr>
                                    <td>Description</td>
                                    <td>{{ $track->description }}</td>
                                </tr>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
