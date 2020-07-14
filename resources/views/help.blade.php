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
<section>
    <div class="ext-gap bluesh high-opacity">
        <div class="content-bg-wrap" style="background: url(images/resources/animated-bg2.png)"></div>
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="top-banner">
                        <h1>Help&Support</h1>
                        <nav class="breadcrumb">

                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section><!-- top area animated -->
<body>
    <!--<div class="se-pre-con"></div>-->
    <div class="theme-layout">



        <section>
            <div class="gap gray-bg">
                <div class="container">
                    <div class="row" id="page-contents">
                        <div class="col-lg-3">
                            <aside class="sidebar static">
                                <div class="widget">
                                    <h4 class="widget-title">Socials</h4>
                                    <ul class="socials">
                                        <li class="facebook">
                                            <a title="" href="#"><i class="fa fa-facebook"></i> <span>facebook</span> <ins>45 likes</ins></a>
                                        </li>
                                        <li class="twitter">
                                            <a title="" href="#"><i class="fa fa-twitter"></i> <span>twitter</span><ins>25 likes</ins></a>
                                        </li>
                                        <li class="google">
                                            <a title="" href="#"><i class="fa fa-google"></i> <span>google</span><ins>35 likes</ins></a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="widget stick-widget">

                                </div><!-- Shortcuts -->
                            </aside>
                        </div>
                        <div class="col-lg-9">
                            <div class="help-sec right-pading">

                                <div class="row">
                                    <div class="col-lg-4 col-sm-6">
                                        <div class="help-list">
                                            <h3>Getting Started</h3>
                                            <ul>
                                                <li><a href="{{url('accountcreation')}}" title=""><i class="ti-direction"></i>How to Create your account</a></li>
                                                <li><a href="{{url('accountverification')}}" title=""><i class="ti-direction"></i>Verification of Account</a></li>
                                                <li><a href="{{url('Forgotpasswordhelp')}}" title=""><i class="ti-direction"></i>Forgot Password</a></li>

                                            </ul>

                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-sm-6">
                                        <div class="help-list">
                                            <h3>General Settings</h3>
                                            <ul>
                                                <li><a href="{{url('profilehelp')}}" title=""><i class="ti-direction"></i>View profile</a></li>
                                                <li><a href="{{url('profilehelp')}}" title=""><i class="ti-direction"></i>Change profile picture</a></li>
                                                <li><a href="{{url('Searchbooks')}}" title=""><i class="ti-direction"></i>Search books</a></li>

                                            </ul>

                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-sm-6">
                                        <div class="help-list">
                                            <h3>Get Books</h3>
                                            <ul>
                                                <li><a href="{{url('helpbooks')}}" title=""><i class="ti-direction"></i>View books</a></li>
                                                <li><a href="{{url('helprecommendedbooks')}}" title=""><i class="ti-direction"></i>View recommended books</a></li>
                                                <li><a href="{{url('wishlisthelp')}}" title=""><i class="ti-direction"></i>Adding in wishlsit</a></li>
                                            </ul>

                                        </div>
                                    </div>

                                    <div class="col-lg-4 col-sm-6">
                                        <div class="help-list">
                                            <h3>Get Author & Publisher details</h3>
                                            <ul>
                                                <li><a href="{{url('authorsprofilehelp')}}" title=""><i class="ti-direction"></i>View Author profile</a></li>
                                                <li><a href="{{url('recommendedauthorshelp')}}" title=""><i class="ti-direction"></i>View Recommended Authors</a></li>
                                                <li><a href="{{url('publisherhelp')}}" title=""><i class="ti-direction"></i>View Publisher details</a></li>
                                            </ul>

                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

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
                            <li><a href="{{url('PopularArticles')}}"><i class="fa fa-angle-double-right"></i>Popular Articles</a>
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
                            <li><a href="{{url('Publisherdetails')}}"><i class="fa fa-angle-double-right"></i>About Publishers</a>
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
