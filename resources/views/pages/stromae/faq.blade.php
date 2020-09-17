@extends('layouts.front-app', ['faq' => 'active'])

@section('title', 'FAQ')

@section('front-content')
    @include('layouts.partials.front-office.title-bar', [
                "title" => 'FAQ',
                "image_path" => '/front-office/brand/background/bg_contact.jpg',
                "image_mb_path" => '/front-office/brand/background/bg_contact_mobile.jpg'
            ])

    <div class="container">
        <div class="mt-4 text-center">
            <h3 class="h3 text-primary-2">Salut, Comment pouvons-nous vous aidez ?</h3>
            {{--<div class="mt-3 w-75 form-group mx-auto">
                <form>
                    <input type="search" class="form-control rounded-0" placeholder="Posez une question...">
                </form>
            </div>--}}
            <p class="my-4"><!--Ou--> Choisissez une catégorie pour trouver rapidement l'aide dont vous avez besoin</p>
        </div>
    </div>
    <div class="container">
        <div class="row my-4 text-center">
            @foreach($faq_categories as $c)
                @if(count($c->faqs)>0)
                    <a href="{{ route('faq', $c->id) }}" class="category shadow-sm {{ active($c->id, $faqs->first()->faqCategory->id) }} col mr-2 p-3 font-weight-bold">{{ $c->name }}</a>
                @endif
            @endforeach
        </div>

        <div>
            <div class="mt-4">
                <h4 class="h4 text-center text-danger">{{ $faqs->first()->faqCategory->name }}</h4>
                <p class="text-center">{{ $faqs->first()->faqCategory->description }}</p>
            </div>

            <div class="p-3 accordion" id="accordionExample">
                @foreach($faqs as $f)
                    <div>
                        <div class="p-2 border-bottom" id="heading-{{ $f->id }}">
                            <h6 class="mb-1 align-item-center">
                                <a class="cursor" data-toggle="collapse" data-target="#collapse-{{ $f->id }}" aria-expanded="true" aria-controls="collapse-{{ $f->id }}">
                                    <i class="fa fa-plus mr-2"></i> <span>{{ $f->question }}</span>
                                </a>
                            </h6>
                        </div>

                        <div id="collapse-{{ $f->id }}" class="p-3 collapse" aria-labelledby="heading-{{ $f->id }}" data-parent="#accordionExample">
                            <div class="text-justify">
                                {{ $f->response }}
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>

        <div class="text-center">
            <div class="mt-4">
                <h3 class="h3 text-primary-2">Vous avez encore une question ?</h3>
                <p>Si vous ne trouvez pas de réponse à votre question dans notre FAQ, vous pouvez <br> toujours nous contacter. Nous vous répondrons sous peu !</p>
            </div>

            <div class="row p-4 mt-2">
                <div class="col-md-6 col-sm-12 border m-3 rounded py-4">
                    <p>
                        <i class="fa fa-2x fa-phone"></i><br>
                        <strong>+237 6 99 76 84 94 / 6 98 18 80 84</strong><br>
                        <small>123 rue Cité des Palmiers, Douala - Cameroun</small>
                    </p>
                </div>

                <div class="col-md-5 col-sm-12 bg-light border my-3 rounded py-4">
                    <p>
                        <i class="fa fa-2x fa-envelope"></i><br>
                        <strong>moveglobalcameroun@gmail.com</strong>
                    </p>
                </div>
            </div>
        </div>
    </div>
@endsection
