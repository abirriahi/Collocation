<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    {!! Html::style('website/css/bootstrap.min.css') !!}
    {!! Html::style('website/css/flexslider.css') !!}
    {!! Html::style('website/css/style.css') !!}
    {!! Html::style('website/css/font-awesome.min.css') !!}

    {!! Html::style('cus/sweetalert.css') !!}
    <script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
    <link href='http://fonts.googleapis.com/css?family=Source+Sans+Pro:200,300,400,600,700,900' rel='stylesheet' type='text/css'>
    <title> @yield('title')| {{getSetting()}}  </title>

    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <style>

        #app-layout{
            background-color: #F6F6F6;
        }
        .header {
            background:#F6F6F6
        ;
            padding: 1em 0;
            border-top: 1px solid #b56969;
            -webkit-box-shadow: 0px 3px 5px rgba(100, 100, 100, 0.49);
            -moz-box-shadow:    0px 3px 5px rgba(100, 100, 100, 0.49);
            box-shadow:         0px 3px 5px rgba(100, 100, 100, 0.49);
            margin-bottom: 50px;
        }

        .menu li a {
            display: block;
            font-size: 1em;
            color:#2B2B2B;

            -webkit-transition: all 0.3s ease;
            -moz-transition: all 0.3s ease;
            -o-transition: all 0.3s ease;
            transition: all 0.3s ease;
            text-transform: uppercase;
            font-weight: 500;
            letter-spacing: 1px;
        }
        #nav .current a {
            color: #2ABB9B;
            -webkit-transition: all 0.3s ease;
            -moz-transition: all 0.3s ease;
            -o-transition: all 0.3s ease;
            transition: all 0.3s ease;
        }
        .menu li a:hover, .menu li.active a {
            color:#DE1B1B;
            background: #c9c9c9 !important;
        }
        .banner-info h1 {
            font-size: 3em;
            color:#2B2B2B;
            text-shadow: 1px 1px 2px black, 0 0 25px #F6F6F6, 0 0 5px #F6F6F6;
            line-height: 1.4em;
            margin: 0em;
            font-weight: 500;
        }
        .footer{
            background:#F6F6F6;
            padding: 1em 0;
            border-bottom: 1.5px solid #b56969;

        }
        .fa {
            color:#DE1B1B;
        }
        .footer_bottom {
            padding: 0em 0;
            background-color: #F6F6F6;
        }
        .navbar-brand {
            font-size: 32px;
            font-weight: 700;
            color:#DE1B1B;
            letter-spacing: -1px;
            padding: 5px;
        }
        .navbar-brand:hover {
            color:#2B2B2B;
        }
        .navbar-brand .fa {
            color: #DE1B1B;
        }
        .navbar-brand .fa:hover {
            color:#2B2B2B;
        }
        .social-icon {
            padding-top: 6px;
            font-size: 16px;
            text-align: center;
            width: 32px;
            height: 32px;
            border: 2px solid #5a5c51;
            border-radius: 50%;
            color: #5a5c51;
            margin: 5px;
        }
        .copy p{
            color:#5a5c51;
        }
        a.social-icon:hover, a.social-icon:active, a.social-icon:focus {
            text-decoration: none;
            color: #DE1B1B;
            border-color: #DE1B1B;
        }

    </style>
</head>

@yield('header')

<body id="app-layout" >


<div class="header" >
    <div class="container"> <a class="navbar-brand" href="{{url('/')}}"><i class="fa fa-home"></i>  {{getSetting()}} </a>
        <div class="menu"> <a class="toggleMenu" href="#"><img src="{{ Request::root() }}/website/images/nav_icon.png" alt="" /> </a>
            <ul class="nav" id="nav">

                <li><a href="{{ url('/articles') }}">Rechercher des annonces</a></li>
                <li><a href="{{ url('/addprojet') }}">Déposer votre annonce</a></li>
                @if (Auth::guest())
                    <li><a href="{{ url('/login') }}">Connexion</a></li>
                    <li><a href="{{ url('/register') }}">S'inscrire</a></li>
                @else
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                            {{ Auth::user()->name }} <span class="caret"></span>
                        </a>
                        <ul class="dropdown-menu" role="menu">
                            <li style="margin-top:10px;"><a href="{{ url('/settings') }}"><i class="fa fa-btn fa-cog"></i> MON COMPTE </a></li>
                            @if(Auth::user()->admin==1 || Auth::user()->admin==2 )
                                <div class="clear"></div> <li style="margin-top:10px;"><a target="_blank"  href="{{ url('/adminpanel') }}"><i class="fa fa-tachometer"></i> AdminPanel </a></li>
                            @endif
                            <div class="clear"></div>
                            <li style="margin-top:10px;"><a href="{{ url('/logout') }}"><i class="fa fa-btn fa-sign-out"></i> Logout</a></li>
                        </ul>

                    </li>

                @endif

                <div class="clear"></div>
            </ul>

        </div>
    </div>
</div>




@yield('content')

<div class="footer" >
    <div class="footer_bottom" >
        <div class="follow-us">
            <a target="_blank"  class="fa fa-facebook social-icon"  href="{{getSetting('facebook')}}"></a>
            <a target="_blank" class="fa fa-twitter social-icon" href="{{getSetting('twitter')}}"></a>
            <a target="_blank" class="fa fa-linkedin social-icon" href="{{getSetting('linkedin')}}"></a>
            <a target="_blank"  class="fa fa-youtube social-icon" href="{{getSetting('youtube')}}"></a>
        </div>
        <div class="copy">
            <p>ABIR RIAHI  &copy;  ISET Sousse </p>
            <a href="{{url('/contact')}}"><i class="fa fa-envelope"aria-hidden="true" style="color:grey"></i> Contactez nous</a>
        </div>
        <br>

    </div>
</div>

{!! Html::script('admin/plugins/jQuery/jQuery-2.1.4.min.js')!!}
        <!-- jQuery 2.2.3 -->

<!-- jQuery UI 1.11.4 -->
<script src="https://code.jquery.com/ui/1.11.4/jquery-ui.min.js"></script>
{!! Html::script('website/js/bootstrap.min.js') !!}
{!! Html::script('website/js/jquery.flexslider.js') !!}
{!! Html::script('website/js/jquery.flexisel.js') !!}
{!! Html::script('website/js/responsive-nav.js') !!}
{!! Html::script('website/js/jquery.min.js') !!}
{!! Html::script('cus/sweetalert.min.js')!!}
@include('/layouts/message')
@yield('footer')
</body>
</html>
