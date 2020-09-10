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
                        <div class="card-body">
                            <!--<h5 class="mb-3">Profil</h5>-->

                            <!--Personal Information -->
                            <div class="mt-5">
                                <h6 class="">Avatar</h6><hr>

                                <div class="row">
                                    <p class="col-md-4 col-sm-12" style="font-size: 12px">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                        tempor incididunt ut labore et dolore magna aliqua.</p>
                                    <div class="col-md-8 col-sm-12">
                                        <div class="mb-2">
                                            <img class="rounded-circle" src="{{ show_avatar() }}" width="125">
                                        </div>
                                        <form>
                                            <div class="row">
                                                <div class="col-sm-12 col-md-9 form-group">
                                                    <input class="form-control-file rounded-0" type="file">
                                                </div>
                                                <div class="col-sm-12 col-md-3 form-group">
                                                    <button class="btn btn-dark rounded-0">Modifier</button>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>


                            <!--Personal Information -->
                            <div class="mt-5">
                                <h6 class="">Information Personnelle</h6><hr>

                                <div class="row">
                                    <p class="col-md-4 col-sm-12" style="font-size: 12px">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                        tempor incididunt ut labore et dolore magna aliqua.</p>
                                    <div class="col-md-8 col-sm-12">
                                        <form>
                                            <div class="row">
                                                <div class="col-sm-12 col-md-8 form-group">
                                                    <label for="first_name" class="title-label">Nom</label>
                                                    <input class="form-control rounded-0" type="text" id="first_name" value="">
                                                </div>

                                                <div class="col-sm-12 col-md-4 form-group">
                                                    <label for="tel" class="title-label">Numéro téléphone</label>
                                                    <input class="form-control rounded-0" type="tel" id="tel" aria-describedby="emailHelp" value="691274385">
                                                    <small id="emailHelp" class="text-xs form-text text-muted">Conserver le format a 9 chiffres sans espace, ni tirets.</small>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label for="birthday" class="title-label">Date d'anniversaire</label>
                                                <input class="form-control rounded-0" type="date" id="birthday">
                                            </div>

                                            <div class="form-group">
                                                <button class="btn btn-dark rounded-0">Sauvegarder</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>

                            <!--E-mail Address -->
                            <div class="mt-5">
                                <h6 class="">Adresse Email</h6><hr>

                                <div class="row">
                                    <p class="col-md-4 col-sm-12" style="font-size: 12px">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                        tempor incididunt ut labore et dolore magna aliqua.</p>
                                    <div class="col-md-8 col-sm-12">
                                        <form>
                                            <div class="row">
                                                <div class="col-sm-12 col-md-6 form-group">
                                                    <label for="tel" class="title-label">Email</label>
                                                    <input class="form-control rounded-0" type="tel" id="tel" value="email@example.com">
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <button class="btn btn-dark rounded-0">Enregistrer</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Delivery Address -->
                <div class="tab-pane fade" id="pills-delivery" role="tabpanel" aria-labelledby="pills-delivery-tab">
                    <div class="card shadow-sm rounded-0 bg-light">
                        <div class="card-body">

                            <!--Personal Information -->
                            <div class="mt-5">
                                <h6 class="">Localisation</h6><hr>

                                <div class="row">
                                    <p class="col-md-4 col-sm-12" style="font-size: 12px">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                        tempor incididunt ut labore et dolore magna aliqua.</p>
                                    <div class="col-md-8 col-sm-12">
                                        <form>
                                            <div class="row">
                                                <div class="col-sm-12 col-md-6 form-group">
                                                    <label for="city" class="title-label">Ville</label>
                                                    <select class="form-control rounded-0" id="city">
                                                        <option>selectionnez une ville...</option>
                                                        <option>Douala</option>
                                                        <option>Yaoundé</option>
                                                    </select>
                                                </div>
                                                <div class="col-sm-12 col-md-6 form-group">
                                                    <label for="quater" class="title-label">Quartier</label>
                                                    <select class="form-control rounded-0" id="quater">
                                                        <option>selectionnez un quartier...</option>
                                                        <option>Bonamoussadi</option>
                                                        <option>Bepanda</option>
                                                    </select>
                                                </div>
                                            </div>

                                            <div class="row">
                                                <div class="col-sm-12 col-md-6 form-group">
                                                    <label for="birthday" class="title-label">Secteur</label>
                                                    <input class="form-control rounded-0" type="text" id="second_name" value="2ème entrée">
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <button class="btn btn-dark rounded-0">Enregistrer</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>

                            <!--E-mail Address -->
                            <div class="mt-5">
                                <h6 class="">Repère</h6><hr>

                                <div class="row">
                                    <p class="col-md-4 col-sm-12" style="font-size: 12px">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                        tempor incididunt ut labore et dolore magna aliqua.</p>
                                    <div class="col-md-8 col-sm-12">
                                        <form>
                                            <div class="row">
                                                <div class="col-sm-12 col-md-6 form-group">
                                                    <label for="landmark" class="title-label">Repère</label>
                                                    <input class="form-control rounded-0" type="tel" id="landmark">
                                                </div>
                                            </div>

                                            <div class="row">
                                                <div class="col-sm-12 col-md-8 form-group">
                                                    <label for="particular_landmark" class="title-label">Repère particulier</label>
                                                    <input class="form-control rounded-0" type="particular_landmark" id="tel">
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <button class="btn btn-dark rounded-0">Enregistrer</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
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
                                    <p class="col-md-4 col-sm-12" style="font-size: 12px">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                        tempor incididunt ut labore et dolore magna aliqua.</p>
                                    <div class="col-md-8 col-sm-12">
                                        <table class="table">
                                            <tbody class="table-borderless">
                                            <tr>
                                                <td>Produit</td>
                                                <td class="font-weight-bold">Iphone 6s</td>
                                            </tr>
                                            <tr>
                                                <td>Marque</td>
                                                <td class="font-weight-bold">Apple</td>
                                            </tr>
                                            <tr>
                                                <td>Catégorie</td>
                                                <td class="font-weight-bold">Smartphone</td>
                                            </tr>
                                            <tr>
                                                <td>Budget</td>
                                                <td class="font-weight-bold">100.000 Fcfa</td>
                                            </tr>
                                            <tr>
                                                <td>Description</td>
                                                <td class="font-weight-bold">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                                    tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                                                    quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                                                    consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                                                    cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                                                    proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</td>
                                            </tr>
                                            </tbody>
                                        </table>

                                        <strong class="badge badge-warning p-2">En cours de recherche ...</strong>
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

                                <table class="w-100 table table-responsive">
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
                                    <tr>
                                        <td></td>
                                        <td class="font-weight-bold">Iphone 6s</td>
                                        <td class="font-weight-bold">Apple</td>
                                        <td class="font-weight-bold">Smartphone</td>
                                        <td class="font-weight-bold">100.000 Fcfa</td>
                                        <td class="font-weight-bold">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</td>
                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td class="font-weight-bold">Iphone 6s</td>
                                        <td class="font-weight-bold">Apple</td>
                                        <td class="font-weight-bold">Smartphone</td>
                                        <td class="font-weight-bold">100.000 Fcfa</td>
                                        <td class="font-weight-bold">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</td>
                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td class="font-weight-bold">Iphone 6s</td>
                                        <td class="font-weight-bold">Apple</td>
                                        <td class="font-weight-bold">Smartphone</td>
                                        <td class="font-weight-bold">100.000 Fcfa</td>
                                        <td class="font-weight-bold">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</td>
                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td class="font-weight-bold">Iphone 6s</td>
                                        <td class="font-weight-bold">Apple</td>
                                        <td class="font-weight-bold">Smartphone</td>
                                        <td class="font-weight-bold">100.000 Fcfa</td>
                                        <td class="font-weight-bold">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</td>
                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td class="font-weight-bold">Iphone 6s</td>
                                        <td class="font-weight-bold">Apple</td>
                                        <td class="font-weight-bold">Smartphone</td>
                                        <td class="font-weight-bold">100.000 Fcfa</td>
                                        <td class="font-weight-bold">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</td>
                                    </tr>
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
