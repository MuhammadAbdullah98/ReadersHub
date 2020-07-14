@extends('layouts.app')

@section('content')
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



@endsection
