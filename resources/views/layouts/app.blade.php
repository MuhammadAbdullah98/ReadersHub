<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'ReadersHub') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    <script src="{{ asset('js/main.min.js')}}"></script>
	<script src="{{asset('js/script1.js')}}"></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/main.min.css')}}">
    <link rel="stylesheet" href="{{ asset('css/style1.css')}}">
    <link rel="stylesheet" href="{{ asset('css/color.css')}}">
    <link rel="stylesheet" href="{{ asset('css/responsive.css')}}">
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>

    <div id="app">

        <nav class="navbar navbar-expand-sm navbar-dark bg-dark" style="">
            <a class="navbar-brand" href="{{url('books')}}">ReadersHub</a>
            <button class="navbar-toggler d-lg-none" type="button" data-toggle="collapse"
                data-target="#collapsibleNavId" aria-controls="collapsibleNavId" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="collapsibleNavId">
                <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
                    <li class="nav-item active">
                        <a class="nav-link" href="{{url('books')}}">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{url('recommendations')}}">Recommendations</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{url('books')}}">Browse Books</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="{{url('contactus')}}">Contact Us</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{url('Author')}}">Author's</a>
                    </li>

                </ul>
                <form class="form-inline my-2 my-lg-0">
                    <input class="form-control mr-sm-2" type="text" placeholder="Search">
                    <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
                </form>
                <ul class="navbar-nav ml-auto">
                    <!-- Authentication Links -->
                    @guest
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                    </li>
                    @if (Route::has('register'))
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('register') }}">{{ __('Signup') }}</a>
                    </li>
                    @endif
                    @else
                    <li class="nav-item dropdown">
                        <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button"
                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                            {{ Auth::user()->name }} <span class="caret"></span>
                        </a>

                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown"
                            style="background-color:grey;">
                            <a class="dropdown-item" href="{{ url('books') }}" >
                                Home

                            </a>
                            <a class="dropdown-item" href="{{ url('viewprofile') }}" >
                                View Profile

                            </a>
                            <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                document.getElementById('logout-form').submit();">
                                {{ __('My Booklist') }}

                            </a>
                            <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                         document.getElementById('logout-form').submit();">
                                {{ __('My Authors') }}

                            </a>
                            <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                document.getElementById('logout-form').submit();">
                                {{ __('Help') }}

                            </a>
                            <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
       document.getElementById('logout-form').submit();">
                                {{ __('Signout') }}

                            </a>



                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                @csrf
                            </form>
                        </div>
                    </li>
                    @endguest
                </ul>
            </div>
        </nav>
    </div>



    {{-- <main class="py-4"> --}}
        @yield('content')
    {{-- </main> --}}

    </div>
    </div>

    </div>
    <section id="footer">
        <div class="container">
            <div class="row text-center text-xs-center text-sm-left text-md-left">
                <div class="col-xs-12 col-sm-4 col-md-4">
                    <h5>ReadersHub</h5>
                    <ul class="list-unstyled quick-links">
                        <li><a href="{{url('home')}}"><i class="fa fa-angle-double-right"></i>Home</a></li>
                        <li><a href="{{url('aboutus')}}"><i class="fa fa-angle-double-right"></i>About Us</a></li>
                        <li><a href="{{url('contactus')}}"><i class="fa fa-angle-double-right"></i>Contact Us</a></li>
                        <li><a href="{{url('policy')}}"><i class="fa fa-angle-double-right"></i>Privacy Policy</a></li>
                        <li><a href="{{url('conditions')}}"><i class="fa fa-angle-double-right"></i>Terms&conditions</a>
                        </li>
                    </ul>
                </div>
                <div class="col-xs-12 col-sm-4 col-md-4">
                    <h5>Books</h5>
                    <ul class="list-unstyled quick-links">
                        <li><a href="{{url('recommendations')}}"><i class="fa fa-angle-double-right"></i>Recommendations</a>
                        </li>
                        <li><a href="{{url('PopularArticles')}}"><i class="fa fa-angle-double-right"></i>Popular Articles</a>
                        </li>
                        <li><a href="{{url('Blogs')}}"><i class="fa fa-angle-double-right"></i>ReadersHub Blog</a>
                        </li>
                        <li><a href="{{url('books')}}"><i class="fa fa-angle-double-right"></i>All Books</a></li>
                        <li><a href="{{url('support')}}"><i class="fa fa-angle-double-right"></i>Help</a></li>
                    </ul>
                </div>
                <div class="col-xs-12 col-sm-4 col-md-4">
                    <h5>Publishers&Authors</h5>
                    <ul class="list-unstyled quick-links">
                        <li><a href="{{url('Authordetails')}}"><i class="fa fa-angle-double-right"></i>About Authors</a>
                        </li>
                        <li><a href="{{url('Publisherdetails')}}"><i class="fa fa-angle-double-right"></i>About Publishers</a>
                        </li>
                        <li><a href="{{url('RecommendedAuthors')}}"><i class="fa fa-angle-double-right"></i>Recommended</a></li>
                        <li><a href="{{url('support')}}"><i class="fa fa-angle-double-right"></i>Help</a></li>
                        <li><a href="{{url('support')}}" title="Design and developed by"><i
                                    class="fa fa-angle-double-right"></i>FAQ</a></li>
                    </ul>
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12 mt-2 mt-sm-5">
                    <ul class="list-unstyled list-inline social text-center">
                        <li class="list-inline-item"><a href="javascript:void();"><i class="fa fa-facebook"></i></a>
                        </li>
                        <li class="list-inline-item"><a href="javascript:void();"><i class="fa fa-twitter"></i></a></li>
                        <li class="list-inline-item"><a href="javascript:void();"><i class="fa fa-instagram"></i></a>
                        </li>
                        <li class="list-inline-item"><a href="javascript:void();"><i class="fa fa-google-plus"></i></a>
                        </li>
                        <li class="list-inline-item"><a href="javascript:void();" target="_blank"><i
                                    class="fa fa-envelope"></i></a></li>
                    </ul>
                </div>
                </hr>
            </div>
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12 mt-2 mt-sm-2 text-center text-white">
                    <p class="h6">&copy All right Reversed ReadersHub</a></p>
                </div>
                </hr>
            </div>
        </div>
    </section>
    <!-- ./Footer -->

</body>

</html>
