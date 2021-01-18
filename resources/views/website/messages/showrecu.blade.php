@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row profile">

            @include('website.profil.menu')
            <br><br>
            <section class="content" style="width: 600px; margin: 0 auto;">

             @foreach($message as $messages )



        <div class="panel panel-primary"  align="left">
            <div class="panel-heading">
                {{$messages->user->name}}
               <span class="pull-right">  {{$messages->created_at}} </span>
        </div>
            <div style="background-color: white; height: 100%; margin-top: 10px; margin-bottom: 10px" >
                {{$messages->contenu }}
            </div>





        </div>



    @endforeach
        @if($messages->emetteur !=Auth::user()->id)
            <a href="{{route('messages.create',['user'=>$messages->emetteur]) }}"class="btn btn-sm btn-default"  role="button"> <i class="fa fa-fw fa-envelope"></i>repondre</a>

        @elseif($messages->emetteur ==Auth::user()->id)
            <a href="{{route('messages.create',['user'=>$messages->recepteur]) }}"class="btn btn-sm btn-default"  role="button"> <i class="fa fa-fw fa-envelope"></i>repondre</a>
        @endif

            </section>
        </div>
    </div>
@endsection