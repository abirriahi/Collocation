@extends('admin.layouts.layout')
@section('title')
    AdminPanel
@endsection
@section('header')

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script src="http://maps.google.com/maps/api/js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gmaps.js/0.4.24/gmaps.js"></script>

    <style type="text/css">
        #mymap {
            border:1px solid red;
            width: 800px;
            height: 500px;
        }
    </style>

@endsection
@section('content')

    <section class="content-header">
        <h1>
            Panneau de commande d'admin
            <small>ColocationsTN</small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="{{ url('/adminpanel')}}"><i class="fa fa-dashboard"></i> Acceuil </a></li>

        </ol>
    </section>

    <!-- Main content -->

    <section class="content">
        <!-- Info boxes -->
        <div class="row">
            <div class="col-md-3 col-sm-6 col-xs-12">
                <a href="{{ url('/adminpanel/contact')}}">
                <div class="info-box">
                    <span class="info-box-icon bg-aqua"><i class="fa fa-envelope-o"></i></span>
                    <div class="info-box-content">
                        <span class="info-box-text"> Messages reçus</span>
                        <span class="info-box-number"> {{ $contactUsCount}}</span>
                    </div><!-- /.info-box-content -->
                </div><!-- /.info-box -->
                    </a>
            </div><!-- /.col -->

            <div class="col-md-3 col-sm-6 col-xs-12">
                <a href="{{ url('/adminpanel/articles')}}">
                <div class="info-box">
                    <span class="info-box-icon bg-red"><i class="fa fa-building"></i></span>
                    <div class="info-box-content">
                        <span class="info-box-text">Annonces non validées</span>
                        <span class="info-box-number"> {{ $buWating}}</span>
                    </div><!-- /.info-box-content -->
                </div><!-- /.info-box -->
                    </a>
            </div><!-- /.col -->


            <div class="col-md-3 col-sm-6 col-xs-12">
                <a href="{{ url('/adminpanel/articles')}}">
                <div class="info-box">
                    <span class="info-box-icon bg-green"><i class="fa fa-building-o"></i></span>
                    <div class="info-box-content">
                        <span class="info-box-text"> Annonces validées </span>
                        <span class="info-box-number">{{ $buCountactive  }} </span>
                    </div><!-- /.info-box-content -->
                </div><!-- /.info-box -->
                    </a>
            </div><!-- /.col -->

            <div class="col-md-3 col-sm-6 col-xs-12">
                <a href="{{ url('/adminpanel/users')}}">
                <div class="info-box">
                    <span class="info-box-icon bg-yellow"><i class="ion ion-ios-people-outline"></i></span>
                    <div class="info-box-content">
                        <span class="info-box-text">Inscrits sur le site</span>
                        <span class="info-box-number">  {{ $usersCount}} </span>
                    </div><!-- /.info-box-content -->
                </div><!-- /.info-box -->
                </a>
            </div><!-- /.col -->


        </div>

        <!--statistic-->
        <div class="row">
            <div class="col-md-12">
                <div class="box">
                    <div class="box-header with-border">
                        <h3 class="box-title">
                           Les annonces publiées cette annéee.
                        </h3>
                        <div class="box-tools pull-left">
                            <button class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
                            <button class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
                        </div>
                    </div><!-- /.box-header -->
                    <div class="box-body">
                        <div class="row">
                            <div class="col-md-12">
                                <p class="text-center">
                                    <strong>Les statistiques d'ajout des annonces </strong>
                                </p>
                                <div class="chart">
                                    <!-- Sales Chart Canvas -->
                                    <canvas id="salesChart" style="height: 180px;"></canvas>
                                </div><!-- /.chart-responsive -->
                            </div><!-- /.col -->

                        </div><!-- /.row -->
                    </div><!-- ./box-body -->

                </div><!-- /.box -->
            </div><!-- /.col -->
        </div><!-- /.row -->

        <!-- zone d'annonce-->
        <div class="row">
            <!-- Left col -->
            <div class="col-md-8">
                <!-- MAP & BOX PANE -->



                <div class="box box-success">
                    <div class="box-header with-border">
                        <h3 class="box-title">
                            Localisation des annonces
                        </h3>
                        <div class="box-tools pull-left">
                            <button class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
                            <button class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
                        </div>
                    </div><!-- /.box-header -->

                    <div class="box-body no-padding">
                        <div class="row">
                            <div class="col-md-9 col-sm-8">
                                <div class="pad">

                                    <div class="box">

                                        <div class="box-body">
                                        </div>
                                        <div id="mymap" style="width:100%;height:300px; margin:0 auto;"></div>

                                        <script type="text/javascript">
                                            var articles = <?php print_r(json_encode($articles)) ?>;
                                            var mymap = new GMaps({
                                                el: '#mymap',
                                                lat: 35.1010818,
                                                lng: 9.2054081,
                                                zoom: 7
                                            });
                                            $.each(articles, function (index, value) {
                                                mymap.addMarker({
                                                    lat: value.art_latitude,
                                                    lng: value.art_langtuide,
                                                    title: value.art_ville,
                                                    click: function (e) {
                                                        alert('This is ' + value.art_description + ', on map.');
                                                    }
                                                });
                                            });
                                        </script>

                                    </div>

                                </div>
                            </div>


                            <div class="col-md-3 col-sm-4">
                                <div class="pad box-pane-right bg-green" style="">
                                    <div class="description-block margin-bottom">
                                        <h5 class="description-header">{{$buCountactive}}</h5>
                                            <span class="description-text">
                                              Annonces Validées
                                            </span>
                                    </div><!-- /.description-block -->
                                    <div class="description-block margin-bottom">
                                        <h5 class="description-header">{{ $buWating }}</h5>
                                            <span class="description-text">
                                              Annonces non validées
                                            </span>
                                    </div><!-- /.description-block -->
                                    <div class="description-block">
                                        <h5 class="description-header">{{ $buCountactive + $buWating }}</h5>
                                            <span class="description-text">
                                               Annonces en tout
                                            </span>
                                    </div><!-- /.description-block -->
                                </div>



                            </div><!-- /.col -->
                        </div><!-- /.row -->
                    </div><!-- /.box-body -->
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <!-- TABLE: LATEST ORDERS -->
                        <div class="box box-info">

                            <div class="box-header with-border">
                                <h3 class="box-title"> Derniers Messages Reçus </h3>
                                <div class="box-tools pull-left">
                                    <button class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
                                    <button class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
                                </div>
                            </div><!-- /.box-header -->

                            <div class="box-body">
                                <div class="table-responsive">
                                    <table class="table no-margin">
                                        <thead>
                                        <tr>
                                            <th>ID</th>
                                            <th>Utilisateur</th>
                                            <th>Email</th>
                                            <th>Vu</th>
                                            <th>Catégorie</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        @foreach($lastesContactus  as $contactus)
                                            <tr>
                                                <td><a href="{{ url('/adminpanel/contact/'.$contactus->id.'/edit') }}">{{$contactus->id }}</a></td>
                                                <td><a href="{{ url('/adminpanel/contact/'.$contactus->id.'/edit') }}">{{$contactus->contact_name }} </a></td>
                                                <td><span class="label label-success">{{$contactus->contact_email}}</span></td>
                                                <td>{!! $contactus->view == 0 ? ' <i class="fa fa-eye btn btn-danger"></i> ' : '<i class="fa fa-eye btn btn-warning"></i>' !!}</td>
                                                <td>{{contact()[$contactus->contact_type]}}</td>
                                            </tr>
                                        @endforeach

                                        </tbody>
                                    </table>
                                </div><!-- /.table-responsive -->
                            </div><!-- /.box-body -->
                            <div class="box-footer clearfix">
                                <a href="{{ url('/adminpanel/contact') }}" class="btn btn-sm btn-info btn-flat pull-left"> tous les messages</a>
                            </div><!-- /.box-footer -->
                        </div><!-- /.box -->
                    </div>

                    <div class="col-md-6">
                        <!-- USERS LIST -->
                        <div class="box box-danger">
                            <div class="box-header with-border">
                                <h3 class="box-title">
                                    Derniers utilisateurs inscrits
                                </h3>
                                <div class="box-tools pull-left">
                                    <span class="label label-danger"></span>
                                    <button class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
                                    <button class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
                                </div>
                            </div><!-- /.box-header -->
                            <div class="box-body no-padding">
                                <ul class="users-list clearfix">
                                    @foreach($lastesUsers as $user)
                                        <li>
                                            {!! Html::image('/admin/dist/img/user-image.png') !!}
                                            <a class="users-list-name" href="{{ url('/adminpanel/users/'.$user->id.'/edit')}}">{{ $user->name }}</a>
                                            <span class="users-list-date">{{ $user->created_at }}</span>
                                        </li>
                                    @endforeach
                                </ul><!-- /.users-list -->
                            </div><!-- /.box-body -->
                            <div class="box-footer text-center">
                                <a href="{{ url('/adminpanel/users')}}" class="uppercase">Tous les utilisateurs</a>
                            </div><!-- /.box-footer -->
                        </div><!--/.box -->
                    </div><!-- /.col -->
                </div>
            </div>




            <div class="col-md-4">

                <!-- PRODUCT LIST -->
                <div class="box box-primary">
                    <div class="box-header with-border">
                        <h3 class="box-title"> Dernières annonces ajoutées </h3>
                        <div class="box-tools pull-right">
                            <button class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
                            <button class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
                        </div>
                    </div><!-- /.box-header -->
                    <div class="box-body">
                        <ul class="products-list product-list-in-box">

                            @foreach($lastesBu as $bu)
                                <li class="item">

                                    <div class="product-info">
                                        <a href="{{ url('/adminpanel/articles/'.$bu->id.'/edit') }}" class="product-title"> {{ $bu->art_nom }}  <span class="label label-warning pull-right"> {{ $bu->art_prix }} </span></a>

                                    </div>
                                </li><!-- /.item -->
                            @endforeach
                        </ul>
                    </div><!-- /.box-body -->






                    <div class="box-footer text-center">
                        <a href="{{ url('adminpanel/articles/')}} " class="uppercase">Toutes les annonces</a>
                    </div><!-- /.box-footer -->
                </div><!-- /.box -->
            </div>
        </div>



        <div class="box-body">
            <ul class="products-list product-list-in-box">

                @foreach($lastesdemande as $bu)
                    <li class="item">

                        <div class="product-info">
                            <a href="{{ url('/adminpanel/articles/'.$bu->id.'/edit') }}" class="product-title"> {{ $bu->art_nom }}  <span class="label label-warning pull-right"> {{ $bu->art_prix }} </span></a>

                        </div>
                    </li><!-- /.item -->
                @endforeach
            </ul>
        </div><!-- /.box-body -->





    </section>  <!-- /.content -->
