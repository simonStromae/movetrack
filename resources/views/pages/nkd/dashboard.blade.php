@extends('layouts.back-app')


@section('title','Tableau de bord')
@section('content')

    <div class="container-fluid">
{{--        <div class="container">--}}
            <div class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1 class="m-0 text-dark">Dashboard</h1>
                        </div><!-- /.col -->
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
    {{--                            {{ Breadcrumbs::render('home') }}--}}
                            </ol>
                        </div><!-- /.col -->
                    </div><!-- /.row -->
                </div><!-- /.container-fluid -->
            </div>
{{--            <div class="card card-primary">--}}
{{--            <div class="card-header">--}}
{{--                <div class="card-title">--}}
{{--                    Donnees du Dashboard--}}
{{--                </div>--}}
{{--            </div>--}}
{{--            <div class="card-body">--}}
    <!-- Info boxes -->
        <div class="row">
            <div class="col-12 col-sm-6 col-md-4">
                <div class="info-box">
                    <span class="info-box-icon bg-info elevation-1"><i class="fas fa-dollar-sign"></i></span>

                    <div class="info-box-content">
                        <span class="info-box-text">TOTAL REVENU</span>
                        <span class="info-box-number"><small>Total :</small> {{benefitCount()}} XAF</span>
{{--                        <span class="info-box-number"><small>Aujourd'hui :</small> {{benefitCount(true)}} XAF</span>--}}
                    </div>
                    <!-- /.info-box-content -->
                </div>
                <!-- /.info-box -->
            </div>
            <!-- /.col -->
            <div class="col-12 col-sm-6 col-md-3">
                <div class="info-box mb-3">
                    <span class="info-box-icon bg-danger elevation-1"><i class="fas fa-thumbs-down"></i></span>

                    <div class="info-box-content">
                        <span class="info-box-text text-uppercase font-weight-bold">Track Echoues</span>
                        <span class="info-box-number">{{trackCount('decline')}}</span>
                    </div>
                    <!-- /.info-box-content -->
                </div>
                <!-- /.info-box -->
            </div>
            <!-- /.col -->

            <!-- fix for small devices only -->
            <div class="clearfix hidden-md-up"></div>

            <div class="col-12 col-sm-6 col-md-3">
                <div class="info-box mb-3">
                    <span class="info-box-icon bg-success elevation-1"><i class="fas fa-thumbs-up"></i></span>

                    <div class="info-box-content">
                        <span class="info-box-text text-uppercase font-weight-bold">Track Reussis</span>
                        <span class="info-box-number">{{trackCount('success')}}</span>
                    </div>
                    <!-- /.info-box-content -->
                </div>
                <!-- /.info-box -->
            </div>
            <!-- /.col -->
            <div class="col-12 col-sm-6 col-md-2">
                <div class="info-box mb-3">
                    <span class="info-box-icon bg-warning elevation-1"><i class="fas fa-users"></i></span>

                    <div class="info-box-content">
                        <span class="info-box-text text-uppercase font-weight-bold">Clients</span>
                        <span class="info-box-number">{{clientCount()}}</span>
                    </div>
                    <!-- /.info-box-content -->
                </div>
                <!-- /.info-box -->
            </div>
            <!-- /.col -->
        </div>
        <!-- /.row -->

        <!-- Main content -->
        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    @livewire('nkd.chart.chart-dashboard')
                </div>
                <!-- /.row -->
            </div><!-- /.container-fluid -->
        </section>
        <!-- /.content -->

{{--            </div>--}}
{{--        </div>--}}
{{--        </div>--}}
    </div>
@endsection

@push('js')

{{--    <!-- jQuery -->--}}
{{--    <script src="/back-office/plugins/jquery/jquery.min.js"></script>--}}
{{--    <!-- Bootstrap 4 -->--}}
{{--    <script src="/back-office/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>--}}
{{--    <!-- ChartJS -->--}}
{{--    <script src="/back-office/plugins/chart.js/Chart.min.js"></script>--}}
{{--    <!-- AdminLTE App -->--}}
{{--    <script src="/back-office/dist/js/adminlte.min.js"></script>--}}
{{--    <!-- AdminLTE for demo purposes -->--}}
{{--    <script src="/back-office/dist/js/demo.js"></script>--}}
    <!-- Page specific script -->
{{--    <script>--}}
{{--        $(function () {--}}
{{--            /* ChartJS--}}
{{--             * ---------}}
{{--             * Here we will create a few charts using ChartJS--}}
{{--             */--}}

{{--            //----------------}}
{{--            //- AREA CHART ---}}
{{--            //----------------}}

{{--            // Get context with jQuery - using jQuery's .get() method.--}}
{{--            var areaChartCanvas = $('#areaChart').get(0).getContext('2d')--}}

{{--            var areaChartData = {--}}
{{--                labels  : ['January', 'February', 'March', 'April', 'May', 'June', 'July'],--}}
{{--                datasets: [--}}
{{--                    {--}}
{{--                        label               : 'Digital Goods',--}}
{{--                        backgroundColor     : 'rgba(60,141,188,0.9)',--}}
{{--                        borderColor         : 'rgba(60,141,188,0.8)',--}}
{{--                        pointRadius          : false,--}}
{{--                        pointColor          : '#3b8bba',--}}
{{--                        pointStrokeColor    : 'rgba(60,141,188,1)',--}}
{{--                        pointHighlightFill  : '#fff',--}}
{{--                        pointHighlightStroke: 'rgba(60,141,188,1)',--}}
{{--                        data                : [28, 48, 40, 19, 86, 27, 90]--}}
{{--                    },--}}
{{--                    {--}}
{{--                        label               : 'Electronics',--}}
{{--                        backgroundColor     : 'rgba(210, 214, 222, 1)',--}}
{{--                        borderColor         : 'rgba(210, 214, 222, 1)',--}}
{{--                        pointRadius         : false,--}}
{{--                        pointColor          : 'rgba(210, 214, 222, 1)',--}}
{{--                        pointStrokeColor    : '#c1c7d1',--}}
{{--                        pointHighlightFill  : '#fff',--}}
{{--                        pointHighlightStroke: 'rgba(220,220,220,1)',--}}
{{--                        data                : [65, 59, 80, 81, 56, 55, 40]--}}
{{--                    },--}}
{{--                ]--}}
{{--            }--}}

{{--            var areaChartOptions = {--}}
{{--                maintainAspectRatio : false,--}}
{{--                responsive : true,--}}
{{--                legend: {--}}
{{--                    display: false--}}
{{--                },--}}
{{--                scales: {--}}
{{--                    xAxes: [{--}}
{{--                        gridLines : {--}}
{{--                            display : false,--}}
{{--                        }--}}
{{--                    }],--}}
{{--                    yAxes: [{--}}
{{--                        gridLines : {--}}
{{--                            display : false,--}}
{{--                        }--}}
{{--                    }]--}}
{{--                }--}}
{{--            }--}}

{{--            // This will get the first returned node in the jQuery collection.--}}
{{--            var areaChart       = new Chart(areaChartCanvas, {--}}
{{--                type: 'line',--}}
{{--                data: areaChartData,--}}
{{--                options: areaChartOptions--}}
{{--            })--}}

{{--            //---------------}}
{{--            //- LINE CHART ---}}
{{--            //----------------}}
{{--            var lineChartCanvas = $('#lineChart').get(0).getContext('2d')--}}
{{--            var lineChartOptions = $.extend(true, {}, areaChartOptions)--}}
{{--            var lineChartData = $.extend(true, {}, areaChartData)--}}
{{--            lineChartData.datasets[0].fill = false;--}}
{{--            lineChartData.datasets[1].fill = false;--}}
{{--            lineChartOptions.datasetFill = false--}}

{{--            var lineChart = new Chart(lineChartCanvas, {--}}
{{--                type: 'line',--}}
{{--                data: lineChartData,--}}
{{--                options: lineChartOptions--}}
{{--            })--}}

{{--            //---------------}}
{{--            //- DONUT CHART ---}}
{{--            //---------------}}
{{--            // Get context with jQuery - using jQuery's .get() method.--}}
{{--            var donutChartCanvas = $('#donutChart').get(0).getContext('2d')--}}
{{--            var donutData        = {--}}
{{--                labels: [--}}
{{--                    'Chrome',--}}
{{--                    'IE',--}}
{{--                    'FireFox',--}}
{{--                    'Safari',--}}
{{--                    'Opera',--}}
{{--                    'Navigator',--}}
{{--                ],--}}
{{--                datasets: [--}}
{{--                    {--}}
{{--                        data: [700,500,400,600,300,100],--}}
{{--                        backgroundColor : ['#f56954', '#00a65a', '#f39c12', '#00c0ef', '#3c8dbc', '#d2d6de'],--}}
{{--                    }--}}
{{--                ]--}}
{{--            }--}}
{{--            var donutOptions     = {--}}
{{--                maintainAspectRatio : false,--}}
{{--                responsive : true,--}}
{{--            }--}}
{{--            //Create pie or douhnut chart--}}
{{--            // You can switch between pie and douhnut using the method below.--}}
{{--            var donutChart = new Chart(donutChartCanvas, {--}}
{{--                type: 'doughnut',--}}
{{--                data: donutData,--}}
{{--                options: donutOptions--}}
{{--            })--}}

{{--            //---------------}}
{{--            //- PIE CHART ---}}
{{--            //---------------}}
{{--            // Get context with jQuery - using jQuery's .get() method.--}}
{{--            var pieChartCanvas = $('#pieChart').get(0).getContext('2d')--}}
{{--            var pieData        = donutData;--}}
{{--            var pieOptions     = {--}}
{{--                maintainAspectRatio : false,--}}
{{--                responsive : true,--}}
{{--            }--}}
{{--            //Create pie or douhnut chart--}}
{{--            // You can switch between pie and douhnut using the method below.--}}
{{--            var pieChart = new Chart(pieChartCanvas, {--}}
{{--                type: 'pie',--}}
{{--                data: pieData,--}}
{{--                options: pieOptions--}}
{{--            })--}}

{{--            //---------------}}
{{--            //- BAR CHART ---}}
{{--            //---------------}}
{{--            var barChartCanvas = $('#barChart').get(0).getContext('2d')--}}
{{--            var barChartData = $.extend(true, {}, areaChartData)--}}
{{--            var temp0 = areaChartData.datasets[0]--}}
{{--            var temp1 = areaChartData.datasets[1]--}}
{{--            barChartData.datasets[0] = temp1--}}
{{--            barChartData.datasets[1] = temp0--}}

{{--            var barChartOptions = {--}}
{{--                responsive              : true,--}}
{{--                maintainAspectRatio     : false,--}}
{{--                datasetFill             : false--}}
{{--            }--}}

{{--            var barChart = new Chart(barChartCanvas, {--}}
{{--                type: 'bar',--}}
{{--                data: barChartData,--}}
{{--                options: barChartOptions--}}
{{--            })--}}

{{--            //-----------------------}}
{{--            //- STACKED BAR CHART ---}}
{{--            //-----------------------}}
{{--            var stackedBarChartCanvas = $('#stackedBarChart').get(0).getContext('2d')--}}
{{--            var stackedBarChartData = $.extend(true, {}, barChartData)--}}

{{--            var stackedBarChartOptions = {--}}
{{--                responsive              : true,--}}
{{--                maintainAspectRatio     : false,--}}
{{--                scales: {--}}
{{--                    xAxes: [{--}}
{{--                        stacked: true,--}}
{{--                    }],--}}
{{--                    yAxes: [{--}}
{{--                        stacked: true--}}
{{--                    }]--}}
{{--                }--}}
{{--            }--}}

{{--            var stackedBarChart = new Chart(stackedBarChartCanvas, {--}}
{{--                type: 'bar',--}}
{{--                data: stackedBarChartData,--}}
{{--                options: stackedBarChartOptions--}}
{{--            })--}}
{{--        })--}}
{{--    </script>--}}
@endpush
