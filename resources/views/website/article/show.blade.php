@extends('layouts.app')

@section('title')
    Annonces
    {{ $article->name }}
@endsection

@section('header')

    {!! Html::style('website/css/all-articles.css') !!}
    <style>


    </style>
@endsection

@section('content')
    <div class="container">
        <div class="row profile">
            @include('website.article.sidebar')
            <div class="col-md-9">
                <div class="profile-content">
                    <h1>
                        {{ $article->art_nom }}
                    </h1>
                    <hr>
                    <div class="btn-group">
                        <a href="{{ url('/articles/search?art_prix=' . $article->art_prix) }}" class="btn btn-default">
                            Prix:
                            {{ $article->art_prix }}
                        </a>
                        <a href="{{ url('/articles/search?espace=' . $article->espace) }}" class="btn btn-default">
                            Superficie:
                            {{ $article->espace }}
                        </a>
                        <a href="{{ url('/articles/search?art_ville=' . $article->art_ville) }}" class="btn btn-default">
                            Région:
                            {{ art_ville()[$article->art_ville] }}
                        </a>
                        <a href="{{ url('/articles/search?chambres=' . $article->chambres) }}" class="btn btn-default">
                           Nombre de chambres:
                            {{ $article->chambres }}
                        </a>
                        <a href="{{ url('/articles/search?art_cathegorie=' . $article->art_cathegorie) }}" class="btn btn-default">
                            Type de logement:
                            {{ art_cathegorie()[$article->art_cathegorie] }}
                        </a>

                    </div>
                    <hr>
                    @if( count($article->images) == 0)
                       <div style="color: silver">Pas d'images disponibles. </div>
                    @elseif( count($article->images) == 1)
                        <div id="myCarousel" class="carousel slide" data-ride="carousel" >
                            <!-- Wrapper for slides -->
                            <div class="carousel-inner" role="listbox">
                                @foreach($article->images as $key => $image)
                                    <div class="item {{ $key == 0 ? 'active' : '' }} ">




                                        <img src="{{  Request::root().'/website/images/'.$image->path}}"style="margin: 0 auto; height:450px">
                                    </div>
                                @endforeach
                            </div>

                        </div>
                        @elseif( count($article->images) == 2)
                        <div id="myCarousel" class="carousel slide" data-ride="carousel" >
                            <ol class="carousel-indicators" style="margin-bottom: 50px">
                                <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                                <li data-target="#myCarousel" data-slide-to="1" ></li>
                            </ol>
                            <!-- Wrapper for slides -->
                            <div class="carousel-inner" role="listbox">
                                @foreach($article->images as $key => $image)
                                    <div class="item {{ $key == 0 ? 'active' : '' }} ">
                                        <img src="{{  Request::root().'/website/images/'.$image->path}}"style="margin: 0 auto; height:450px">
                                    </div>
                                @endforeach
                            </div>

                            <!-- Left and right controls -->
                            <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
                                <span class="fa fa-angle-left" style="margin-top: 220px; color:white;    text-shadow: 2px 2px 4px #000000;" aria-hidden="true"></span>
                                <span class="sr-only">Previous</span>
                            </a>
                            <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
                                <span class="fa fa-angle-right" style="margin-top: 220px; color:white;    text-shadow: 2px 2px 4px #000000;" aria-hidden="true"></span>
                                <span class="sr-only">Next</span>
                            </a>
                        </div>
                        @elseif ( count($article->images) == 3)
                        <div id="myCarousel" class="carousel slide" data-ride="carousel" >
                            <ol class="carousel-indicators" style="margin-bottom: 50px">
                                <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                                <li data-target="#myCarousel" data-slide-to="1" ></li>
                                <li data-target="#myCarousel" data-slide-to="2" ></li>
                            </ol>
                            <!-- Wrapper for slides -->
                            <div class="carousel-inner" role="listbox">
                                @foreach($article->images as $key => $image)
                                    <div class="item {{ $key == 0 ? 'active' : '' }} ">
                                        <img src="{{  Request::root().'/website/images/'.$image->path}}"style="margin: 0 auto; height:450px">
                                    </div>
                                @endforeach
                            </div>

                            <!-- Left and right controls -->
                            <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
                                <span class="fa fa-angle-left" style="margin-top: 220px; color:white;    text-shadow: 2px 2px 4px #000000;" aria-hidden="true"></span>
                                <span class="sr-only">Previous</span>
                            </a>
                            <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
                                <span class="fa fa-angle-right" style="margin-top: 220px; color:white;    text-shadow: 2px 2px 4px #000000;" aria-hidden="true"></span>
                                <span class="sr-only">Next</span>
                            </a>
                        </div>
                        @else
                        <div id="myCarousel" class="carousel slide" data-ride="carousel" >
                            <ol class="carousel-indicators" style="margin-bottom: 50px">
                                <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                                <li data-target="#myCarousel" data-slide-to="1" ></li>
                                <li data-target="#myCarousel" data-slide-to="2" ></li>
                                <li data-target="#myCarousel" data-slide-to="3" ></li>
                            </ol>
                            <!-- Wrapper for slides -->
                            <div class="carousel-inner" role="listbox">
                                @foreach($article->images as $key => $image)
                                    <div class="item {{ $key == 0 ? 'active' : '' }} ">
                                        <img src="{{  Request::root().'/website/images/'.$image->path}}"style="margin: 0 auto; height:450px">
                                    </div>
                                @endforeach
                            </div>

                            <!-- Left and right controls -->
                            <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
                                <span class="fa fa-angle-left" style="margin-top: 220px; color:white;    text-shadow: 2px 2px 4px #000000;" aria-hidden="true"></span>
                                <span class="sr-only">Previous</span>
                            </a>
                            <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
                                <span class="fa fa-angle-right" style="margin-top: 220px; color:white;    text-shadow: 2px 2px 4px #000000;" aria-hidden="true"></span>
                                <span class="sr-only">Next</span>
                            </a>
                        </div>
                    @endif

                    <hr>
                        @if (Auth::guest())
                        @elseif(Auth::user()->id!=$article->user_id)
                    <div class="pull-right" style="margin: 5px">
                        <a href="{{ route('messages.create',['user'=>$article->user_id]) }}"
                           class="btn btn-primary btm-sm" role="button">
                            Contacter l'annonceur
                        </a>
                    </div>
                    <div class="pull-right"style="margin: 5px">
                        <div class="item-tags" >
                            <p>
                            <li data-toggle="modal" data-target="#myModal1" class="btn btn-primary btm-sm" role="button"></i>  Afficher le numéro </li>
                            </p>
                        </div>
                    </div>

                    <div class="modal fade" id="myModal1" role="dialog">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-body">
                                    <center>  numero de telephone: {{$article->user->tel }} </center>
                                    <button type="button" class="close" data-dismiss="modal">&times;</button> <br>
                                </div>
                            </div>
                        </div>
                    </div>

                    @elseif (Auth::user()->id==$article->user_id)

                        <div class="pull-right"style="margin: 5px">
                            <div class="item-tags" >
                                <p>
                                <li data-toggle="modal" data-target="#myModal1" class="btn btn-primary btm-sm" role="button"></i>  Afficher le numéro </li>
                                </p>
                            </div>
                        </div>

                        <div class="modal fade" id="myModal1" role="dialog">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-body">
                                        <center>  numero de telephone: {{$article->user->tel }} </center>
                                        <button type="button" class="close" data-dismiss="modal">&times;</button> <br>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="pull-right" style="margin: 5px">
                            <a href="{{url('/mesAnnonces')}}"
                               class="btn btn-success btm-sm" role="button">
                            Gérer mes annonces
                            </a>
                        </div>

                    @endif




                    <div class="clearfix"></div>
                    <br>
                    <div style="margin-left:20px;">
                        <h3>Prix: </h3>
                        <p>
                            {!!  nl2br($article->art_prix) !!} TND
                        </p>
                        <br>

                        <h3>Superficie: </h3>
                        <p>
                            {!!  nl2br($article->espace) !!} m²
                        </p>
                        <br>

                        <h3>Description: </h3>
                        <p>
                            {!!  nl2br($article->art_description) !!}
                        </p>
                        <br>

                        <h3>Nombre de chambres: </h3>
                        <p>
                            {!!  nl2br($article->chambres) !!}
                        </p>
                        <br>


                        <h3>Addresse: </h3>
                        <p>
                            {!!  nl2br($article->art_address) !!}
                        </p>
                        <br>
                        <div id="map" style="width:100%;height:400px"></div>
                    </div>
                 </div>


                     <br>
                     <div class="profile-content">
                    <h3>
                        Plus d'annonces
                    </h3>
                    <hr>
                    @include('website.article.articles', ['articles' => $similar_type])
                </div>
            </div>

            <div class="clearfix"></div>
        </div>
    </div>

@endsection

@section('footer')
    {{--<script>--}}
        {{--function initMap() {--}}
            {{--var uluru = {lat: -25, lng: 131};--}}
            {{--var map = new google.maps.Map(document.getElementById('map'), {--}}
                {{--zoom: 4,--}}
                {{--center: uluru--}}
            {{--});--}}
            {{--var marker = new google.maps.Marker({--}}
                {{--position: uluru,--}}
                {{--map: map--}}
            {{--});--}}
        {{--}--}}
    {{--</script>--}}

    <script>
        function myMap() {
            var mapCanvas = document.getElementById("map");
            var myCenter = new google.maps.LatLng( {{ $article->art_latitude }}, {{ $article->art_langtuide }} );
            var mapOptions = {center: myCenter, zoom: 16};
            var map = new google.maps.Map(mapCanvas, mapOptions);
            var marker = new google.maps.Marker({
                position: myCenter,
                animation: google.maps.Animation.BOUNCE
            });
            marker.setMap(map);
        }
    </script>

    <script async defer
            src="https://maps.googleapis.com/maps/api/js?key=AIzaSyD2O3lH_FD7VJD2aQInZ_WOaYcNqv671HE&callback=myMap">
    </script>
@endsection