@endsection

@section('footer')

    <script>

        /* ChartJS
         * -------
         * Here we will create a few charts using ChartJS
         */

        //-----------------------
        //- MONTHLY SALES CHART -
        //-----------------------

        // Get context with jQuery - using jQuery's .get() method.
        var salesChartCanvas = $("#salesChart").get(0).getContext("2d");
        // This will get the first returned node in the jQuery collection.
        var salesChart = new Chart(salesChartCanvas);

        var salesChartData = {
            labels: [
                "Janvier",
                "Février",
                "Mars",
                "Avril",
                "Mai",
                "Juin",
                "Juillet",
                "Août",
                "Septembre",
                "Octobre",
                "Novembre",
                "Décembre",


            ],
            datasets: [

                {
                    label: "Digital Goods",
                    fillColor: "rgba(60,141,188,0.9)",
                    strokeColor: "rgba(60,141,188,0.8)",
                    pointColor: "#3b8bba",
                    pointStrokeColor: "rgba(60,141,188,1)",
                    pointHighlightFill: "#fff",
                    pointHighlightStroke: "rgba(60,141,188,1)",
                    data: [
                        @foreach($new as $c)
                        @if(is_array($c))
                        {{ $c['counting'] }},
                        @else
                        {{ $c }},
                        @endif

                        @endforeach
                    ]
                }
            ]
        };

        /* jVector Maps
         * ------------
         * Create a world map with markers
         */
        $('#world-map-markers').vectorMap({
            map: 'world_mill_en',
            normalizeFunction: 'polynomial',
            hoverOpacity: 0.7,
            hoverColor: false,
            backgroundColor: 'transparent',
            regionStyle: {
                initial: {
                    fill: 'rgba(210, 214, 222, 1)',
                    "fill-opacity": 1,
                    stroke: 'none',
                    "stroke-width": 0,
                    "stroke-opacity": 1
                },
                hover: {
                    "fill-opacity": 0.7,
                    cursor: 'pointer'
                },
                selected: {
                    fill: 'yellow'
                },
                selectedHover: {
                }
            },
            markerStyle: {
                initial: {
                    fill: '#00a65a',
                    stroke: '#111'
                }
            },
            markers: [

            ]
        });
    </script>


@endsection