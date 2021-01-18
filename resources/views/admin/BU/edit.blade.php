@extends('admin.layouts.layout')
@section('title')
    Modifier articles

    @endsection


    @section('header')

    @endsection


    @section('content')
            <!--l'entete du page edit -->

    <section class="content-header">
        <h1>
            　Validation des annonces

        </h1>
        <ol class="breadcrumb">
            <li><a href="{{url('/adminpanel')}}"><i class="fa fa-dashboard"></i> Accueil</a></li>
            <li ><a href="{{url('/adminpanel/articles')}}">Toutes les annonces</a></li>
        </ol>
    </section>


    <!--le contenu du page ajout -->
    <section class="content">
        <div class="row">
            <div class="col-xs-12">
                <div class="box">
                    <div class="box-header">
                        <h3 class="box-title">
                          Annonce: {{$bu->art_nom}}
                        </h3>

                    </div><!-- /.box-header -->
                    <div class="box-body">
                        <!--appel du formulaire vers une fonction update avec l id d'utilisateur -->
                        {!!Form::model($bu,['route'=>['adminpanel.articles.update',$bu->id],'method'=>'PATCH', 'files'=>true] ) !!}

                        @include('/admin/BU/form')
                                <!--   </form>-->
                        {!! Form::close()!!}



                    </div>
                </div>
            </div>
        </div>


        </div>
    </section>
@endsection