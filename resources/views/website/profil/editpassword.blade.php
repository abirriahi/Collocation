@extends('layouts.app')

@section('title')

    Compte {{ $user->name }}

@endsection

@section('header')


@endsection


@section('content')

    <div class="container">
        <div class="row profile">
            @include('website.profil.menu')
            <div class="col-md-9">
                <section class="content-header">
                    <h1>
                        Mot de passe
                    </h1>
                    <ol class="breadcrumb">
                        <li><a href="{{url('/settings')}}"><i class="fa fa-gears"></i>  Paramètres </a></li>
                        <li class="active"><a href="{{url('/changePassword')}}"> Modifier mot de passe </a></li>
                    </ol>
                </section>
                <div class="profile-content">
                    {!! Form::model($user , ['route' => ['changePassword' , $user->id] , 'method' => 'PATCH']) !!}
                    @include('website.profil.formPassword' )
                    {!! Form::close() !!}

                </div>
            </div>

        </div>
    </div>
@endsection
