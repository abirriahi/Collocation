@extends('layouts.app')


@section('content')
    <div class="container">
        <div class="row profile">

            @include('website.profil.menu')

            <div class="col-sm-9">

    <div class="table-responsive mailbox-messages" >
        <table    class="table table-bordered table-hover"style="background-color: white;" >

            <br> <br>
            <tr>

                <td>De</td>

                <td>Date</td>
            </tr>
            @foreach( $messages  as $message  )


                <td class="mailbox-name"><a href="{{'message/'.$message->id}}">{{$message->user->name}}</a></td>


                <td class="mailbox-date">{{$message->created_at}}</td>
                </tr>


            @endforeach




        </table>




    </div>

</div>
    </div>
    </div>
@endsection