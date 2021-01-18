<div class="col-md-3">
    <div class="profile-sidebar search-sidebar">

        <!-- END SIDEBAR USER TITLE -->
        <!-- SIDEBAR MENU -->
        <div class="profile-usermenu">
          
            {{ Form::open(['url' => 'articles/search', 'method' => 'get']) }}
            <ul class="nav">
                <li>
                    {!! Form::text("prix_de", null, ['class' => 'form-control', 'placeholder' => 'Prix min']) !!}
                </li>
                <li>
                    {!! Form::text("prix_a", null, ['class' => 'form-control', 'placeholder' => 'Prix max']) !!}
                </li>
                <li>
                    {!! Form::select("art_ville",art_ville() , null, ['class' => 'form-control', 'placeholder' => 'Régions']) !!}
                </li>
                <li>
                    {!! Form::select("chambres", chambres_number(), null, ['class' => 'form-control', 'placeholder' => 'Chambres disponibles']) !!}
                </li>
                <li>
                    {!! Form::select("art_cathegorie", art_cathegorie(), null, ['class' => 'form-control', 'placeholder' => 'Type de logement']) !!}
                </li>
                <li>
                    {!! Form::select("art_type", art_type(), null, ['class' => 'form-control', 'placeholder' => 'Offre ou demande']) !!}
                </li>
                <li>
                    {!! Form::text("espace", null, ['class' => 'form-control', 'placeholder' => 'Superficie']) !!}
                    {{-- I have no idea what does that mean --}}
                </li>
                <li>
                    {!! Form::submit("Chercher", ['class' => 'btn btn-success']) !!}
                </li>
            </ul>
            {{ Form::close() }}
        </div>
        <!-- END MENU -->
    </div>
    <div class="profile-sidebar">


        <!-- SIDEBAR MENU -->
        <div class="profile-usermenu">
            <ul class="nav">
                <li class="active">
                    <a href="{{ url('/') }}">
                        <i class="fa fa-home"></i>
                      Acceuil
                    </a>
                </li>
                <li class="active">
                    <a href="{{ url('/articles') }}">
                        <i class="fa  fa-building-o"></i>
                        Toutes les annonces
                    </a>
                </li>
                <br>
                <li>
                    <a href="{{ url('/articles/category/0') }}">
                        <i class="fa fa-building"></i>
                        Appartements </a>
                </li>
                <li>
                    <a href="{{ url('/articles/category/1') }}">
                        <i class="fa fa-building"></i>
                        Maisons et villas </a>
                </li>


            </ul>
        </div>
        <!-- END MENU -->
    </div>
</div>