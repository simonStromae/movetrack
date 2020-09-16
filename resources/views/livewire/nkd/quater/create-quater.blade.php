






<div>


{{-- The best athlete wants his opponent at his best. --}}
@section('title','Ajouter une ville')
<!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0 text-dark">Ajouter une ville</h1>
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
                <h3 class="card-title"> <i class="fas fa-plus"></i> </h3>
            </div>
            <!-- /.card-header -->
            <!-- form start -->
            <form wire:submit.prevent="save">
                <div class="card-body">

                    <div class="row ">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="exampleInputEmail1">Nom </label>
                                <input type="text" wire:model.lazy="name"  class="form-control @error('name') is-invalid @enderror" id="exampleInputEmail1" placeholder="Nom du quartier" value="{{old('name')}}">
                                @error('name')
                                <div class="">
                                    <p class="text-sm text-danger">{{$message}}</p>
                                </div>
                                @enderror
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="exampleInputEmail1">Abréviation</label>
                                <input type="text" wire:model.lazy="slug"  class="form-control @error('slug') is-invalid @enderror" id="exampleInputEmail1" placeholder="Abréviation du quartier" value="{{old('slug')}}">
                                @error('slug')
                                <div class="">
                                    <p class="text-sm text-danger">{{$message}}</p>
                                </div>
                                @enderror
                            </div>
                        </div>

                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="exampleInputEmail1">Ville</label>

                                <select name="city"  wire:model.lazy="city_id" class="form-control @error('city_id') is-invalid @enderror" >
                                    <option value="">Choisir... </option>
                                    @forelse($cities as $c)
                                        <option value="{{$c->id}}">{{$c->name}}</option>
                                    @empty
                                        <span> Aucun quartier.</span>
                                    @endforelse
                                </select>
                                @error('city_id')
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
                    <button type="reset" class="btn btn-secondary "><i class="fas fa-recycle"></i> Réinitialiser </button>
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
