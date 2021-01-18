@extends('layouts.app')

@section('title')

    Modifier annonce

@endsection

@section('header')

    <style>
        body{
            background-color: #F8F8F8;
        }
        .text2 input[type="text"], .text2 textarea {
            height:100%;
            width:100%;
            margin: 0 auto;
        }
        #map-canvas{
            width: 600px;
            height: 300px;
        }
        #searchmap{
            width:600px;

        }
        .productbox {
            background-color:#ffffff;
            padding:10px;
            margin:5px 0;
            border: 1px solid #cfcfcf;
            -moz-box-shadow: 2px 2px 4px 0px #cfcfcf;
            -webkit-box-shadow: 2px 2px 4px 0px #cfcfcf;
            -o-box-shadow: 2px 2px 4px 0px #cfcfcf;
            box-shadow: 2px 2px 4px 0px #cfcfcf;
            filter:progid:DXImageTransform.Microsoft.Shadow(color=#cfcfcf, Direction=134, Strength=4);
        }
        .producttitle {
            font-weight:bold;
            font-size:1.2em;
            padding:5px 0 5px 0;
        }

        .productprice {
            border-top:1px solid #dadada;
            padding-top:5px;
        }

        .pricetext {
            font-weight:bold;
            font-size:1.4em;
        }

    </style>
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBCWWy1b2U-liHIrOqQAtl2pMMjuBQfMAQ&libraries=places"
            type="text/javascript"></script>
@endsection


@section('content')

    <div class="container">
        <div class="row profile">
            @include('website.profil.menu')
            <div class="col-md-9">
                <section class="content-header">
                    <h1>
                        Modifier votre annonce
                    </h1>
                    <ol class="breadcrumb">
                        <li><a href="{{url('/settings')}}"><i class="fa fa-gears"></i>  Paramètres </a></li>
                        <li><a href="{{url('/mesAnnoncesenattente')}}"> Annonces en attente  </a></li>
                    </ol>
                </section>
                <div class="profile-content">

                        {!!Form::model($bu,['url' => '/editAnnonce' ,'method'=>'PATCH', 'files'=>true] ) !!}
                       <input type="hidden" name="bu_id" value="{{ $bu->id }}" />
                             @include('/website/profil/formEditAnnonce')
                        {!! Form::close()!!}



                </div>
            </div>

        </div>
    </div>
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