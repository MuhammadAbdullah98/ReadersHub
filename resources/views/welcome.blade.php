<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8">
    <meta name="viewport"
        content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>ReadersHub</title>

    <link href="//fonts.googleapis.com/css?family=Righteous" rel="stylesheet">
    <link href="//fonts.googleapis.com/css?family=Open+Sans+Condensed:300,300i,700" rel="stylesheet">
    <link href="//fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i" rel="stylesheet">


    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/all.min.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="{{ asset('css/main.min.css')}}">
    <link rel="stylesheet" href="{{ asset('css/style1.css')}}">
    <link rel="stylesheet" href="{{ asset('css/color.css')}}">
    <link rel="stylesheet" href="{{ asset('css/responsive.css')}}">
    <!--auto compiled css & Js-->
    <script type="text/javascript" src="//code.jquery.com/jquery-1.9.1.js">
    </script>
    <link rel="stylesheet" type="text/css" href="/css/result-light.css">

    <script type="text/javascript" src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js">
    </script>
    <link rel="stylesheet" type="text/css"
        href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap-theme.min.css">
    <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
    <!-- JavaScript for adding
     slider for multiple images
     shown at once-->
    <script type="text/javascript">
        $(window).load(function () {
            $(".carousel .item").each(function () {
                var i = $(this).next();
                i.length || (i = $(this).siblings(":first")),
                    i.children(":first-child").clone().appendTo($(this));

                for (var n = 0; n < 4; n++)(i = i.next()).length ||
                    (i = $(this).siblings(":first")),
                    i.children(":first-child").clone().appendTo($(this))
            })
        });

    </script>
</head>

{{--  <form action="{{route ('admin.importbook')}}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <input type="file" name="file" accept=".csv">
                        <button class="btn btn-success">Import Book Data</button>
                        </form> --}}

