
{{-- users --}}
<li class="treeview">
    <a target="_blank"  href="{{url('/')}}">
        <i class="fa fa-home"></i> <span>Le site</span>

    </a>

</li>

<li class="treeview">
    <a href="#">
        <i class="fa fa-users"></i> <span>Utilisateurs</span>
                        <span class="pull-right-container">
              <i class="fa fa-angle-right pull-right"></i>
            </span>
    </a>
    <ul class="treeview-menu">
        <li><a href="{{url('/adminpanel/users/create')}}"><i class="fa fa-user"></i> Ajouter Utilisateur</a></li>
        <li><a href="{{url('/adminpanel/users')}}"><i class="fa fa-users"></i> Tous les utilisateurs </a></li>
    </ul>
</li>


<li class="treeview">
    <a href="#">
        <i class="fa fa-building"></i> <span>Annonces</span>
                        <span class="pull-right-container">
              <i class="fa fa-angle-right pull-right"></i>
            </span>
    </a>
    <ul class="treeview-menu">
        <li class="active"><a href="{{url('/adminpanel/articles/create')}}"><i class="fa fa-building-o"></i> Ajouter Annonce </a></li>
        <li class="active"><a href="{{url('/adminpanel/articles')}}"><i class="fa fa-building-o"></i> Toutes les annonces </a></li>
    </ul>
</li>




<li class="treeview">
    <a  href="{{url('/adminpanel/sitesetting')}}">
        <i class="fa fa-gears"></i> <span> Paramètres de site </span>
    </a>
</li>

<li class="treeview">
    <a  href="{{url('/adminpanel/contact')}}">
        <i class="fa fa-envelope"></i> <span>Tous les messages </span>
    </a>
</li>

<li class="treeview">
    <a  href="{{url('/adminpanel/buYear/statics')}}">
        <i class="fa fa-bar-chart"></i> <span> Stats </span>
    </a>
</li>

<li class="treeview">
    <a  href="{{url('/adminpanel/gmaps')}}">
        <i class="fa fa-map-marker"></i> <span>La localisation des annonces</span>

    </a>

</li>