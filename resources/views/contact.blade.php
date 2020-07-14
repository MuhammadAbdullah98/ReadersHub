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
                <div class="gap no-top">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="g-map">
                                    <div id="map-canvas"></div>
                                    <div class="map-meta">
                                        <h2>Get in touch</h2>
                                        <p style="color:black">Show your concerns and feeback</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section><!-- google map -->

            <section>
                <div class="gap no-top overlap">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="contct-info">
                                    <div class="contact-form">
                                        <div class="cnt-title">
                                            <span>Send us a message</span>
                                            <i><img src="images/envelop.png" alt=""></i>
                                        </div>
                                        <form method="post">
                                            <div class="form-group">
                                              <input type="text" id="input" required="required"/>
                                              <label class="control-label" for="input">First & Last Name</label><i class="mtrl-select"></i>
                                            </div>
                                            <div class="form-group">
                                              <input type="text" required="required"/>
                                              <label class="control-label" for="input">Email@</label><i class="mtrl-select"></i>
                                            </div>
                                            <div class="form-group">
                                              <input type="text" required="required"/>
                                              <label class="control-label" for="input">Phone No.</label><i class="mtrl-select"></i>
                                            </div>
                                            <div class="form-group">
                                              <input type="text" required="required"/>
                                              <label class="control-label" for="input">Company</label><i class="mtrl-select"></i>
                                            </div>
                                            <div class="form-group">
                                              <textarea rows="4" id="textarea" required="required"></textarea>
                                              <label class="control-label" for="textarea">Message</label><i class="mtrl-select"></i>
                                            </div>
                                            <div class="submit-btns">
                                                <button class="mtr-btn signup" type="button"><i class="fa fa-paper-plane"></i></button>
                                            </div>
                                        </form>
                                    </div>
                                    <div class="cntct-adres">
                                        <h3>contact info</h3>
                                        <ul>
                                            <li>
                                                <i class="ti-location-pin"></i>
                                                <span>Gulistan-e-Johar Block B</span>
                                            </li>
                                            <li>
                                                <i class="fa fa-mobile-phone"></i>
                                                <span>+923125875451</span>
                                            </li>
                                            <li>
                                                <i class="fa fa-envelope-o"></i>
                                                <span>K163804@nu.edu.pk</span>
                                            </li>
                                        </ul>
                                        <ul class="social-media">
                                            <li>
                                                <a href="#" title=""><i class="fa fa-facebook-square"></i></a>
                                            </li>
                                            <li>
                                                <a href="#" title=""><i class="fa fa-google-plus-square"></i></a>
                                            </li>
                                            <li>
                                                <a href="#" title=""><i class="fa fa-pinterest-square"></i></a>
                                            </li>
                                            <li>
                                                <a href="#" title=""><i class="fa fa-twitter-square"></i></a>
                                            </li>
                                        </ul>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section><!-- contact info -->


        <div class="side-panel">
                <h4 class="panel-title">General Setting</h4>
                <form method="post">
                    <div class="setting-row">
                        <span>use night mode</span>
                        <input type="checkbox" id="nightmode1"/>
                        <label for="nightmode1" data-on-label="ON" data-off-label="OFF"></label>
                    </div>
                    <div class="setting-row">
                        <span>Notifications</span>
                        <input type="checkbox" id="switch22" />
                        <label for="switch22" data-on-label="ON" data-off-label="OFF"></label>
                    </div>
                    <div class="setting-row">
                        <span>Notification sound</span>
                        <input type="checkbox" id="switch33" />
                        <label for="switch33" data-on-label="ON" data-off-label="OFF"></label>
                    </div>
                    <div class="setting-row">
                        <span>My profile</span>
                        <input type="checkbox" id="switch44" />
                        <label for="switch44" data-on-label="ON" data-off-label="OFF"></label>
                    </div>
                    <div class="setting-row">
                        <span>Show profile</span>
                        <input type="checkbox" id="switch55" />
                        <label for="switch55" data-on-label="ON" data-off-label="OFF"></label>
                    </div>
                </form>
                <h4 class="panel-title">Account Setting</h4>
                <form method="post">
                    <div class="setting-row">
                        <span>Sub users</span>
                        <input type="checkbox" id="switch66" />
                        <label for="switch66" data-on-label="ON" data-off-label="OFF"></label>
                    </div>
                    <div class="setting-row">
                        <span>personal account</span>
                        <input type="checkbox" id="switch77" />
                        <label for="switch77" data-on-label="ON" data-off-label="OFF"></label>
                    </div>
                    <div class="setting-row">
                        <span>Business account</span>
                        <input type="checkbox" id="switch88" />
                        <label for="switch88" data-on-label="ON" data-off-label="OFF"></label>
                    </div>
                    <div class="setting-row">
                        <span>Show me online</span>
                        <input type="checkbox" id="switch99" />
                        <label for="switch99" data-on-label="ON" data-off-label="OFF"></label>
                    </div>
                    <div class="setting-row">
                        <span>Delete history</span>
                        <input type="checkbox" id="switch101" />
                        <label for="switch101" data-on-label="ON" data-off-label="OFF"></label>
                    </div>
                    <div class="setting-row">
                        <span>Expose author name</span>
                        <input type="checkbox" id="switch111" />
                        <label for="switch111" data-on-label="ON" data-off-label="OFF"></label>
                    </div>
                </form>
            </div><!-- side panel -->

        <script src="js/main.min.js"></script>
        <script src="js/strip.pkgd.min.js"></script>
        <script src="js/script.js"></script>
        <script src="js/map-init.js"></script>
        <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyA8c55_YHLvDHGACkQscgbGLtLRdxBDCfI"></script>

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