<body>
    <div id="app">

        <nav class="navbar navbar-expand-sm navbar-dark bg-dark" style="margin-bottom: 0; border-radius: 0;">
            <a class="navbar-brand" href="{{url('home')}}">ReadersHub</a>
            <button class="navbar-toggler d-lg-none" type="button" data-toggle="collapse"
                data-target="#collapsibleNavId" aria-controls="collapsibleNavId" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="collapsibleNavId">
                <ul class="navbar-nav ml-auto float-right">
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
                            <a class="dropdown-item" href="{{ route('books') }}" onclick="event.preventDefault();
                                                         document.getElementById('logout-form').submit();">
                                {{ __('Home') }}

                            </a>
                            <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                         document.getElementById('logout-form').submit();">
                                {{ __('View Profile') }}

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

    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img class="d-block w-100" src="images/slider-1.jpg" alt="First slide">
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" src="images/slider-2.jpg" alt="Second slide">
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" src="images/slider-3.jpg" alt="Third slide">
            </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
    {{--
    <div class="col-12">
        <!-- Main Content -->
        <main class="row">
            <!-- Slider -->
            <div class="col-12 px-0">
                <div id="slider" class="carousel slide w-100" data-ride="carousel">
                    <ol class="carousel-indicators">
                        <li data-target="#slider" data-slide-to="0" class="active"></li>
                        <li data-target="#slider" data-slide-to="1"></li>
                        <li data-target="#slider" data-slide-to="2"></li>
                    </ol>
                    <div class="carousel-inner" role="listbox">
                        <div class="carousel-item active">
                            <img src="images/slider-1.jpg" class="slider-img">
                        </div>
                        <div class="carousel-item">
                            <img src="images/slider-2.jpg" class="slider-img">
                        </div>
                        <div class="carousel-item">
                            <img src="images/slider-3.jpg" class="slider-img">
                        </div>
                    </div>
                    <a class="carousel-control-prev" href="#slider" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#slider" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>
            </div>
            <!-- Slider -->  --}}
    {{-- best book --}}
    <div class="col-12 px-0">
        <h1 style="text-align: center; padding:3%;">Popular Book Articles</h1>
        <p style="text-align: center; font-size:14pt;padding-bottom:2%;">Let’s be reasonable and add an eighth day to
            the week that is devoted exclusively to reading</p>
        <div class="row" style="padding-right:90px; padding-left:90px; margin-bottom: 5%">
            <div class="col-3">
                <div class="card" style="width: 18rem; display:contents;">
                    <img class="card-img-top" src="images/NewWayToReadBooks.jpg" alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title" style="color: black;">Popular novels</h5>
                        <p class="card-text">It's the possibility of having a dream come true that makes life
                            interesting.</p>

                    </div>
                </div>
            </div>
            <div class="col-3">
                <div class="card" style="width: 18rem; display:contents;">
                    <img class="card-img-top" src="images/Readingabook.jpg" alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title" style="color: black">Popular fictions</h5>
                        <p class="card-text">Thats what fiction is for.Its for getting at the truth.when the truth isn't
                            sufficient.</p>

                    </div>
                </div>
            </div>
            <div class="col-3">
                <div class="card" style="width: 18rem; display:contents;">
                    <img class="card-img-top" src="images/mockup2.jpg" alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title" style="color: black;">Short Tech Articles</h5>
                        <p class="card-text">You never change things by fighting the existing reality.
                        </p>

                    </div>
                </div>
            </div>
            <div class="col-3">
                <div class="card" style="width: 18rem; display:contents;">
                    <img class="card-img-top" src="images/8b191360068195.5a3a79c44b084.jpg" alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title" style="color: black;">Popular poetry</h5>
                        <p class="card-text">He who draws noble delights from sentiments of poetry is a true poet.</p>

                    </div>
                </div>
            </div>
        </div>

    </div>
    {{-- quote --}}
    <div class="col-12 px-0" style="background-image: linear-gradient(to right, #1e6840 , #023b56);">
        <div id="carouselContent" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner" role="listbox">
                <div class="carousel-item active text-center p-4">
                    <h1
                        style="text-align: center; padding:9%; -webkit-text-fill-color: white; font-style: oblique; font-size: 24pt;">
                        “The person, be it gentleman or lady, who has not pleasure in a good novel, must be intolerably
                        stupid.”</h1>
                    <h1
                        style="text-align: center; padding-bottom:2%; -webkit-text-fill-color: white; font-style: normal; font-size: 20pt;">
                        ― Jane Austen, Northanger Abbey</h1>
                </div>
                <div class="carousel-item text-center p-4">
                    <h1
                        style="text-align: center; padding:9%; -webkit-text-fill-color: white; font-style: oblique; font-size: 24pt;">
                        “If you only read the books that everyone else is reading, you can only think what everyone else
                        is thinking.”</h1>
                    <h1
                        style="text-align: center; padding-bottom:2%; -webkit-text-fill-color: white; font-style: normal; font-size: 20pt;">
                        ― Haruki Murakami, Norwegian Wood</h1>
                </div>
            </div>
            <a class="carousel-control-prev" href="#carouselContent" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselContent" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>

    </div>


    <div class="col-12">
        <div>
            <h1
                style="text-align: center; padding:2%; -webkit-text-fill-color: black; font-style: oblique; font-size: 24pt;">
                More to Explore</h1>

            <div class="row">
                <div class="carousel slide" id="myCarousel">
                    <div class="carousel-inner">
                        <div class="item active">
                            <div class="col-xs-2">
                                <a href="#">
                                    <img src="images/414oxURkdL_907x1360.jpg" class="img-responsive">
                                </a>
                            </div>
                        </div>
                        <div class="item">
                            <div class="col-xs-2">
                                <a href="#">
                                    <img src="images/18050381_907x1360.jpg" class="img-responsive">
                                </a>
                            </div>
                        </div>
                        <div class="item">
                            <div class="col-xs-2">
                                <a href="#">
                                    <img src="images/53575599_907x1360.png" class="img-responsive">
                                </a>
                            </div>
                        </div>
                        <div class="item">
                            <div class="col-xs-2">
                                <a href="#">
                                    <img src="images/main-qimg-2622fd2c5e4b8b0593a1b49d32f5ea48_907x1360.jpg"
                                        class="img-responsive">
                                </a>
                            </div>
                        </div>
                        <div class="item">
                            <div class="col-xs-2">
                                <a href="#">
                                    <img src="images/Murder-in-Paris_907x1360.jpg" class="img-responsive">
                                </a>
                            </div>
                        </div>
                        <div class="item">
                            <div class="col-xs-2">
                                <a href="#">
                                    <img src="images/15-Best-Poetry-e1559013648240_907x1360.jpg" class="img-responsive">
                                </a>
                            </div>
                        </div>
                        <div class="item">
                            <div class="col-xs-2">
                                <a href="#">
                                    <img src="images/51QV2R0MZEL._SX329_BO1204203200__907x1360.jpg"
                                        class="img-responsive">
                                </a>
                            </div>
                        </div>
                        <div class="item">
                            <div class="col-xs-2">
                                <a href="#">
                                    <img src="images/1038_env_science_w_r_andtech_f2c-900_907x1360.jpg"
                                        class="img-responsive">
                                </a>
                            </div>
                        </div>
                        <div class="item">
                            <div class="col-xs-2">
                                <a href="#">
                                    <img src="images/8178bfzr6oL.jpg" class="img-responsive">
                                </a>
                            </div>
                        </div>
                        <div class="item">
                            <div class="col-xs-2">
                                <a href="#">
                                    <img src="images/b681be71f8447944984e2f40319f8dd3_907x1360.jpg"
                                        class="img-responsive">
                                </a>
                            </div>
                        </div>
                        <div class="item">
                            <div class="col-xs-2">
                                <a href="#">
                                    <img src="images/51JGWSQoIWL._SX303_BO1204203200__907x1360.jpg"
                                        class="img-responsive">
                                </a>
                            </div>
                        </div>
                        <div class="item">
                            <div class="col-xs-2">
                                <a href="#">
                                    <img src="images/1555349382-41RTt7alEqL_907x1360.jpg" class="img-responsive">
                                </a>
                            </div>
                        </div>
                    </div> <a class="left carousel-control" href="#myCarousel" data-slide="prev">
                        <i class="glyphicon glyphicon-chevron-left">
                        </i>
                    </a>
                    <a class="right carousel-control" href="#myCarousel" data-slide="next">
                        <i class="glyphicon glyphicon-chevron-right">
                        </i>
                    </a>

                </div>
            </div>
        </div>
        <div class="col-12 py-3 bg-light d-sm-block d-none">
            {{-- <div class="row">
                        <div class="col-lg-3 col ml-auto large-holder">
                            <div class="row">
                                <div class="col-auto ml-auto large-icon">
                                    <i class="fas fa-money-bill"></i>
                                </div>
                                <div class="col-auto mr-auto large-text">
                                    Best Authors
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col large-holder">
                            <div class="row">
                                <div class="col-auto ml-auto large-icon">
                                    <i class="fas fa-truck-moving"></i>
                                </div>
                                <div class="col-auto mr-auto large-text">
                                    Fast Delivery
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col mr-auto large-holder">
                            <div class="row">
                                <div class="col-auto ml-auto large-icon">
                                    <i class="fas fa-check"></i>
                                </div>
                                <div class="col-auto mr-auto large-text">
                                    Recommended
                                </div>
                            </div>
                        </div>
                    </div> --}}
        </div>
        </main>
        <!-- Main Content -->
    </div>
    <!-- Footer -->
    <section id="footer">
        <div class="container">
            <div class="row text-center text-xs-center text-sm-left text-md-left">
                <div class="col-xs-12 col-sm-4 col-md-4">
                    <h5>ReadersHub</h5>
                    <ul class="list-unstyled quick-links">
                        <li><a href="{{url('home')}}"><i class="fa fa-angle-double-right"></i>Home</a></li>
                        <li><a href="{{url('about')}}"><i class="fa fa-angle-double-right"></i>About Us</a></li>
                        <li><a href="{{url('contact')}}"><i class="fa fa-angle-double-right"></i>Contact Us</a></li>
                        <li><a href="{{url('privacy')}}"><i class="fa fa-angle-double-right"></i>Privacy Policy</a></li>
                        <li><a href="{{url('terms')}}"><i class="fa fa-angle-double-right"></i>Terms&conditions</a>
                        </li>
                    </ul>
                </div>
                <div class="col-xs-12 col-sm-4 col-md-4">
                    <h5>Books</h5>
                    <ul class="list-unstyled quick-links">
                        <li><a href="{{url('recommendations')}}"><i class="fa fa-angle-double-right"></i>Recommendations</a>
                        </li>
                        <li><a href="{{url('Popular Articles')}}"><i class="fa fa-angle-double-right"></i>Popular Articles</a>
                        </li>
                        <li><a href="{{url('Blogs')}}"><i class="fa fa-angle-double-right"></i>ReadersHub Blog</a>
                        </li>
                        <li><a href="{{url('books')}}"><i class="fa fa-angle-double-right"></i>All Books</a></li>
                        <li><a href="{{url('help')}}"><i class="fa fa-angle-double-right"></i>Help</a></li>
                    </ul>
                </div>
                <div class="col-xs-12 col-sm-4 col-md-4">
                    <h5>Publishers&Authors</h5>
                    <ul class="list-unstyled quick-links">
                        <li><a href="{{url('Authordetails')}}"><i class="fa fa-angle-double-right"></i>About Authors</a>
                        </li>
                        <li><a href="{{url('Publisher details')}}"><i class="fa fa-angle-double-right"></i>About Publishers</a>
                        </li>
                        <li><a href="{{url('RecommendedAuthors')}}"><i class="fa fa-angle-double-right"></i>Recommended</a></li>
                        <li><a href="{{url('help')}}"><i class="fa fa-angle-double-right"></i>Help</a></li>
                        <li><a href="{{url('help')}}" title="Design and developed by"><i
                                    class="fa fa-angle-double-right"></i>FAQ</a></li>
                    </ul>
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12 mt-2 mt-sm-5">
                    <ul class="list-unstyled list-inline social text-center">
                        <li class="list-inline-item"><a href="javascript:void();"><i
                                    class="fa fa-facebook fa-3x"></i></a></li>
                        <li class="list-inline-item"><a href="javascript:void();"><i
                                    class="fa fa-twitter fa-3x"></i></a></li>
                        <li class="list-inline-item"><a href="javascript:void();"><i
                                    class="fa fa-instagram fa-3x"></i></a></li>
                        <li class="list-inline-item"><a href="javascript:void();"><i
                                    class="fa fa-google-plus fa-3x"></i></a></li>
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
