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
                        Nom de compte
                    </h1>
                    <ol class="breadcrumb">
                        <li><a href="{{url('/settings')}}"><i class="fa fa-gears"></i>  Paramètres </a></li>
                        <li class="active"><a href="{{url('/editName')}}"> Nom de compte </a></li>
                    </ol>
                </section>
                <div class="profile-content">
                    {!! Form::model($user , ['route' => ['editName' , $user->id] , 'method' => 'PATCH']) !!}
                    @include('website.profil.formName' )
                    {!! Form::close() !!}

                </div>
            </div>

        </div>
    </div>
@endsection
