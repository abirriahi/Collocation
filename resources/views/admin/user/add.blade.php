@extends('admin.layouts.layout')

@section('title')
    Ajouter Utilisateur
@endsection

@section('header')


@endsection



@section('content')
    <section class="content-header">
        <h1>
            Ajouter membre
        </h1>
        <ol class="breadcrumb">
            <li><a href="{{url('/adminpanel')}}"><i class="fa fa-dashboard"></i>Home</a></li>
            <li><a href="{{url('/adminpanel/users')}}">Espace utilisateurs</a></li>
            <li class="active"><a href="{{url('/adminpanel/users/create')}}">Ajouter nouveau </a></li>
        </ol>
    </section>
    <!-- Main content -->
    <section class="content">
        <div class="row">
            <div class="col-xs-12">
                <div class="box">
                    <div class="box-header">
                        <h3 class="box-title">Ajouter un nouveau utilisateur</h3>
                    </div>
                    <!-- /.box-header -->
                    <div class="box-body">
                        {!! Form::open(['url' => 'adminpanel/users', 'method' => 'post']) !!}
                        @include('admin.user.formAdd')
                        {!! Form::close() !!}
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection






@section('footer')

@endsection