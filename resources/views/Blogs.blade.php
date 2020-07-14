@extends('layouts.app')

@section('content')
<body>
    <!--<div class="se-pre-con"></div>-->
    <div class="theme-layout">


        <section>
            <div class="ext-gap bluesh high-opacity">
                <div class="content-bg-wrap"></div>
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="top-banner">
                                <h3 style="color: white;">ReadersHub Blog</h3>
                                <nav class="breadcrumb">

                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section><!-- top area animated -->

        <section>
            <div class="gap ext-bottom">
                <div class="container">
                    <div class="row">
                        <div class="offset-lg-1 col-lg-10">
                            <div class="detail-page">
                                <div class="detail-top">
                                    <img src="images/8b191360068195.5a3a79c44b084_945x415.jpg" alt="">
                                    <div class="connect-with">
                                        <ul class="social-connect">
                                            <li class="rs">
                                                <i class="fa fa-rss"></i>
                                                <span>
                                                    <a title="" href="#">Subscribe</a>
                                                    <i>to Rss Feed</i>
                                                </span>
                                            </li>
                                            <li class="twit">
                                                <i class="fa fa-twitter"></i>
                                                <span>
                                                    <a title="" href="#">Follow Us</a>
                                                    <i>on twitter</i>
                                                </span>
                                            </li>
                                            <li class="fb">
                                                <i class="fa fa-facebook"></i>
                                                <span>
                                                    <a title="" href="#">Find Us</a>
                                                    <i>on Facebook</i>
                                                </span>
                                            </li>
                                            <li class="googl">
                                                <i class="fa fa-google-plus"></i>
                                                <span>
                                                    <a title="" href="#">Find Us</a>
                                                    <i>on Google plus</i>
                                                </span>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="detail-meta">
                                    <h2>The ReadersHub Blog</h2>

                                    <div class="post-time">
                                        <div class="author-thumb">
                                        <img src="images/resources/chatlist2.jpg" alt="">
                                        <span><a href="#" title="">by Muhammad Abdullah</a></span>
                                    </div>
                                        <span class="post-date">
                                            <i class="fa fa-calendar"></i>
                                            <a title="" href="#">12 December 2019</a>
                                        </span>
                                        <span class="coments">


                                        </span>
                                    </div>
                                    <p>
                                        Recommendation system provides an easiest way to buy items based on user interest. Recommendation system are new emerging technique or technology that help users in various aspects .Book recommendation system are widely used for buying and selling of books on the basis of user interest. Readers Hub based on combined features of content based filtering and collaborative filtering provides best recommended books to its users on the basis of their interest. The motivation that we got to build this platform is to tackle the problem of too much irrelevant information in existing systems in order to restore user satisfaction we are proposing a hybrid algorithm in which we combine two or more algorithms. Readers Hub gives its user’s best recommended books of best authors based on their interest.
                                    </p>
                                    <blockquote>
                                        <p>

                                        </p>
                                    </blockquote>
                                    <p>

                                    </p>
                                    <figure class="alignright">
                                        <img src="images/resources/blog-detail2.jpg" alt="">
                                    </figure>
                                    <p>

                                    </p>
                                    <ul>

                                    </ul>

                                    </div><!-- comments sec -->
                                    <div class="gap-60 no-gap">
                                        <h4 class="comment-title">Leave a Comment</h4>
                                        <div class="contact-form">
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
                                                  <label class="control-label" for="input">Subject</label><i class="mtrl-select"></i>
                                                </div>

                                                <div class="form-group">
                                                  <textarea rows="4" id="textarea" required="required"></textarea>
                                                  <label class="control-label" for="textarea">Message</label><i class="mtrl-select"></i>
                                                </div>
                                                <div class="submit-btns">
                                                    <button class="mtr-btn signup" type="button"><i>Submit</i></button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>


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

    </body>

    @endsection
