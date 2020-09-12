




<div>
    {{-- Because she competes with no one, no one can compete with her. --}}

    <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0 text-dark">Ajouter un track</h1>
                    </div><!-- /.col -->
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
{{--                            {{ Breadcrumbs::render('client_create') }}--}}
                        </ol>
                    </div><!-- /.col -->
                </div><!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>
        <!-- /.content-header -->

        <section class="content m-3">

            <!-- general form elements -->
            <div class="card card-primary">
                <div class="card-header">
                    <h3 class="card-title">Ajouter un besoin pour {{ucwords(getUser($client)->name)}}  </h3>
                </div>
                <!-- /.card-header -->
                <!-- form start -->
                <form wire:submit.prevent="save">
                    <div class="card-body">

                        <div class="row ">

                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Désignation</label>
                                    <input type="text" wire:model.lazy="designation"
                                           class="form-control @error('designation') is-invalid @enderror" id="exampleInputEmail1"
                                           placeholder="Nommer du besoin"
                                           value="{{old('designation')}}">
                                    @error('designation')
                                        <div class="">
                                            <p class="text-sm text-danger">{{$message}}</p>
                                        </div>
                                    @enderror
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Marque</label>
                                    <input type="text" wire:model.lazy="brand"  class="form-control @error('brand') is-invalid @enderror" id="exampleInputEmail1" placeholder="Marque de ce que vous cherchez " value="{{old('brand')}}">
                                    @error('brand')
                                        <div class="">
                                            <p class="text-sm text-danger">{{$message}}</p>
                                        </div>
                                    @enderror
                                </div>
                            </div>

                        </div>

                        <div class="row">

                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Budget</label>
                                    <input type="number" wire:model.lazy="budget"  class="form-control @error('budget') is-invalid @enderror" id="exampleInputEmail1" placeholder="Marque de ce que vous cherchez " value="{{old('budget')}}">
                                    @error('budget')
                                        <div class="">
                                            <p class="text-sm text-danger">{{$message}}</p>
                                        </div>
                                    @enderror
                                </div>
                            </div>
                        </div>

                        <div class="row">

                            <div class="col-sm-12 col-lg-4">
                                <div class="form-group">
                                    <label>Categorie de Besoin</label>
                                    <select class="form-control  @error('quater_id') is-invalid @enderror" name="quater" style="width: 100%;" wire:model.lazy="category_id">
                                        <option >choisir...</option>
                                        @forelse($categories as $c)
                                            <option value="{{$c->id}}">{{$c->name}}</option>
                                        @empty
                                            <option class="text-secondary">Aucune Categorie disponible</option>
                                        @endforelse
                                    </select>
                                    @error('category_id')
                                        <div class="">
                                            <p class="text-sm text-danger">{{$message}}</p>
                                        </div>
                                    @enderror
                                </div>
                            </div>

                            <div class="col-sm-12 col-lg-12">
                                <div class="form-group">
                                    <label>Categorie de Besoin</label>
                                    <textarea class="form-control  @error('description') is-invalid @enderror"
                                              placeholder="Entrer une description"
                                              cols="12" rows="5"
                                              name="description"
                                              wire:model.lazy="description" value="{{old('description')}}">
                                    </textarea>

                                    @error('description')
                                        <div class="">
                                            <p class="text-sm text-danger">{{$message}}</p>
                                        </div>
                                    @enderror
                                </div>
                            </div>

                        </div>

                    </div>
                    <!-- /.card-body -->

                    <div class="card-footer">
                        <button type="submit" class="btn btn-success ">
                            <i class="fas fa-spinner fa-spin" wire:loading wire:target="brand"></i>
                            <i class="fas fa-plus" wire:loading.remove wire:target="brand"></i>
                            Enregistrer
                        </button>
                        <button type="reset" class="btn btn-secondary "><i class="fas fa-recycle"></i> Reinitialiser </button>
                    </div>

                </form>

            </div>
            <!-- /.card -->

        </section>


    @push('css')
        <!-- Select2 -->
            <link rel="stylesheet" href="/backend/master/plugins/select2/css/select2.min.css">
            <link rel="stylesheet" href="/backend/master/plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css">
    @endpush

    @push('js')
        <!-- Select2 -->
            <script src="/backend/master/plugins/select2/js/select2.full.min.js"></script>
            <script>
                $(function () {
                    //Initialize Select2 Elements
                    $('.select2').select2()

                    //Initialize Select2 Elements
                    $('.select2bs4').select2({
                        theme: 'bootstrap4'
                    })
                })
            </script>
    @endpush


</div>
