@extends('admin.layouts.layout')

@section('title')
    Paramètres de site

@endsection

@section('header')

@endsection


@section('content')

    <section class="content-header">
        <h1>
            Paramétre de site
        </h1>
        <ol class="breadcrumb">
            <li><a href="{{ url('/adminpanel')}}"><i class="fa fa-dashboard"></i> Accueil </a></li>
            <li class="active" ><a href="{{ url('/adminpanel/sitesetting')}}"> paramétre de site </a></li>

        </ol>
    </section>


    <!-- Main content -->
    <section class="content">
        <div class="row">
            <div class="col-xs-12">
                <div class="box">
                    <div class="box-header">
                        <h3 class="box-title">
                            paramétre de site
                        </h3>
                    </div><!-- /.box-header -->
                    <div class="box-body">

                        <form action="{{ url('/adminpanel/siteseting') }}" method="post" enctype="multipart/form-data">
                            {{ csrf_field() }}

                            @foreach($siteSetting as $setting)


                            <div class="text2{{ $errors->has('name') ? ' has-error' : '' }}">


                                    <div class="col-lg-2">
                                        {{ $setting->slug }}
                                    </div>

                                    <div class="col-md-9">
                                        @if($setting->type == 0)
                                            {!! Form::text($setting->namesetting , $setting->value , ['class' => 'form-control']) !!}
                                        @elseif($setting->type == 3)
                                            @if($setting->value != '')
                                            <img src="{{ checkIfImageIsexist($setting->value , '/public/website/slider/' , '/website/slider/') }}" width="150" />

                                            @endif
                                            {!! Form::file($setting->namesetting , null , ['class' => 'form-control']) !!}
                                        @else
                                            {!! Form::textarea($setting->namesetting , $setting->value , ['class' => 'form-control']) !!}
                                        @endif

                                        @if($errors->has($setting->namesetting))
                                            <span class="help-block">
                                                <strong>{{ $errors->first($setting->namesetting) }}</strong>
                                            </span>
                                        @endif
                                    </div>


                                </div>
                                <div class="clearfix"></div>
                                <br>


                            @endforeach
                                <button name="submit" type="submit" class="btn btn-app" >
                                    <i class="fa fa-save"></i>
                                    Enregistrer
                                </button>

                            </form>




                    </div>
                </div>
            </div>
        </div>
    </section>




@endsection



