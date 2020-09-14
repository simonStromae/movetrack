




<div class="container-fluid">

@section('title','Liste des Quartiers')

<!-- Content Header (Page header) -->
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
                <h3 class="card-title font-weight-bold">Liste des Quartiers</h3>
                <a href="{{ route('backend.quater.create') }}" class="float-right btn btn-primary btn-sm ml-1"><i class="fas fa-plus-circle mr-1"></i>Ajouter une ville</a>
            </div>
            <!-- /.card-header -->

            <div class="card-body">
                @if(!empty($quaters) && $quaters->count() >0)
                    <table id="example1" class="table table-bordered table-striped">
                        <thead>
                        <tr>
                            <th>No</th>
                            <th>Nom</th>
                            <th>Abreviation</th>
                            <th>Action</th>
                        </tr>
                        </thead>
                        <tbody>

                        @forelse($quaters as $q)
                            <tr >
                                <td>{{$loop->index+1}}</td>

                                <td>
                                    <strong>{{$q->name}}</strong>
                                </td>
                                <td>
                                    <span class="text-secondary">{{$q->slug}}</span>
                                </td>
                                <td>
                                    <a class="btn btn-outline-primary btn-xs" href="{{route('backend.city.edit',$q->id)}}"><i class="fas fa-user-edit"></i></a>
                                    <a class="btn btn-outline-danger btn-xs"  href="" data-toggle="modal" data-target="#modal-{{ $q->id }}"><i class="fas fa-trash"></i></a>

                                    @include('layouts.partials.delete_modal',
                                       [
                                           'id'=> $q->id,
                                           'name'=> 'Quartiers',
                                           "route"=> route('backend.quater.destroy', $q->id),
                                           "sms"=> "Vouler-vous supprimer définitivement le Quartiers : $q->name?"
                                       ])
                                </td>
                            </tr>

                        @empty

                        @endforelse
                        </tbody>
                    </table>
                @else
                    <div class="error-content text-center">
                        <h3><i class="fas fa-exclamation-triangle text-warning"></i> Oops! Aucune Données.</h3>

                        <p>
                            Vous ne disposez pas d'information dans votre tableau.
                            Ajouter un Quartiers en cliquant ici <i class="ml-2 mr-2 fas fa-arrow-right"></i> <a href="{{ route('backend.quater.create') }}">ajouter un Quartiers</a>.
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
