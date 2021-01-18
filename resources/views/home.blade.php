@extends('layouts.app')

@section('content')
<div class="container" style="margin-bottom: 220px;">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Bienvenue sur notre site.</div>

                <div class="panel-body">
                    <a href="{{url('/articles')}}"><i class="fa fa-search"aria-hidden="true"></i> Rechercher une annonce? </a>
                   <div class="clearfix"></div><br>
                    <a href="{{url('/addprojet')}}"><i class="fa fa-building-o"aria-hidden="true"></i> Déposer une annonce? </a>
                    <div class="clearfix"></div><br>
                    <a href="{{url('/settings')}}"><i class="fa fa-user"aria-hidden="true"></i> Accéder à votre compte? </a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
