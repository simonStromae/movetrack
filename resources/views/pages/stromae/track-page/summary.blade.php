@extends('layouts.front-app')

@section('title', 'Recapitulatif')

@section('front-content')
    <div class="container-fluid p-5 text-white text-center d-none d-md-block" style="background: url('/front-office/brand/background/bg_recap.jpg');">
        <h4 class="mb-3">Récapitulatif</h4>
        <p class="wizard w-100">
            <span class="text-success h6 font-weight-bold"><i class="fa fa-check-circle"></i> Mon besoin</span>
            <span class="text-success h6 font-weight-bold"><i class="fa fa-check-circle"></i> Mes informations</span>
        </p>
    </div>

    <!-- background mobile -->
    <div class="container-fluid p-5 text-center d-block d-sm-none" style="background: url('/front-office/brand/background/bg_recap_mobile.jpg');">
        <h4 class="mb-3">Récapitulatif</h4>
        <p class="wizard w-100">
            <span class="text-success h6 font-weight-bold"><i class="fa fa-check-circle"></i> Mon besoin</span>
            <span class="text-success h6 font-weight-bold"><i class="fa fa-check-circle"></i> Mes informations</span>
        </p>
    </div>

    <div class="main">
        <div class="container mb-5">
            <div class="row mt-5">
                <div class="col-sm-12 col-md-4">
                    <table class="table">
                        <thead>
                        <tr>
                            <th scope="col" colspan="2">Information Client</th>
                        </tr>
                        </thead>
                        <tbody class="table-borderless">
                        <tr>
                            <td>Nom</td>
                            <td class="font-weight-bold">{{ show_name_user() }}</td>
                        </tr>
                        <tr>
                            <td>Email</td>
                            <td class="font-weight-bold">{{ client()->email }}</td>
                        </tr>
                        <tr>
                            <td>Téléphone</td>
                            <td class="font-weight-bold">+237 {{ client()->phone_number }}</td>
                        </tr>
                        </tbody>
                    </table>
                </div>

                <div class="col-sm-12 col-md-4">
                    <table class="table">
                        <thead>
                        <tr>
                            <th scope="col" colspan="2">Adresse Livraison</th>
                        </tr>
                        </thead>
                        <tbody class="table-borderless">
                        <tr>
                            <td>Ville</td>
                            <td class="font-weight-bold">{{ client()->quater->city->name }}</td>
                        </tr>
                        <tr>
                            <td>Quartier</td>
                            <td class="font-weight-bold">{{ client()->quater->name }}</td>
                        </tr>
                        <tr>
                            <td>Repère</td>
                            <td class="font-weight-bold">{{ client()->landmark  }}</td>
                        </tr>
                        </tbody>
                    </table>
                </div>

                <div class="col-sm-12 col-md-4">
                    <table class="table">
                        <thead>
                        <tr>
                            <th scope="col" colspan="2">Détails</th>
                        </tr>
                        </thead>
                        <tbody class="table-borderless">
                        <tr>
                            <td>Produit</td>
                            <td class="font-weight-bold">{{ $track->designation }}</td>
                        </tr>
                        <tr>
                            <td>Marque</td>
                            <td class="font-weight-bold">{{ $track->brand }}</td>
                        </tr>
                        <tr>
                            <td>Catégorie</td>
                            <td class="font-weight-bold">{{ $track->category->name }}</td>
                        </tr>
                        <tr>
                            <td>Budget</td>
                            <td class="font-weight-bold">{{ $track->budget }}</td>
                        </tr>
                        </tbody>
                    </table>
                </div>
            </div>

            <div class="text-right">
                <a href="{{ route('checkout', $track->id) }}" class="btn btn-outline-dark rounded-0 shadow-sm mt-3">Modifier mes informations</a>
                <a href="{{ route('finish', $track->id) }}" class="btn btn-primary rounded-0 shadow-sm mt-3">Soumettre</a>
            </div>
        </div>
    </div>
@endsection
