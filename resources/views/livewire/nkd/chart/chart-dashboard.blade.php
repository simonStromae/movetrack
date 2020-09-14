



<div class="container-fluid">

        <div class="row">

            <div class="col-md-12">

                <div class="container-fluid" id="print_btn">
                    <div class="row">
                        <p class="">
                            <button onclick="share()" class="btn btn-outline-danger btn-sm">
                                <i class="fas fa-file-pdf"></i> Exporter en PDF
                            </button>
                        </p>
                    </div>
                    <br>
                </div>


                <div class="card ">
                    <div class="card-header">
                        <h3 class="card-title">Diagrammes</h3>

                        <div class="card-tools">
                            <button type="button" class="btn btn-tool" data-card-widget="collapse">
                                <i class="fas fa-minus"></i>
                            </button>
                            <button type="button" class="btn btn-tool" data-card-widget="remove">
                                <i class="fas fa-times"></i>
                            </button>
                        </div>
                    </div>


                    <div class="card-body">
                        <div class="row">

                            <div class="col-xs-12 col-md-6 ">
                                <h3 class="text-center">Nombre de tracks par Categories</h3>
                                <canvas id="pieChart" width="500" height="250"></canvas>
                                <br>
                            </div>

                            <div class="col-xs-12 col-md-6 ">
                                <h3 class="text-center">Nombre de client par Quartiers</h3>
                                <canvas id="dougnuthChart" width="500" height="250"></canvas>
                                <br>
                            </div>
                        </div>

                    </div>


                </div>

            </div>

        </div>



    @push('css')
        <script src="/back-office/plugins/chart.js/Chart.css"></script>
    @endpush

    @push('js')
        {{--        For chart Js--}}
        <script src="/back-office/plugins/chart.js/Chart.js"></script>
        <script src="/js/chartCode.js"></script>

            <script type="text/javascript">
                document.addEventListener('DOMContentLoaded',function(){

                    let tracks = @this.get('tracks');
                    let clients = @this.get('clients');
                    let categories = @this.get('categories');
                    console.log(tracks);

                    // window.livewire.on('reloader',benefitss =>{
                    //
                    //     // @this.set('clients',0);
                    //     // @this.set('gaz',0);
                    //     // @this.set('benefits',benefitss);
                    //
                    //     var benefits = @this.get('benefits');
                    //
                    //     chartPie(
                    //         clients[0],
                    //         clients[1],
                    //         'Nombre de Clients par Quartier',
                    //         'dougnuthChart'
                    //     );
                    //
                    //     chartBar(
                    //         gaz[0],
                    //         'Nombre de Commandes par Types de Bouteilles',
                    //         'barChart',
                    //         gaz[1]
                    //     );
                    //
                    //     chartLine(
                    //         benefits[0],
                    //         benefits[1],
                    //         "bénefices du jour",
                    //         'lineChart'
                    //     );
                    //
                    // });



                    chartPie(
                        tracks[0],
                        tracks[1],
                        'Nombre de Track par Categories',
                        'pieChart'
                    );

                    chartDoughnut(
                        clients[0],
                        clients[1],
                        'Client par Quartiers',
                        'dougnuthChart'
                    );

                    //
                    // chartBar(
                    //     gaz[0],
                    //     'Nombre de Commandes par Types de Bouteilles',
                    //     'barChart',
                    //     gaz[1]
                    // );
                    //
                    // chartLine(
                    //     benefits[0],
                    //     benefits[1],
                    //     "bénefices du jour",
                    //     'lineChart'
                    // );


                });



                function share(){
                    var print_btn = document.getElementById('print_btn');
                    var print = document.getElementById('print');
                    // var printClass = document.getElementsByClassName('print');

                    window.onbeforeprint= function (e) {
                        print_btn.style.display = 'none';
                        print.style.display = 'none';
                        // printClass.each(function(item){
                        //     item.style.display = 'none'
                        // });
                    };

                    window.print();
                }

            </script>
    @endpush



</div>
