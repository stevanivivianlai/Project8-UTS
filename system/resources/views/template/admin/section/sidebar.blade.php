@php
    function checkRouteActive($route){
    if(Route::current()->uri == $route) return 'active-menu';
}
@endphp

<nav class="navbar-default navbar-side" role="navigation">
    
            <div class="sidebar-collapse">
                <ul class="nav" id="main-menu">
                    <li>
                        <a href="{{ url('admin/beranda') }}"><h4><i class="fa fa-user fa-fw"></i> {{request()-> user()-> nama}} </h4></a>
                    </li>
                    <br>

                    <li class="{{checkRouteActive('admin/dashboard')}}">
                        <a href="{{ url('admin/dashboard') }}"><i class="fa fa-dashboard"></i> Dashboard </a>
                    </li>

                     <li class="{{checkRouteActive('admin/article')}}">
                        <a href="{{ url('admin/article') }}"><i class="fa fa-edit"></i> Article </a>
                    </li>

                    <li class="{{checkRouteActive('admin/coment')}}">
                        <a href="{{ url('admin/coment') }}"><i class="fa fa-edit"></i> Comment </a>
                    </li>

                    <li class="{{checkRouteActive('admin/user')}}">
                        <a href="{{ url('admin/user') }}"><i class="fa fa-edit"></i> User </a>
                    </li>

                     <li class="{{checkRouteActive('home')}}">
                        <a href="{{ url('home') }}"><i class="fa fa-edit"></i> Blog </a>
                    </li>
                </ul>

            </div>
</nav>