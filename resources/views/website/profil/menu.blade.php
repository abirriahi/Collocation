

<div class="profile-content">
    <div class="col-md-3">
        @if(Auth::user())

            <div class="row profile">
                <div class="profile-content">

                </div>
                <div class="profile-sidebar">
                    <!-- SIDEBAR USERPIC -->

                    <!-- END SIDEBAR USERPIC -->
                    <!-- SIDEBAR USER TITLE      <div class="profile-usertitle">
                    <div class="profile-usertitle-name">
                      {{Auth::user()->name}}
                            <br>
                        </div>
                    </div>-->

                    <!-- END SIDEBAR USER TITLE -->
                    <!-- SIDEBAR BUTTONS -->

                    <!-- END SIDEBAR BUTTONS -->
                    <!-- SIDEBAR MENU -->
                    <div class="profile-usermenu" style="margin-top:10px; margin-right:20px">
                        <ul class="nav">
                            <li  style="border-style: solid;    border-width: 1px 0px 1px 0px; border-color: lightgrey; border-top-width: thin;">
                                <a href="{{url('/settings')}}">
                                    <i class="fa fa-user"aria-hidden="true"></i> Mon compte </a>
                            </li>
                            <div class="clearfix"></div>
                            <br>
                            <li>
                                <a href="{{url('/editName')}}">
                                    <i class="fa fa-pencil-square-o"aria-hidden="true"></i> Nom  </a>
                            </li>
                            <li>
                                <a href="{{url('/editEmail')}}">
                                    <i class="fa fa-pencil-square-o"aria-hidden="true"></i> E-mail </a>
                            </li>
                            <li>
                                <a href="{{url('/changePassword')}}">
                                    <i class="fa fa-pencil-square-o"aria-hidden="true"></i> Mot de passe </a>
                            </li>
                            <div class="clearfix"></div>
                            <br>
                            <li style="border-style: solid;    border-width: 1px 0px 0px 0px; border-color: lightgrey; border-top-width: thin;">
                                <a href="{{url('#')}}">
                                    <i class="fa fa-envelope"aria-hidden="true"></i> Boite réception</a>
                            </li>
                            <li>
                                <a href="{{url('#')}}">
                                    <i class="fa fa-envelope"aria-hidden="true"></i> Messages envoyés</a>
                            </li>

                            <div class="clearfix"></div>
                            <br>
                            <li style="border-style: solid;    border-width: 1px 0px 0px 0px; border-color: lightgrey; border-top-width: thin;">
                                <a href="{{url('/mesAnnonces')}}">
                                    <i class="fa fa-newspaper-o"aria-hidden="true"></i> Mes annonces actives </a>
                            </li>
                            <li>
                                <a href="{{url('/mesAnnoncesenattente')}}">
                                    <i class="fa fa-newspaper-o"aria-hidden="true"></i> Mes annonces en attente </a>
                            </li>
                              <li>
                                <a href="{{url('/mesAnnoncesrefusees')}}">
                                    <i class="fa fa-newspaper-o"aria-hidden="true"></i> Mes annonces refusées </a>
                            </li>
                        </ul>
                    </div>
                    <!-- END MENU -->
                </div>

            </div>

        @endif
    </div>
</div>

