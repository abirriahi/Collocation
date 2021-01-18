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

                    </h1>
                    <ol class="breadcrumb">
                        <li><a href="{{url('/')}}">Acceuil</a></li>
                        <li class="active"><a href="{{url('/settings')}}">Paramètres généraux du compte</a></li>
                    </ol>
                </section>


                <div class="profile-content">
                    {!! Form::model($user , ['route' => ['settings' , $user->id] , 'method' => 'PATCH']) !!}
                    @include('website.profil.formSettings' )
                    {!! Form::close() !!}

                </div>
                <div class="clearfix"></div>
                <br>

                <div class="profile-content">
                    {!! Form::model($user , ['route' => ['editEmail' , $user->id] , 'method' => 'PATCH']) !!}
                    @include('website.profil.formEmail' )
                    {!! Form::close() !!}

                </div>
                <div class="clearfix"></div>
                <br>

                <div class="profile-content">
                    {!! Form::model($user , ['route' => ['changePassword' , $user->id] , 'method' => 'PATCH']) !!}
                    @include('website.profil.formPassword' )
                    {!! Form::close() !!}
                </div>
                <div class="clearfix"></div>
                <br>

            </div>

        </div>
    </div>
@endsection
