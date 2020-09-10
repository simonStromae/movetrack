@extends('layouts.front-app', ['contact' => 'active'])

@section('title', 'Contact')

@section('front-content')
    @include('layouts.partials.front-office.title-bar', [
                "title" => 'Contact',
                "image_path" => '/front-office/brand/background/bg_contact.jpg',
                "image_mb_path" => '/front-office/brand/background/bg_contact_mobile.jpg'
            ])

    <div class="container">
        <div class="row p-4 mt-5">
            <div class="col-md-6 col-sm-12">
                <h6 class="text-uppercase text-dark" style="font-family:nexa-regular">Information Contact</h6><hr style="border: 1px solid; margin-top: 0px">

                <div class="info">
                    <p class="p-4">
                        <strong>Localisation :</strong>
                        <small>123 rue Cité des Palmiers, Douala - Cameroun</small>
                    </p><hr>
                    <p class="p-4">
                        <strong>Téléphone :</strong>
                        <small>+237 6 99 76 84 94 / 6 98 18 80 84</small>
                    </p><hr>
                    <p class="p-4">
                        <strong>Adresse Email :</strong>
                        <small>moveglobalcameroun@gmail.com</small>
                    </p><hr>
                </div>
            </div>

            <div class="col-md-6 col-sm-12">
                <h6 class="text-uppercase text-dark" style="font-family:nexa-regular">Laisser un message</h6><hr style="border: 1px solid; margin-top: 0px">

                <form>
                    <div class="row">
                        <div class="col-md-6 col-sm-12 form-group">
                            <input type="text" placeholder="Nom" class="form-control rounded-0">
                        </div>

                        <div class="col-md-6 col-sm-12 form-group">
                            <input type="text" placeholder="Email" class="form-control rounded-0">
                        </div>
                    </div>

                    <div class="form-group">
                        <input type="text" placeholder="Sujet" class="form-control rounded-0">
                    </div>

                    <div class="form-group">
                        <textarea placeholder="Message" class="form-control rounded-0"></textarea>
                    </div>

                    <div class="form-group">

                        <a href="#" class="btn btn-primary rounded-0 shadow-sm mt-3">
                            Soumettre
                        </a>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
