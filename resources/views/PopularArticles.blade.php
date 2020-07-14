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
                                <h1>PopularArticles</h1>
                                <nav class="breadcrumb">

                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section><!-- top area animated -->

        <section>
            <div class="gap gray-bg">
                <div class="container">
                    <div class="row" id="page-contents">
                        <div class=" col-lg-12">
                            <div class="blog-sec">

                                    </div>
                                </div>
                                <div class="row masonry">
                                    <div class="col-lg-4 col-sm-6">
                                        <div class="g-post-classic">
                                            <figure>
                                                <img alt="" src="images/unnamed_348x228.jpg">

                                            </figure>
                                            <div class="g-post-meta">
                                                <div class="post-title">
                                                    <h4><a title="" href="{{url('article1')}}">How to Optimize Your Daily Decisions</a></h4>
                                                    <p>Here are a few strategies I have found useful when trying to design for default in my life:</p>
                                                    <span class="p-date">by <a href="#" title="">Abbi Glines</a> -10-Feb</span>
                                                </div>
                                                <div class="g-post-ranking">

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-sm-6">
                                        <div class="g-post-classic">
                                            <figure>
                                                <img alt="" src="images/isaac-newton-the-physics-of-productivity-965x450_348x228.jpg">

                                            </figure>
                                            <div class="g-post-meta">
                                                <div class="post-title">
                                                    <h4><a title="" href="{{url('article2')}}">The Physics of Productivity: Newton’s Laws of Getting Stuff Done</a></h4>
                                                    <p>Allow me to present this analogy as Newton’s Laws of Productivity.</p>
                                                    <span class="p-date">by <a href="#" title="">Abbi Jackobson</a> - 12-Sep</span>
                                                </div>
                                                <div class="g-post-ranking">

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-sm-6">
                                        <div class="g-post-classic">
                                            <figure>
                                                <img alt="" src="images/writing_348x228.jpg">

                                            </figure>
                                            <div class="g-post-meta">
                                                <div class="post-title">
                                                    <h4><a title="" href="{{url('article3')}}">7 Improvements I Have Made to My Writing and Work</a></h4>
                                                    <p>Reflection on how I could produce a higher standard of work. </p>
                                                    <span class="p-date">by <a href="#" title="">Aaron Elkins</a> - 2 days ago </span>
                                                </div>
                                                <div class="g-post-ranking">

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-sm-6">
                                        <div class="g-post-classic">
                                            <figure>
                                                <img alt="" src="images/new-seo-skills_348x228.png">

                                            </figure>
                                            <div class="g-post-meta">
                                                <div class="post-title">
                                                    <h4><a title="" href="{{url('article4')}}">How to Build Skills That Are Valuable</a></h4>
                                                    <p>Think about what you want to be good at. How can you start selling matches?</p>
                                                    <span class="p-date">by <a href="#" title="">Abby James</a> - 12 hours ago </span>
                                                </div>
                                                <div class="g-post-ranking">

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-sm-6">
                                        <div class="g-post-classic">
                                            <figure>
                                                <img alt="" src="images/iStock-687810810_348x228.jpg">

                                            </figure>
                                            <div class="g-post-meta">
                                                <div class="post-title">
                                                    <h4><a title="" href="#">How to Build New Habits by Taking Advantage of Old Ones</a></h4>
                                                    <p>This article is an excerpt from Atomic Habits.</p>
                                                    <span class="p-date">by <a href="#" title=""></a> - 10-Dec</span>
                                                </div>
                                                <div class="g-post-ranking">

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-sm-6">
                                        <div class="g-post-classic">
                                            <figure>
                                                <img alt="" src="images/152362-GRT-5-Ways-to-Cope-with-Professional-Jealousy-Because-Being-Laid-Off-Sucks-732x549-Feature-732x549_348x228.jpg">

                                            </figure>
                                            <div class="g-post-meta">
                                                <div class="post-title">
                                                    <h4><a title="" href="#">Stop Thinking and Start Doing: The Power of Practicing More</a></h4>
                                                    <p>We all have goals that we want to achieve.</p>
                                                    <span class="p-date">by <a href="#" title="">A.C Fuller</a> - 2 days ago </span>
                                                </div>
                                                <div class="g-post-ranking">

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-sm-6">
                                        <div class="g-post-classic">
                                            <figure>
                                                <img alt="" src="images/d82a1056272deb83d5b6df061c95fcec_348x228.jpg">

                                            </figure>
                                            <div class="g-post-meta">
                                                <div class="post-title">
                                                    <h4><a title="" href="#">How to Uncover Your Creative Talent by Using the “Equal Odds Rule”</a></h4>
                                                    <p>Which 2 or 3 will be winners? I have no idea.</p>
                                                    <span class="p-date">by <a href="#" title="">Heller</a> - 2 days ago </span>
                                                </div>
                                                <div class="g-post-ranking">

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-sm-6">
                                        <div class="g-post-classic">
                                            <figure>
                                                <img alt="" src="images/climbing_348x228.jpg">

                                            </figure>
                                            <div class="g-post-meta">
                                                <div class="post-title">
                                                    <h4><a title="" href="#">Do the Painful Things First</a></h4>
                                                    <p>This same principle can be applied in dozens of ways throughout your day.

                                                    </p>
                                                    <span class="p-date">by <a href="#" title="">Nixon</a> - 2 days ago </span>
                                                </div>
                                                <div class="g-post-ranking">

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-sm-6">
                                        <div class="g-post-classic">
                                            <figure>
                                                <img alt="" src="images/haters-and-critics_348x228.jpg">

                                            </figure>
                                            <div class="g-post-meta">
                                                <div class="post-title">
                                                    <h4><a title="" href="#">Haters and Critics: How to Deal with People Judging You and Your Work</a></h4>
                                                    <p>It doesn’t matter how you choose to live your life</p>
                                                    <span class="p-date">by <a href="#" title="">Sullivan</a> - 12-Nov </span>
                                                </div>
                                                <div class="g-post-ranking">

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        {{-- <section>
            <div class="gap no-gap bluesh high-opacity btm-mockup">
                <div class="content-bg-wrap" style="background: url(images/resources/btm-banner.png)"></div>
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="btm-baner">
                                <div class="baner-mockup">
                                    <img src="images/resources/btm-baner-avatar.png" alt="">
                                </div>
                                <div class="baner-inf">
                                    <span>wana more friends?</span>
                                    <a href="#" title="">Start Now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section> --}}


    </body>
    @endsection
