@extends('layouts.app')

@section('content')
<body>
    <!--<div class="se-pre-con"></div>-->
    <div class="theme-layout">

        {{-- <div class="responsive-header">
            <div class="mh-head first Sticky">
                <span class="mh-btns-left">
                    <a class="" href="#menu"><i class="fa fa-align-justify"></i></a>
                </span>
                <span class="mh-text">
                    <a href="newsfeed.html" title=""><img src="images/logo2.png" alt=""></a>
                </span>
                <span class="mh-btns-right">
                    <a class="fa fa-sliders" href="#shoppingbag"></a>
                </span>
            </div>
            <div class="mh-head second">
                <form class="mh-form">
                    <input placeholder="search" />
                    <a href="#/" class="fa fa-search"></a>
                </form>
            </div>
            <nav id="menu" class="res-menu">
                <ul>
                    <li><span>Home</span>
                        <ul>
                            <li><a href="index.html" title="">Home Social</a></li>
                            <li><a href="index2.html" title="">Home Social 2</a></li>
                            <li><a href="index-company.html" title="">Home Company</a></li>
                            <li><a href="landing.html" title="">Login page</a></li>
                            <li><a href="logout.html" title="">Logout Page</a></li>
                            <li><a href="newsfeed.html" title="">news feed</a></li>
                        </ul>
                    </li>
                    <li><span>Time Line</span>
                        <ul>
                            <li><a href="time-line.html" title="">timeline</a></li>
                            <li><a href="timeline-friends.html" title="">timeline friends</a></li>
                            <li><a href="timeline-groups.html" title="">timeline groups</a></li>
                            <li><a href="timeline-pages.html" title="">timeline pages</a></li>
                            <li><a href="timeline-photos.html" title="">timeline photos</a></li>
                            <li><a href="timeline-videos.html" title="">timeline videos</a></li>
                            <li><a href="fav-page.html" title="">favourit page</a></li>
                            <li><a href="groups.html" title="">groups page</a></li>
                            <li><a href="page-likers.html" title="">Likes page</a></li>
                            <li><a href="people-nearby.html" title="">people nearby</a></li>


                        </ul>
                    </li>
                    <li><span>Account Setting</span>
                        <ul>
                            <li><a href="create-fav-page.html" title="">create fav page</a></li>
                            <li><a href="edit-account-setting.html" title="">edit account setting</a></li>
                            <li><a href="edit-interest.html" title="">edit-interest</a></li>
                            <li><a href="edit-password.html" title="">edit-password</a></li>
                            <li><a href="edit-profile-basic.html" title="">edit profile basics</a></li>
                            <li><a href="edit-work-eductation.html" title="">edit work educations</a></li>
                            <li><a href="messages.html" title="">message box</a></li>
                            <li><a href="inbox.html" title="">Inbox</a></li>
                            <li><a href="notifications.html" title="">notifications page</a></li>
                        </ul>
                    </li>
                    <li><span>forum</span>
                        <ul>
                            <li><a href="forum.html" title="">Forum Page</a></li>
                            <li><a href="forums-category.html" title="">Fourm Category</a></li>
                            <li><a href="forum-open-topic.html" title="">Forum Open Topic</a></li>
                            <li><a href="forum-create-topic.html" title="">Forum Create Topic</a></li>
                        </ul>
                    </li>
                    <li><span>Our Shop</span>
                        <ul>
                            <li><a href="shop.html" title="">Shop Products</a></li>
                            <li><a href="shop-masonry.html" title="">Shop Masonry Products</a></li>
                            <li><a href="shop-single.html" title="">Shop Detail Page</a></li>
                            <li><a href="shop-cart.html" title="">Shop Product Cart</a></li>
                            <li><a href="shop-checkout.html" title="">Product Checkout</a></li>
                        </ul>
                    </li>
                    <li><span>Our Blog</span>
                        <ul>
                            <li><a href="blog-grid-wo-sidebar.html" title="">Our Blog</a></li>
                            <li><a href="blog-grid-right-sidebar.html" title="">Blog with R-Sidebar</a></li>
                            <li><a href="blog-grid-left-sidebar.html" title="">Blog with L-Sidebar</a></li>
                            <li><a href="blog-masonry.html" title="">Blog Masonry Style</a></li>
                            <li><a href="blog-list-wo-sidebar.html" title="">Blog List Style</a></li>
                            <li><a href="blog-list-right-sidebar.html" title="">Blog List with R-Sidebar</a></li>
                            <li><a href="blog-list-left-sidebar.html" title="">Blog List with L-Sidebar</a></li>
                            <li><a href="blog-detail.html" title="">Blog Post Detail</a></li>
                        </ul>
                    </li>
                    <li><span>Portfolio</span>
                        <ul>
                            <li><a href="portfolio-2colm.html" title="">Portfolio 2col</a></li>
                            <li><a href="portfolio-3colm.html" title="">Portfolio 3col</a></li>
                            <li><a href="portfolio-4colm.html" title="">Portfolio 4col</a></li>
                        </ul>
                    </li>
                    <li><span>Support & Help</span>
                        <ul>
                            <li><a href="support-and-help.html" title="">Support & Help</a></li>
                            <li><a href="support-and-help-detail.html" title="">Support & Help Detail</a></li>
                            <li><a href="support-and-help-search-result.html" title="">Support & Help Search Result</a></li>
                        </ul>
                    </li>
                    <li><span>More pages</span>
                        <ul>
                            <li><a href="careers.html" title="">Careers</a></li>
                            <li><a href="career-detail.html" title="">Career Detail</a></li>
                            <li><a href="404.html" title="">404 error page</a></li>
                            <li><a href="404-2.html" title="">404 Style2</a></li>
                            <li><a href="faq.html" title="">faq's page</a></li>
                            <li><a href="insights.html" title="">insights</a></li>
                            <li><a href="knowledge-base.html" title="">knowledge base</a></li>
                        </ul>
                    </li>
                    <li><a href="about.html" title="">about</a></li>
                    <li><a href="about-company.html" title="">About Us2</a></li>
                    <li><a href="contact.html" title="">contact</a></li>
                    <li><a href="contact-branches.html" title="">Contact Us2</a></li>
                    <li><a href="widgets.html" title="">Widgts</a></li>
                </ul>
            </nav>
            <nav id="shoppingbag">
                <div>
                    <div class="">
                        <form method="post">
                            <div class="setting-row">
                                <span>use night mode</span>
                                <input type="checkbox" id="nightmode"/>
                                <label for="nightmode" data-on-label="ON" data-off-label="OFF"></label>
                            </div>
                            <div class="setting-row">
                                <span>Notifications</span>
                                <input type="checkbox" id="switch2"/>
                                <label for="switch2" data-on-label="ON" data-off-label="OFF"></label>
                            </div>
                            <div class="setting-row">
                                <span>Notification sound</span>
                                <input type="checkbox" id="switch3"/>
                                <label for="switch3" data-on-label="ON" data-off-label="OFF"></label>
                            </div>
                            <div class="setting-row">
                                <span>My profile</span>
                                <input type="checkbox" id="switch4"/>
                                <label for="switch4" data-on-label="ON" data-off-label="OFF"></label>
                            </div>
                            <div class="setting-row">
                                <span>Show profile</span>
                                <input type="checkbox" id="switch5"/>
                                <label for="switch5" data-on-label="ON" data-off-label="OFF"></label>
                            </div>
                        </form>
                        <h4 class="panel-title">Account Setting</h4>
                        <form method="post">
                            <div class="setting-row">
                                <span>Sub users</span>
                                <input type="checkbox" id="switch6" />
                                <label for="switch6" data-on-label="ON" data-off-label="OFF"></label>
                            </div>
                            <div class="setting-row">
                                <span>personal account</span>
                                <input type="checkbox" id="switch7" />
                                <label for="switch7" data-on-label="ON" data-off-label="OFF"></label>
                            </div>
                            <div class="setting-row">
                                <span>Business account</span>
                                <input type="checkbox" id="switch8" />
                                <label for="switch8" data-on-label="ON" data-off-label="OFF"></label>
                            </div>
                            <div class="setting-row">
                                <span>Show me online</span>
                                <input type="checkbox" id="switch9" />
                                <label for="switch9" data-on-label="ON" data-off-label="OFF"></label>
                            </div>
                            <div class="setting-row">
                                <span>Delete history</span>
                                <input type="checkbox" id="switch10" />
                                <label for="switch10" data-on-label="ON" data-off-label="OFF"></label>
                            </div>
                            <div class="setting-row">
                                <span>Expose author name</span>
                                <input type="checkbox" id="switch11" />
                                <label for="switch11" data-on-label="ON" data-off-label="OFF"></label>
                            </div>
                        </form>
                    </div>
                </div>
            </nav>
        </div><!-- responsive header -->

        <div class="topbar transparent">
            <div class="logo">
                <a title="" href="newsfeed.html"><img src="images/logo2.png" alt=""></a>
            </div>
            <div class="menu-container" id="toggle">
              <a href="#" class="canvas-menu" >
                <i class="fa fa-times fa-bars" aria-hidden="true"></i></a>
            </div>
            <div class="overlay" id="overlay">
              <nav class="overlay-menu">
                <ul class="offcanvas-menu">
                    <li class="menu-item-has-children">
                        <a href="#" title="">Home</a>
                        <ul>
                            <li><a href="index.html" title="">Home Social</a></li>
                            <li><a href="index2.html" title="">Home Social 2</a></li>
                            <li><a href="index-company.html" title="">Home Company</a></li>
                        </ul>
                    </li>
                    <li class="menu-item-has-children">
                        <a href="#" title="">Our Blog</a>
                        <ul>
                            <li><a href="blog-grid-wo-sidebar.html" title="">Our Blog</a></li>
                            <li><a href="blog-grid-right-sidebar.html" title="">Blog with R-Sidebar</a></li>
                            <li><a href="blog-grid-left-sidebar.html" title="">Blog with L-Sidebar</a></li>
                            <li><a href="blog-masonry.html" title="">Blog Masonry Style</a></li>
                            <li><a href="blog-list-wo-sidebar.html" title="">Blog List Style</a></li>
                            <li><a href="blog-list-right-sidebar.html" title="">Blog List with R-Sidebar</a></li>
                            <li><a href="blog-list-left-sidebar.html" title="">Blog List with L-Sidebar</a></li>
                            <li><a href="blog-detail.html" title="">Blog Post Detail</a></li>
                        </ul>
                    </li>
                    <li class="menu-item-has-children">
                        <a href="#" title="">Shop Pages</a>
                        <ul>
                            <li><a href="shop.html" title="">Shop Products</a></li>
                            <li><a href="shop-masonry.html" title="">Shop Masonry Products</a></li>
                            <li><a href="shop-single.html" title="">Shop Detail Page</a></li>
                            <li><a href="shop-cart.html" title="">Shop Product Cart</a></li>
                            <li><a href="shop-checkout.html" title="">Product Checkout</a></li>
                        </ul>
                    </li>
                    <li class="menu-item-has-children">
                        <a href="#" title="">Our Portfolio</a>
                        <ul>
                            <li><a href="portfolio-2colm.html" title="">Portfolio 2col</a></li>
                            <li><a href="portfolio-3colm.html" title="">Portfolio 3col</a></li>
                            <li><a href="portfolio-4colm.html" title="">Portfolio 4col</a></li>
                        </ul>
                    </li>
                    <li class="menu-item-has-children">
                        <a href="#" title="">Support & Help</a>
                        <ul>
                            <li><a href="support-and-help.html" title="">Support & Help</a></li>
                            <li><a href="support-and-help-detail.html" title="">Support & Help Detail</a></li>
                            <li><a href="support-and-help-search-result.html" title="">Support & Help Search Result</a></li>
                        </ul>
                    </li>
                    <li class="menu-item-has-children">
                        <a href="#" title="">Company Forum</a>
                        <ul>
                            <li><a href="forum.html" title="">Forum Page</a></li>
                            <li><a href="forums-category.html" title="">Fourm Category</a></li>
                            <li><a href="forum-open-topic.html" title="">Forum Open Topic</a></li>
                            <li><a href="forum-create-topic.html" title="">Forum Create Topic</a></li>
                        </ul>
                    </li>
                    <li class="menu-item-has-children">
                        <a href="#" title="">Featured Pages</a>
                        <ul>
                            <li><a href="careers.html" title="">Careers</a></li>
                            <li><a href="career-detail.html" title="">Career Detail</a></li>
                            <li><a href="logout.html" title="">Logout Page</a></li>
                            <li><a href="404-2.html" title="">404 Errro Page</a></li>
                            <li><a href="about-company.html" title="">About Us</a></li>
                            <li><a href="contact-branches.html" title="">Contact Us</a></li>
                        </ul>
                    </li>

                </ul>
              </nav>
            </div>
        </div><!-- topbar transparent header --> --}}

        <section>
            <div class="ext-gap bluesh high-opacity">
                <div class="content-bg-wrap" style="background: url(images/resources/animated-bg2.png)"></div>
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="top-banner">
                                <h1>PopularArticles</h1>
                                <nav class="breadcrumb">
                                  {{-- <a class="breadcrumb-item" href="index.html">Home</a>
                                  <span class="breadcrumb-item active">Blog</span> --}}
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
                                {{-- <div class="post-filter-sec"> --}}
                                    {{-- <form method="post" class="filter-form">
                                        <input type="post" placeholder="Search post">
                                        <button><i class="ti-search"></i></button>
                                    </form>
                                    <div class="purify">
                                        <span>filter by</span>
                                        <select>
                                            <option>All categories</option>
                                            <option>By Favouirtes</option>
                                            <option>By Likes</option>
                                        </select>
                                        <select>
                                            <option>Assending A-Z</option>
                                            <option>Desending Z-A</option>
                                            <option>Desending (date)</option>
                                            <option>Asending (date)</option>
                                        </select>
                                        <a href="#" title="">purify</a> --}}
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
                                                    <h4><a title="" href="#">How to Build Skills That Are Valuable</a></h4>
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
