<div class="main_menu">
    <nav class="navbar navbar-expand-lg navbar-light">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <a class="navbar-brand logo_h" href="index.html"><img src="img/logo.png" alt=""></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse offset" id="navbarSupportedContent">
                <ul class="nav navbar-nav menu_nav">
                    <li class="nav-item active"><a class="nav-link" href="{{url('/')}}">Home</a></li>

                    <li class="nav-item submenu dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button"
                            aria-haspopup="true" aria-expanded="false">Categories</a>
                        <ul class="dropdown-menu">

                            @foreach ($categories as $category)
                            <li class="nav-item">
                                <a class="nav-link" href="elements.html">
                                    {{$category->name}}
                                </a>
                            </li>
                            @endforeach

                        </ul>
                    </li>

                    <li class="nav-item"><a class="nav-link" href="contact.html">Contact</a></li>

                    @if (Auth::check())                    
                    <li class="nav-item mr-auto"><a class="nav-link">Welcome Back {{Auth::user()->name}}</a></li>
                    <li class="nav-item mr-auto"><a class="nav-link" href="{{url('/logout')}}">Logout</a></li>
                    @else
                    <li class="nav-item mr-auto"><a class="nav-link" href="{{url('/login')}}">Login</a></li>
                    <li class="nav-item mr-auto"><a class="nav-link" href="{{url('/register')}}">New User</a></li>
                    @endif

                </ul>

            </div>
        </div>
    </nav>
</div>
