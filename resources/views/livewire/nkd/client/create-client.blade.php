



<div>


    {{-- The best athlete wants his opponent at his best. --}}
@section('title','Ajouter un Client')
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
                    <h3 class="card-title"> <i class="fas fa-user-plus"></i> </h3>
                </div>
                <!-- /.card-header -->
                <!-- form start -->
                <form wire:submit.prevent="save">
                    <div class="card-body">

                        <div class="row ">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Nom et Prenom</label>
                                    <input type="text" wire:model.lazy="name"  class="form-control @error('name') is-invalid @enderror" id="exampleInputEmail1" placeholder="Nom complet" value="{{old('name')}}">
                                    @error('name')
                                        <div class="">
                                            <p class="text-sm text-danger">{{$message}}</p>
                                        </div>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="type_gaz">Quartier</label>

                                    <select name="quater" id="" wire:model.lazy="quater_id" class="form-control  @error('quater_id') is-invalid @enderror">
                                        <option>Choisir...</option>
                                        @forelse($quaters as $q)
                                            <option value="{{$q->id}}">{{$q->name}} </option>
                                        @empty
                                            <option class="text-secondary" value="">Aucun Quartier disponible</option>
                                        @endforelse
                                    </select>

                                    @error('quater_id')
                                    <div class="">
                                        <p class="text-sm text-danger">{{$message}}</p>
                                    </div>
                                    @enderror
                                </div>
                            </div>

                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Nom d'utilisateur</label>
                                    <input type="text" wire:model.lazy="username"  class="form-control @error('username') is-invalid @enderror" id="exampleInputEmail1" placeholder="Nom complet" value="{{old('username')}}">
                                    @error('username')
                                        <div class="">
                                            <p class="text-sm text-danger">{{$message}}</p>
                                        </div>
                                    @enderror
                                </div>
                            </div>


                            <div class="col-12">
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Mot de passe</label>
                                    <input type="password" wire:model.lazy="password"  class="form-control @error('name') is-invalid @enderror" id="exampleInputEmail1" placeholder="Mot de passe" >
                                    @error('password')
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
                            <i class="fas fa-spinner fa-spin" wire:loading wire:target="name"></i>
                            <i class="fas fa-plus" wire:loading.remove wire:target="name"></i>
                            Ajouter
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
