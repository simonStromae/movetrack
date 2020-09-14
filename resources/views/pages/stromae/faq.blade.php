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
            <div class="mt-3 w-75 form-group mx-auto">
                <form>
                    <input type="search" class="form-control rounded-0" placeholder="Posez une question...">
                </form>
            </div>
            <p class="my-4">Ou choisissez une catégorie pour trouver rapidement l'aide dont vous avez besoin</p>
        </div>
    </div>
    <div class="container">
        <div class="row my-4 text-center">
            <div class="category shadow-sm col mr-2 p-4 font-weight-bold"><i class="fa fa-clock-o fa-2x mb-2"></i><br> Commencer</div>
            <div class="category col mr-2 p-4 bg-danger text-white shadow font-weight-bold"><i class="fa fa-shopping-bag fa-2x mb-2"></i><br> Suivi</div>
            <div class="category shadow-sm col mr-2 p-4 font-weight-bold"><i class="fa fa-paper-plane fa-2x mb-2"></i><br> Expedition</div>
            <div class="category shadow-sm col p-4 font-weight-bold"><i class="fa fa-shipping-fast fa-2x mb-2"></i><br> Livraison</div>
        </div>

        <div>
            <div class="mt-4">
                <h4 class="h4 text-center text-danger">Suivi</h4>
                <p class="text-center">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod <br> tempor incididunt ut labore et dolore magna aliqua.</p>
            </div>

            <div class="p-3 accordion" id="accordionExample">
                <div>
                    <div class="p-2 border-bottom" id="headingOne">
                        <h6 class="mb-1 align-item-center">
                            <a class="cursor" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                <i class="fa fa-plus mr-2"></i> <span>Collapsible Group Item #1</span>
                            </a>
                        </h6>
                    </div>

                    <div id="collapseOne" class="p-3 collapse" aria-labelledby="headingOne" data-parent="#accordionExample">
                        <div class="text-justify">
                            Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                        </div>
                    </div>
                </div>

                <div>
                    <div class="p-2 border-bottom" id="headingTwo">
                        <h6 class="mb-1">
                            <a class="cursor" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                <i class="fa fa-plus mr-2"></i> <span>Collapsible Group Item #2</span>
                            </a>
                        </h6>
                    </div>
                    <div id="collapseTwo" class="p-3 collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
                        <div class="text-justify">
                            Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                        </div>
                    </div>
                </div>

                <div>
                    <div class="p-2 border-bottom" id="headingThree">
                        <h6 class="mb-1">
                            <a class="cursor" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                <i class="fa fa-plus mr-2"></i> <span>Collapsible Group Item #3</span>
                            </a>
                        </h6>
                    </div>
                    <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
                        <div class="text-justify">
                            Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                        </div>
                    </div>
                </div>
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
