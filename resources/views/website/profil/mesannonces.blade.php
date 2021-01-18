@extends('layouts.app')

@section('title')
    Annonces actives
@endsection

@section('header')
    <style>
        .productbox {
            background-color:#ffffff;
            padding: 16px;
            margin:0 auto;
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
@endsection

@section('content')

    <div class="container">
        <div class="row profile">
            @include('website.profil.menu')
            <div class="col-md-9">
                <section class="content-header">
                    <h1>
                        Annonces actives
                    </h1>
                    <ol class="breadcrumb">
                        <li><a href="{{url('/settings')}}"><i class="fa fa-gears"></i>  Paramètres </a></li>
                        <li class="active"><a href="{{url('/mesAnnoncesenattente')}}"> Annonces actives</a></li>
                    </ol>
                </section>
                <div class="profile-content">

                    @include('website.profil.myArticlesActive',['articles'=>$articles])

                    <div class="text-center">
                        {{ $articles->appends(Request::except('page'))->links() }}
                    </div>
                    <div class="clearfix"></div> <br>
                </div>

            </div>

        </div>
    </div>
@endsection
