




<div class="container-fluid">
    @section('title',  $track->designation)
    {{-- Do your work, then step back. --}}
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">

                        {{--                        {{ Breadcrumbs::render('tracks') }}--}}
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <section class="content">
        <div class="card">
            <div class="card-header">
                <div class="d-flex justify-content-between">
                    <h3 class="card-title font-weight-bold">
                        <div class="text-primary">
                            <span class="d-flex">
                                Track : {{ $track->designation}}
                            </span>
                            <span class="d-flex">
                                <i class=" text-secondary">{{ $track->reference}}</i>
                            </span>
                        </div>
                     </h3>
                    <div class=" text-secondary">
                        <span class="d-flex">
                            {{date('d M y, h:i ', strtotime($track->created_date))}}
                        </span>
                    </div>
                </div>
            </div>

            <!-- /.card-header -->

            <div class="card-body ">
                <div class="row">
                    <div class="col-md-6">
                        <div class="">
                            <img src="{{$track->image ?? '/back-office/dist/img/avatar4.png'}}" width="200" alt="" class="img-fluid rounded">
                            <p>
                                {{$track->description}}
                            </p>
                        </div>
                        <div class="d-flex align-items-start">

                            <div class="">
                                <p  class="">Marque : <strong> {{ $track->brand}}</strong> </p>
                                <p class="">Prix : <strong> {{ $track->budget}}</strong> </p>
                                <p class="">Catégorie : <strong> {{ $track->category->name}}</strong> </p>
                            </div>
                        </div>
                        <div class="">
                            <br>
                            <p>Client:</p>
                            <div class="container">
                                <p  class="">Nom : <strong> {{  ucwords(getUser($track->client)->name)}}</strong> </p>
                                <p  class="">Localisation :
                                    <strong>
                                        {{ $track->client->quater->city->country->name}} \
                                        {{ $track->client->quater->city->name}} \
                                        {{ $track->client->quater->name}}
                                    </strong>
                                </p>
                            </div>

                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="">
                            <h3>Traitements : </h3>
                            <br>
                            <label for="">
                                Status actuel
                                @livewire('nkd.track.status-change',['id_track'=>$track->id])
                            </label>

                            <form action="" class="row" wire:submit.prevent="save">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for=""> Date de délivrance de l'objet Tracké</label>
                                        <input type="date" wire:model="delivery_date" class="form-control @error('delivery_date') is-invalid @enderror">
                                        @error('delivery_date')
                                        <div class="">
                                            <p class="text-sm text-danger">{{$message}}</p>
                                        </div>
                                        @enderror
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for=""> Prix réel de l'objet Tracké</label>
                                        <input type="number" wire:model="real_price"  class="form-control @error('real_price') is-invalid @enderror">
                                        @error('real_price')
                                        <div class="">
                                            <p class="text-sm text-danger">{{$message}}</p>
                                        </div>
                                        @enderror

                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for=""> Prix de livraison</label>
                                        <input type="number" wire:model="delivery_price"  class="form-control @error('delivery_price') is-invalid @enderror">
                                        @error('delivery_price')
                                        <div class="">
                                            <p class="text-sm text-danger">{{$message}}</p>
                                        </div>
                                        @enderror

                                    </div>
                                </div>



                                <div class="col-md-6">
                                    <div class="form-group">
                                        <button class="btn btn-success col-6" type="submit">
                                            <i class="fas fa-spinner fa-spin" wire:loading wire:target="save"></i>
                                            Valider
                                        </button>
                                        <button class="btn btn-dark">Reset</button>
                                    </div>
                                </div>

                            </form>
                        </div>

                    </div>
                </div>


            </div>
            <!-- /.card-body -->
        </div>
    </section>

</div>
