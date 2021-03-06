<div class="container-fluid">






    <div class="container-fluid">
    {{-- If you look to others for fulfillment, you will never truly be fulfilled. --}}

    @section('title','Liste des besoins')

    <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    {{--                        <div class="col-sm-6">--}}
                    {{--                            <h1 class="m-0 text-dark">Liste de Tracks</h1>--}}
                    {{--                        </div><!-- /.col -->--}}
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
                    <h3 class="card-title font-weight-bold">Liste des Besoins</h3>
                    <a href="{{route('backend.category.create')}}" class="float-right btn btn-primary btn-sm ml-1"><i class="fas fa-plus-circle mr-1"></i>Ajouter une catégorie</a>
                </div>
                <!-- /.card-header -->

                <div class="card-body">
                    {{--                @if(session()->has('sms_error'))--}}
                    {{--                    <div class="alert alert-danger alert-dismissible">--}}
                    {{--                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>--}}
                    {{--                        <h5><i class="icon fas fa-times"></i> Echec !</h5>--}}
                    {{--                        {!! session('sms_error')!!}--}}
                    {{--                    </div>--}}
                    {{--                @endif--}}
                    @if(!empty($categories) && $categories->count() >0)
                        <table id="example1" class="table table-bordered table-striped">
                            <thead>
                            <tr>
                                <th>No</th>
                                <th>Nom</th>
                                <th>description</th>

                                <th>Action</th>
                            </tr>
                            </thead>
                            <tbody>

                            @forelse($categories as $c)
                                <tr>
                                    <td><strong>{{$loop->index+1}}</strong></td>
                                    <td> <a href="#" style="text-decoration: none">{{$c->name}}</a></td>
                                    <td>{{$c->description}}</td>

                                    <td>
                                        <a class="btn btn-outline-primary btn-xs" href="{{route('backend.category.edit',$c->id)}}"><i class="fas fa-user-edit"></i></a>
                                        <a class="btn btn-outline-danger btn-xs"  href="" data-toggle="modal" data-target="#modal-{{ $c->id }}"><i class="fas fa-trash"></i></a>

                                        @include('layouts.partials.delete_modal',
                                           [
                                               'id'=> $c->id,
                                               'name'=> 'Catégorie',
                                               "route"=> route('backend.category.destroy', $c->id),
                                               "sms"=> "Vouler-vous supprimer définitivement la Catégorie : $c->name?"
                                           ])
                                    </td>
                                </tr>

                            @empty

                            @endforelse
                            </tbody>
                        </table>
                    @else
                        <div class="error-content text-center">
                            <h3><i class="fas fa-exclamation-triangle text-warning"></i> Oops! Données non disponible.</h3>

                            <p>
                                Vous ne disposez pas d'information dans votre tableau.
                                Ajouter une catégorie en cliquant ici <i class="ml-2 mr-2 fas fa-arrow-right"></i> <a href="{{ route('backend.category.create') }}">Ajouter</a>.
                            </p>
                        </div>
                    @endif

                </div>
                <!-- /.card-body -->
            </div>
        </section>




        @push('css')
            <link rel="stylesheet" href="/back-office/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
            <link rel="stylesheet" href="/back-office/plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
        @endpush

        @push('js')
        <!-- DataTables -->
            <script src="/back-office/plugins/datatables/jquery.dataTables.min.js"></script>
            <script src="/back-office/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
            <script src="/back-office/plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
            <script src="/back-office/plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
            <script>
                $(function () {
                    $("#example1").DataTable({
                        "responsive": false,
                        "autoWidth": true,
                    });
                    // $('#example2').DataTable({
                    //     "paging": true,
                    //     "lengthChange": false,
                    //     "searching": false,
                    //     "ordering": true,
                    //     "info": true,
                    //     "autoWidth": false,
                    //     "responsive": true,
                    // });
                });
            </script>
        @endpush

    </div>


    {{-- Nothing in the world is as soft and yielding as water. --}}
</div>
