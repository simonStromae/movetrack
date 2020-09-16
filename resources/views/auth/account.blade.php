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
                                <h6 class="">Récapitulatif</h6><hr>

                                <div class="row">
                                    <p class="col-md-4 col-sm-12" style="font-size: 12px">
                                        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                        tempor incididunt ut labore et dolore magna aliqua.
                                    </p>
                                    <div class="col-md-8 col-sm-12">
                                        @if(!empty(last_track_emit()))
                                            <table class="table">
                                                <tbody class="table-borderless">
                                                <tr>
                                                    <td>Produit</td>

                                                    <td class="font-weight-bold">{{ last_track_emit()->designation }}</td>
                                                </tr>
                                                <tr>
                                                    <td>Marque</td>
                                                    <td class="font-weight-bold">{{ last_track_emit()->brand }}</td>
                                                </tr>
                                                <tr>
                                                    <td>Catégorie</td>
                                                    <td class="font-weight-bold">{{ last_track_emit()->category->name }}</td>
                                                </tr>
                                                <tr>
                                                    <td>Budget</td>
                                                    <td class="font-weight-bold">{{ number_format(last_track_emit()->budget, 0, '.', ' ') }} Fcfa</td>
                                                </tr>
                                                <tr>
                                                    <td>Description</td>
                                                    <td class="font-weight-bold">{{ last_track_emit()->description }}</td>
                                                </tr>
                                                </tbody>
                                            </table>
                                        @else
                                            <div class="">
                                                <span class="text-center">
                                                    Aucun track en cours !
                                                </span>
                                            </div>
                                        @endif

                                        @if(!empty(last_track_emit()->images))
                                            <div class="mb-4">
                                                <div id="carouselExampleControls" class="carousel slide carousel-fade" data-ride="carousel">
                                                    <ol class="carousel-indicators">
                                                        @for($i = 0; $i < count(last_track_emit()->images); $i++)
                                                            <li data-target="#carouselExampleIndicators" data-slide-to="{{ $i }}" class="{{ $i === 0 ? 'active' : '' }}"></li>
                                                        @endfor
                                                    </ol>
                                                    <div class="carousel-inner">
                                                        @foreach(last_track_emit()->images as $image)
                                                            <div class="carousel-item @if($loop->first) active @endif">
                                                                <img class="d-block w-100" src="{{ show_trackImage($image->name) }}" alt="{{ $loop->iteration }}-slide">
                                                            </div>
                                                        @endforeach
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
                                        @endif

                                        @if(last_track_emit())
                                            <div class=" badge badge-warning m-3">
                                                <strong class=" p-2">{{last_track_emit()->status }}</strong>
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
                                <h6 class="">Historique</h6><hr>

                                <table class="w-100 table table-borderless">
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
                                                <td class="font-weight-bold">{{ number_format($track->budget, 0, '.', ' ') }} Fcfa</td>
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
@endsection
