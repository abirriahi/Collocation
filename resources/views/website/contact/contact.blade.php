@extends('layouts.app')

@section('title')
    Evaluez nous
@endsection

@section('header')

    <style>

        .input-group-addon:first-child{
            border-left:0px;
            border-right:1px solid #ccc;
        }
    </style>
@endsection


@section('content')


<div class="container">
    <div class="row profile" style="margin: 0 auto; margin-left:200px">
        <div class="col-md-9">
        <h1>
           Contactez nous
        </h1>
        </h5>
        <div class="row">
        <div class="col-md-12" style="margin-top:20px;">
            <div class="well well-sm">
                {!!  Form::open(['url' => '/contact' , 'method' => 'post']) !!}
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="name">Votre message</label>
                            <textarea name="contact_message" id="message" class="form-control" rows="9" cols="25" required="required"
                                      placeholder="Avez-vous des commentaires ou des suggestions pour nous aider à améliorer ColocationsTN?"></textarea>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="name">Votre nom</label>
                                <input type="text" name="contact_name" class="form-control" id="name" placeholder="Entrez votre nom" required="required" />
                            </div>
                            <div class="form-group">
                                <label for="email">
                                    email</label>
                                <div class="input-group">
                                <span class="input-group-addon"><span class="glyphicon glyphicon-envelope"></span>
                                </span>
                                    <input type="email" class="form-control" name="contact_email" id="email" placeholder=" please enter your email"  value="{{ \Illuminate\Support\Facades\Auth::user() ? \Illuminate\Support\Facades\Auth::user()->email : '' }}" required="required" /></div>
                            </div>
                            <div class="form-group">
                                <label for="subject">Sélectionnez une catégorie</label>
                                <select id="subject" name="contact_type" class="form-control" required="required">
                                    @foreach(contact() as $key =>$con)
                                        <option value="{{ $key }}">{{ $con }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>

                        <div class="col-md-12">
                            <button type="submit" class="banner_btn pull-right" id="btnContactUs">Envoyer</button>
                        </div>
                    </div>
                {!! Form::close()  !!}
            </div>

        </div>
       <!---office-->

    </div>
    </div>
    </div>
</div>
@endsection