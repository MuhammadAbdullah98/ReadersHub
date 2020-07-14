@extends('layouts.app')

@section('content')
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


    </body>
@endsection
