@extends('admin.layouts.layout')
@section('title')
    Paramètres compte
@endsection

@section('header')

@endsection


@section('content')
    <section class="content-header">
        <h1>
            　
        </h1>
        <ol class="breadcrumb">
            <li><a href="{{url('/adminpanel')}}"><i class="fa fa-dashboard"> Accueil</i>  </a></li>
            <li ><a href="{{url('/adminpanel/users')}}">Modifier compte </a></li>
            <li classe ="active"><a href="{{url('/adminpanel/users/'.$user->id.'/edit')}}">Modifier paramètres</a></li>
        </ol>
    </section>


    <section class="content">
        <div class="row">
            <div class="col-xs-12">
                <div class="box">
                    <div class="box-header">
                        <h3 class="box-title">
                            Compte {{$user->name}}
                        </h3>
                    </div><!-- /.box-header -->
                    <div class="box-body">
                        {!!Form::model($user,['route'=>['adminpanel.users.update',$user->id],'method'=>'PATCH'] ) !!}
                            @if(Auth::user()->admin==1)
                                @include('/admin/user/formAdmin')

                            @elseif(Auth::user()->admin==2)
                                @include('/admin/user/formAssistant')
                            @endif
                        {!! Form::close()!!}

                        @if($user->id==Auth::user()->id)
                        {!!Form::open(['url'=>'adminpanel/user/changePassword/','method'=>'post'] ) !!}
                            @include('/admin/user/formPassword')
                        {!! Form::close()!!}
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </section>



@endsection