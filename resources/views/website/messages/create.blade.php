@extends('layouts.app')

@section('title')
    Message à {{$user->name}}
@endsection

@section('header')

@endsection

@section('content')
    <div class="container">
        <div class="row profile">

            @include('website.profil.menu')

            <br><br>
            <div class="col-sm-8 contact-form">
                Message a <strong>{{$user->name}}</strong>
                {!! Form::open(array('route' => 'messages.store','class'=>'form','role'=>'form')) !!}

                <input type="hidden" name="user_id" value="{{$user->id}}">

                <textarea class="form-control" id="contenu" name="contenu" placeholder="Message" rows="5"></textarea>
                <br />

                <div class="row">
                    <div class="col-xs-12 col-md-12 form-group">
                        <button class="btn btn-primary pull-right" type="submit">envoyer</button>
                    </div>
                </div>
                {{Form::close()}}
            </div>
        </div>
    </div>

@endsection