@extends('layouts.app')

@section('title')
Déposer votre annonce
@endsection

@section('header')
    {!! Html::style('website/css/all-articles.css') !!}
    <style>

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
    </style>


    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBCWWy1b2U-liHIrOqQAtl2pMMjuBQfMAQ&libraries=places"
            type="text/javascript"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>

@endsection

@section('content')
    <div class="container">
        <div class="row profile">
            @include('website.article.sidebar')
            <div class="col-md-9">
                <section class="content-header">
                    <h1>
                       Déposer votre annonce
                    </h1>
                    <ol class="breadcrumb">
                        <li><a href="{{url('/')}}"><i class="fa fa-home"></i>  Acceuil </a></li>
                        <li class="active"><a href="{{url('/addproject')}}"> Déposer votre annonce </a></li>
                    </ol>
                </section>


                <!-- Main content -->
                <section class="content">
                            <div class="row profile">
                                <div class="col-md-13">



                                        {!! Form::open( ['url' => '/articles' , 'method' => 'post','enctype'=>'multipart/form-data', 'files'=>true]) !!}
                                              @include('website.article.form')
                                        {!! Form::close() !!}



                                </div>
                        </div>
                </section>


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
    <script>
        $().ready(function(){
            $('.optionDemande').live('click',function()
            {
                if ($('.optionDemande').is(':checked')) {
                    $(".cacher").hide();

                }
            });
            $('.optionOffre').live('click',function()
            {
                if ($('.optionOffre').is(':checked')) {
                    $(".cacher").show();

                }
            });
        });
    </script>

@endsection
