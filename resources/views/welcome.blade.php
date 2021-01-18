@extends('layouts.app')
@section('title')
    Bienvenue
@endsection
@section('header')
    <style>

        .featured_content {
            background: #5a5c51;
        }

        .feature_grid1 .fa, .feature_grid2 .fa {
            color: #fae596;
        }

        .banner {
            background: url({{checkIfImageIsexist( getSetting('main_slider') , '/public/website/slider/' , '/website/slider/')}}) no-repeat center;
        " min-height: 500 px;
        width: 100%;
            -webkit-background-size: 100%;
            -moz-background-size: 100%;
            -o-background-size: 100%;
            background-size: 100%;
            -webkit-background-size: cover;
            -moz-background-size: cover;
            -o-background-size: cover;
            background-size: cover;
            padding-bottom: 100px;
        }

    </style>
@endsection
@section('content')
    <div class="banner text-center">
        <div class="container">
            <div class="banner-info">
                <h1> Trouvez votre colocation idéale.</h1>


                {{ Form::open(['url' => 'articles/search', 'method' => 'get']) }}

                <br>
                <div class="row">
                    <div class="col-md-3">
                        {!! Form::select("art_ville",art_ville() , null, ['class' => 'form-control', 'placeholder' => 'Régions']) !!}
                    </div>
                    <div class="col-md-3">
                        {!! Form::select("art_type",art_type() , null, ['class' => 'form-control', 'placeholder' => 'Type']) !!}
                    </div>

                    <div class="col-md-3">
                        {!! Form::text("prix_de", null, ['class' => 'form-control', 'placeholder' => 'Prix min']) !!}
                    </div>
                    <div class="col-md-3">
                        {!! Form::text("prix_a", null, ['class' => 'form-control', 'placeholder' => 'Prix max']) !!}
                    </div>


                </div>
                <div class="clearfix"></div>
                <br>
                <div class="row">
                    <div class=".col-xs-6 .col-md-4">
                        {!! Form::submit("Chercher", ['class' => 'btn btn-success']) !!}
                    </div>
                </div>
            </div>
            {{ Form::close() }}


        </div>
    </div>
    </div>
    </div>
    <!--
      <div class="main">
         <div class="content_white">
             <h2>Colocations , Colocataires & chambres à louer</h2>

         </div>
         <div class="featured_content" id="feature">
             <div class="container">
                 <div class="row text-center">
                     <div class="col-mg-3 col-xs-3 feature_grid1"> <i class="fa fa-cog fa-3x"></i>
                         <h3 class="m_1"><a href="services.html">Legimus graecis</a></h3>
                         <p class="m_2">Lorem ipsum dolor sit amet, facilisis egestas sodales non luctus, sem quas potenti malesuada vel phasellus.</p>
                         <a href="services.html" class="feature_btn">More</a> </div>
                     <div class="col-mg-3 col-xs-3 feature_grid1"> <i class="fa fa-comments-o fa-3x"></i>
                         <h3 class="m_1"><a href="services.html">Mazim minimum</a></h3>
                         <p class="m_2">Lorem ipsum dolor sit amet, facilisis egestas sodales non luctus, sem quas potenti malesuada vel phasellus.</p>
                         <a href="services.html" class="feature_btn">More</a> </div>
                     <div class="col-md-3 col-xs-3 feature_grid1"> <i class="fa fa-globe fa-3x"></i>
                         <h3 class="m_1"><a href="services.html">Modus altera</a></h3>
                         <p class="m_2">Lorem ipsum dolor sit amet, facilisis egestas sodales non luctus, sem quas potenti malesuada vel phasellus.</p>
                         <a href="services.html" class="feature_btn">More</a> </div>
                     <div class="col-md-3 col-xs-3 feature_grid2"> <i class="fa fa-history fa-3x"></i>
                         <h3 class="m_1"><a href="services.html">Melius eligendi</a></h3>
                         <p class="m_2">Lorem ipsum dolor sit amet, facilisis egestas sodales non luctus, sem quas potenti malesuada vel phasellus.</p>
                         <a href="services.html" class="feature_btn">More</a> </div>
                 </div>

         </div>
         <div class="about-info">
             <div class="container">
                 <div class="row">
                     <div class="col-md-8">
                         <div class="block-heading-two">
                             <h2><span> A propos de coloc.tn </span></h2>
                         </div>
                         <p>Consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero.</p>
                         <br>
                         <p>Sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat.</p>
                         <a class="banner_btn" href="about.html">Read More</a> </div>
                     <div class="col-md-4">
                         <div class="block-heading-two">
                             <h3><span>Our Advantages</span></h3>
                         </div>
                         <div class="panel-group" id="accordion-alt3">
                             <div class="panel">
                                 <div class="panel-heading">
                                     <h4 class="panel-title"> <a data-toggle="collapse" data-parent="#accordion-alt3" href="#collapseOne-alt3"> <i class="fa fa-angle-right"></i> Quisque cursus metus vitae pharetra auctor</a> </h4>
                                 </div>
                                 <div id="collapseOne-alt3" class="panel-collapse collapse">
                                     <div class="panel-body">
                                         <p>Consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit.</p>
                                     </div>
                                 </div>
                             </div>
                             <div class="panel">
                                 <div class="panel-heading">
                                     <h4 class="panel-title"> <a data-toggle="collapse" data-parent="#accordion-alt3" href="#collapseTwo-alt3"> <i class="fa fa-angle-right"></i> Duis autem vel eum iriure dolor in hendrerit</a> </h4>
                                 </div>
                                 <div id="collapseTwo-alt3" class="panel-collapse collapse">
                                     <div class="panel-body">
                                         <p>Consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit.</p>
                                     </div>
                                 </div>
                             </div>
                             <div class="panel">
                                 <div class="panel-heading">
                                     <h4 class="panel-title"> <a data-toggle="collapse" data-parent="#accordion-alt3" href="#collapseThree-alt3"> <i class="fa fa-angle-right"></i> Quisque cursus metus vitae pharetra auctor </a> </h4>
                                 </div>
                                 <div id="collapseThree-alt3" class="panel-collapse collapse">
                                     <div class="panel-body">
                                         <p>Consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit.</p>
                                     </div>
                                 </div>
                             </div>
                             <div class="panel">
                                 <div class="panel-heading">
                                     <h4 class="panel-title"> <a data-toggle="collapse" data-parent="#accordion-alt3" href="#collapseFour-alt3"> <i class="fa fa-angle-right"></i> Duis autem vel eum iriure dolor in hendrerit</a> </a> </h4>
                                 </div>
                                 <div id="collapseFour-alt3" class="panel-collapse collapse">
                                     <div class="panel-body">
                                         <p>Consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit.</p>
                                     </div>
                                 </div>
                             </div>
                         </div>
                     </div>
                 </div>
             </div>
         </div>
 -->
    <div class="testimonial-area">
        <div class="testimonial-solid">
            <div class="container">
                <h2>Créé par des colocs pour des colocs.</h2>
                <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
                    <ol class="carousel-indicators">
                        <li data-target="#carousel-example-generic" data-slide-to="0" class="active"><a href="#"></a>
                        </li>
                        <li data-target="#carousel-example-generic" data-slide-to="1" class=""><a href="#"></a></li>
                        <li data-target="#carousel-example-generic" data-slide-to="2" class=""><a href="#"></a></li>
                        <li data-target="#carousel-example-generic" data-slide-to="3" class=""><a href="#"></a></li>
                        <li data-target="#carousel-example-generic" data-slide-to="4" class=""><a href="#"></a></li>
                    </ol>
                    <div class="carousel-inner">
                        <div class="item active">
                            <p>"Pull up a chair. Take a taste. Come join us. Life is so endlessly delicious."</p>
                            <p><strong>- Ruth Reichl -</strong></p>
                        </div>
                        <div class="item">
                            <p>"I have the best roommates in the world! It creates a fun sense of family... and that's
                                really important to me. Things can get so lonely without it."</p>
                            <p><strong>- Kristen Bell -</strong></p>
                        </div>
                        <div class="item">
                            <p>"My roommate got a pet elephant. Then it got lost. It's in the apartment somewhere."</p>
                            <p><strong>- Steven Wright -</strong></p>
                        </div>
                        <div class="item">
                            <p>"We're sisters, we're roommates, we're all that."</p>
                            <p><strong>- Serena Williams -</strong></p>
                        </div>
                        <div class="item">
                            <p>" La recherche d'un logement ne devrait jamais avoir à être payante."</p>
                            <p><strong>-www.lacartedescolocs.fr -</strong></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    </div>
    </div>


@endsection
