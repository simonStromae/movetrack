@extends('layouts.front-app')

@section('title', 'Mon Compte')

@section('front-content')
    @include('layouts.partials.front-office.title-bar', [
                "title" => 'Mon Compte',
                "image_path" => '/front-office/brand/background/bg_contact.jpg',
                "image_mb_path" => '/front-office/brand/background/bg_contact_mobile.jpg'
            ])

    <div class="container">
        <div class="p-2 mt-5 mb-4">
            <ul class="nav nav-pills mb-3 justify-content-center" id="pills-tab" role="tablist">
                <li class="nav-item">
                    <a class="nav-link active rounded-0" id="pills-profile-tab" data-toggle="pill" href="#pills-profile" role="tab" aria-controls="pills-profile" aria-selected="true">Mon Profil</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link rounded-0" id="pills-delivery-tab" data-toggle="pill" href="#pills-delivery" role="tab" aria-controls="pills-delivery" aria-selected="false">Adresse Livraison</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link rounded-0" id="pills-track-tab" data-toggle="pill" href="#pills-track" role="tab" aria-controls="pills-track" aria-selected="false">Mon besoin</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link rounded-0" id="pills-tracks-tab" data-toggle="pill" href="#pills-tracks" role="tab" aria-controls="pills-tracks" aria-selected="false">Historique</a>
                </li>
            </ul>

            <div class="tab-content" id="pills-tabContent">

                <!-- Profile -->
                <div class="tab-pane fade show active" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
                    <div class="card shadow-sm rounded-0 bg-light">
                        @livewire('stromae.account.profile')
                    </div>
                </div>

                <!-- Delivery Address -->
                <div class="tab-pane fade" id="pills-delivery" role="tabpanel" aria-labelledby="pills-delivery-tab">
                    <div class="card shadow-sm rounded-0 bg-light">
                        @livewire('stromae.account.localisation')
                    </div>
                </div>

                <!-- Track  -->
                <div class="tab-pane fade" id="pills-track" role="tabpanel" aria-labelledby="pills-track-tab">
                    <div class="card shadow-sm rounded-0 bg-light">
                        <div class="card-body">
                            <!--<h5 class="mb-3">Profil</h5>-->

                            <!--Personal Information -->
                            <div class="mt-5">
                                <div class="row">
                                    <div class="col mx-5">
                                        @if(!empty(last_track_emit()))
                                            <table class="table table-hover table-responsive">
                                                <thead class="thead-dark">
                                                    <tr>
                                                        <th scope="col">Produit</th>
                                                        <th scope="col">Marque</th>
                                                        <th scope="col">Catégorie</th>
                                                        <th scope="col">Budget</th>
                                                        <th scope="col">Description</th>
                                                    </tr>
                                                </thead>
                                                <tbody class="table-borderless">
                                                @foreach(last_track_emit() as $track)
                                                    <tr>
                                                        <td class="font-weight-bold">
                                                            <a href="#" data-toggle="modal" data-target="#detailTrack-{{ $track->id }}">{{ $track->designation }}</a>
                                                            <br><strong class="badge badge-warning">{{ get_status($track->status) }}</strong>
                                                        </td>
                                                        <td class="font-weight-bold">{{ $track->brand }}</td>
                                                        <td class="font-weight-bold">{{ $track->category->name }}</td>
                                                        <td class="font-weight-bold">{{ $track->budget }}</td>
                                                        <td class="font-weight-bold">{{ $track->description }}</td>
                                                    </tr>

                                                    @include('layouts.partials.front-office.modal', $track)
                                                @endforeach
                                                </tbody>
                                            </table>
                                        @else
                                            <div class="">
                                                <span class="text-center">
                                                    Aucun track en cours !
                                                </span>
                                            </div>
                                        @endif
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- All Tracks -->
                <div class="tab-pane fade" id="pills-tracks" role="tabpanel" aria-labelledby="pills-tracks-tab">
                    <div class="card shadow-sm rounded-0 bg-light">
                        <div class="card-body">
                            <!--<h5 class="mb-3">Profil</h5>-->

                            <!--Personal Information -->
                            <div class="mt-5">
                                <div class="row">
                                    <div class="col mx-5">
                                        <table class="table table-borderless table-responsive">
                                    <thead class="thead-dark">
                                    <tr>
                                        <th scope="col">#</th>
                                        <th scope="col">Produit</th>
                                        <th scope="col">Marque</th>
                                        <th scope="col">Catégorie</th>
                                        <th scope="col">Budget</th>
                                        <th scope="col">Description</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                        @forelse(client_tracks() as $track)
                                            <tr>
                                                <td></td>
                                                <td class="font-weight-bold">{{ $track->designation  }}</td>
                                                <td class="font-weight-bold">{{ $track->brand }}</td>
                                                <td class="font-weight-bold">{{ $track->category->name }}</td>
                                                <td class="font-weight-bold">{{ $track->budget }}</td>
                                                <td class="font-weight-bold">{{ $track->description }}</td>
                                            </tr>
                                        @empty
                                            <tr>
                                                <td colspan="6" class="text-center">Vous ne disposez d'aucun track ! soumettre un besoin
                                                    <a class="font-weight-bold text-danger" href="{{ route('add-track') }}">Ici</a>
                                                </td>
                                            </tr>
                                        @endforelse
                                    </tbody>
                                </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
