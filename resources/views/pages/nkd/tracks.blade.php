@extends('layouts.back-app')



@section('title','Liste des besoins')

@section('content')




    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0 text-dark">Gestion des Clients</h1>
                </div><!-- /.col -->
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
                <a href="#" class="float-right btn btn-dark btn-sm ml-1"><i class="fas fa-plus-circle mr-1"></i>Ajouter un Besoin</a>
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
                @if($tracts->count() >0)
                    <table id="example1" class="table table-bordered table-responsive table-striped">
                        <thead>
                        <tr>
                            <th>Reference</th>
                            <th>Besoin</th>
                            <th>description</th>

                            <th>Catégorie</th>
                            <th>Budget</th>
                            <th>Client</th>

                            <th>Quartier</th>
                            <th>Date</th>
                            <th>Action</th>
                        </tr>
                        </thead>
                        <tbody>

                        @forelse($tracts as $t)
                            <tr>
                                <td><strong>{{$t->reference}}</strong></td>
                                <td> <a href="#" style="text-decoration: none">{{$t->designation}}</a></td>
                                <td>{{$t->description}}</td>

                                <td>{{$t->category}} </td>
                                <td>{{$t->budget}}</td>
                                <td>{{$t->client->name}}</td>

                                <td>{{$t->client->quater}}</td>
                                <td>{{$t->created_date}}</td>
                                <td>
{{--                                    <a class="btn btn-primary btn-xs" href="{{route('order.create',$c->id)}}"><i class="fas fa-plus-circle"></i>Commande</a>--}}
{{--                                    <a class="btn btn-outline-primary btn-xs" href="{{route('client.edit',$c->id)}}"><i class="fas fa-user-edit"></i></a>--}}
{{--                                    <a class="btn btn-outline-danger btn-xs"  href="" data-toggle="modal" data-target="#modal-{{ $c->id }}"><i class="fas fa-trash"></i></a>--}}

{{--                                    @include('layouts.partials.delete_modal',--}}
{{--                                       [--}}
{{--                                           'id'=> $c->id,--}}
{{--                                           'name'=> 'Client',--}}
{{--                                           "route"=> route('client.destroy', $c->id),--}}
{{--                                           "sms"=> "Vouler-vous supprimer définitivement le client : $c->name?"--}}
{{--                                       ])--}}
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
                            Ajouter un client en cliquant ici <i class="ml-2 mr-2 fas fa-arrow-right"></i> <a href="{{ route('track.create') }}">ajouter un besoin</a>.
                        </p>
                    </div>
                @endif

            </div>
            <!-- /.card-body -->
        </div>
    </section>


@endsection

@push('css')
    <link rel="stylesheet" href="/master/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="/master/plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
@endpush

@push('js')
    <!-- DataTables -->
    <script src="/master/plugins/datatables/jquery.dataTables.min.js"></script>
    <script src="/master/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
    <script src="/master/plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
    <script src="/master/plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
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
