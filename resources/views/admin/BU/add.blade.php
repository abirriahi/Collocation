@extends('admin.layouts.layout')

@section('title')
    Ajouter Annonce
@endsection

@section('header')

    <style>
        #map-canvas{
            width: 600px;
            height: 400px;
        }
        #searchmap{
            width:600px;
        }
    </style>

    <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBCWWy1b2U-liHIrOqQAtl2pMMjuBQfMAQ&libraries=places"
            type="text/javascript"></script>

@endsection


@section('content')

    <section class="content-header">
        <h1>
            Ajouter article
        </h1>
        <ol class="breadcrumb">
            <li><a href="{{ url('/adminpanel')}}"><i class="fa fa-dashboard"></i>   </a>acceuil</li>
            <li ><a href="{{ url('/adminpanel/articles')}}"> </a>tous les articles</li>
            <li class="active"><a href="{{ url('/adminpanel/articles/create')}}"> </a> ajouter nouveau article</li>

        </ol>
    </section>


    <!-- Main content -->
    <section class="content">
        <div class="row">
            <div class="col-xs-12">
                <div class="box">
                    <div class="box-header">
                        <h3 class="box-title">
                            Ajouter nouveau article
                        </h3>
                    </div><!-- /.box-header -->
                    <div class="box-body">
                        {!! Form::open( ['url' => '/adminpanel/articles' , 'method' => 'post','enctype'=>'multipart/form-data', 'files'=>true]) !!}
                        @include('admin.BU.form2')
                        {!! Form::close() !!}
                    </div>
                </div>
            </div>
        </div>
    </section>




@endsection




@section('footer')


    <script>


        var map = new google.maps.Map(document.getElementById('map-canvas'),{
            center:{
                lat: 35.7117261,
                lng: 10.0685793
            },
            zoom:5
        });

        var marker = new google.maps.Marker({
            position: {
                lat: 35.7117261,
                lng: 10.0685793
            },
            map: map,
            draggable: true
        });

        var searchBox = new google.maps.places.SearchBox(document.getElementById('searchmap'));

        google.maps.event.addListener(searchBox,'places_changed',function(){

            var places = searchBox.getPlaces();
            var bounds = new google.maps.LatLngBounds();
            var i, place;

            for(i=0; place=places[i];i++){
                bounds.extend(place.geometry.location);
                marker.setPosition(place.geometry.location); //set marker position new...
            }

            map.fitBounds(bounds);
            map.setZoom(15);

        });

        google.maps.event.addListener(marker,'position_changed',function(){

            var lat = marker.getPosition().lat();
            var lng = marker.getPosition().lng();

            $('#art_latitude').val(lat);
            $('#art_langtuide').val(lng);

        });

    </script>


@endsection
