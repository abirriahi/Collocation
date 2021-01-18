@extends('admin.layouts.layout')

@section('title')
    Annonces en map
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
            La localisation des annonces
        </h1>
        <ol class="breadcrumb">
            <li><a href="{{ url('/adminpanel')}}"><i class="fa fa-dashboard"></i>   </a>acceuil</li>
            <li class="active"><a href="{{ url('/adminpanel/gmaps')}}"> </a> Localisation des annonces </li>

        </ol>
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="row">
            <div class="col-xs-12">
                <div class="box">
                    <div class="box-header">

                    </div><!-- /.box-header -->
                    <div class="box-body">
                    </div>
                                    <div id="mymap" style="width:100%;height:500px; margin:0 auto;"></div>

                                    <script type="text/javascript">
                                    var articles = <?php print_r(json_encode($articles)) ?>;
                                    var mymap = new GMaps({
                                        el: '#mymap',
                                        lat: 35.1010818,
                                        lng: 9.2054081,
                                        zoom:7
                                    });
                                    $.each( articles, function( index, value ){
                                        mymap.addMarker({
                                            lat: value.art_latitude,
                                            lng: value.art_langtuide,
                                            title: value.art_ville,
                                            click: function(e) {
                                                alert('This is '+value.art_description+', on map.');
                                            }
                                        });
                                    });
                                    </script>

                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection

@section('footer')

@endsection