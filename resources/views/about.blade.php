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
    <!--<div class="se-pre-con"></div>-->
    <div class="theme-layout">


        <section>
            <div class="ext-gap bluesh high-opacity">
                <div class="content-bg-wrap" style="background: url(images/resources/animated-bg2.png)"></div>
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="top-banner">
                                <h1>About ReadersHub</h1>
                                <nav class="breadcrumb">

                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section><!-- top area animated -->

        <section>
            <div class="gap100 no-bottom">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="about-winku">
                                <h4>Welcome to ReadersHub</h4>
                                <span style="text-align:justify">Recommendation system provides an easiest way to buy items based on user interest. Recommendation system are new emerging technique or technology that help users in various aspects .Book recommendation system are widely used for buying and selling of books on the basis of user interest. Readers Hub based on combined features of content based filtering and collaborative filtering provides best recommended books to its users on the basis of their interest. The motivation that we got to build this platform is to tackle the problem of too much irrelevant information in existing systems in order to restore user satisfaction we are proposing a hybrid algorithm in which we combine two or more algorithms. Readers Hub gives its user’s best recommended books of best authors based on their interest.</span>

                                <div class="fonder">
                                    <h4>Muhammad Abdullah<i>founder</i></h4>
                                    <i>ReadersHub</i>
                                </div>
                                <figure class="sign-author">
                                    <img src="images/welcome-sign.png" alt="">
                                </figure>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <figure class="about-picture">
                                <img src="images/mockup2_540x385.jpg" alt="">
                            </figure>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section>
            <div class="gap100">
                <div class="container">
                    <div class="col-lg-12">
                        <div class="section-heading">
                            <h2>Our Services</h2>
                        </div>
                    </div>
                    <div class="servic-category">
                        <div class="row merged">
                            <div class="col-lg-4 col-md-6">
                                <div class="category-box">
                                    {{--  <i class="fa fa-wordpress"></i>  --}}
                                    <h2>Recommended Books</h2>
                                    <p>ReadersHub provide best recommended books based on user's interest.</p>

                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6">
                                <div class="category-box selected">
                                    {{--  <i class="fa fa-html5"></i>  --}}
                                    <h2>Recommended Authors</h2>
                                    <p>ReadersHub provide best books of best recommended authors.</p>

                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6">
                                <div class="category-box">
                                    {{--  <i class="fa fa-google-wallet"></i>  --}}
                                    <h2>Publisher's details</h2>
                                    <p>ReadersHub provide information of publisher's details with publisher's reviews.</p>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section><!-- services section -->


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


    </body>


