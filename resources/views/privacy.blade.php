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
                        <h1>Privacy Policy</h1>
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
                        <h4>POLICY STATEMENT</h4>
                        <span><p>Readers Hub privacy policy statements covers how we collects , uses and shares personal information of readers registered on our platform and in the context of privacy and protection of user personal information Readers Hub take this aspect very seriously. User’s personal information located at www.readershub.com. </p></span>
                        <h4>IMPORTANT INFORMATION</h4>
                        <span><h6>•Who we are</h6>
                            <p>
                                We provide our user’s best experience. User can easily find their recommended book on our platform for data protection legislation , the data controller of your personal information is ReadersHub.inc.
                            </p>
                            <h6>•Changes to Policy</h6>
                            <p>Privacy policy regarding our services and sites can be change at any time so we suggest you to review our policy and frequently once our policy statement get change we will notify you by “Last Update” or via email.</p>

                        </span>
                        <span><h4>WHAT WE COLLECT</h4></span>
                        <span>
                        <h6>•Information You Give Us.</h6>
                        <p>We collect your email address, password, the genres of books you like to read as well as other information you directly give us. If you provide it, then this information may also include your name, username.</p>
<h6>•Cookies.</h6>
<p>We may log information using "cookies." Cookies are small data files stored on your device by a website. We may use both session cookies (which expire once you close your web browser) and persistent cookies (which stay on your device until you delete them) to provide you with a more personal and interactive experience on our sites.</p>
</span>
<span><h4>HOW WE USE THIS INFORMATION</h4></span>
                        <span>
                        <h6>•Provide you service.</h6>
                        <p>To provide and maintain our services to create your account, identify you as a user, and customize our sites for your account to send you administrative communications, which may include administrative emails, confirmations, technical notices, updates, and security alerts to respond to your comments and questions and provide you with user support and to process payments you make via our sites.</p>
<h6>•For Marketing Purpose.</h6>
<p>For advertising purpose  and to send you promotional communications. Depending on your settings, these promotional communications may include deals or new releases emails, alerts related to authors you follow, social notifications, surveys, or other newsletters. .</p>
</span>
<h6>•For Marketing Purpose.</h6>
<p>For advertising purpose  and to send you promotional communications. Depending on your settings, these promotional communications may include deals or new releases emails, alerts related to authors you follow, social notifications, surveys, or other newsletters. .</p>
</span>
<span><h4>HOW WE SHARE THIS INFORMATION</h4></span>
                        <span>
                        <h6>•Share with third party choosen by you.</h6>
                        <p>We share your personal information with third parties where you have provided your consent to do so.</p>

                        <span><h4>CONTACT INFORMATION</h4></span>
                        <span>

                        <p>Thanks for using our platform, and for reviewing our Privacy Policy. We welcome your comments about this Privacy Policy. If you have any queries,you can contact us at feedback@readershub.com </p>

                        <figure class="sign-author">
                            <img src="images/welcome-sign.png" alt="">
                        </figure>
                    </div>
                </div>
                <div class="col-lg-6">
                    {{-- <figure class="about-picture">
                        <img src="images/mockup2_540x385.jpg" alt="">
                    </figure> --}}
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

