@extends('layouts.app')

@section('content')

<body>
<!--<div class="se-pre-con"></div>-->
<div class="theme-layout">



	<section>
		<div class="gap100">
			<div class="container">
				<div class="row">
					<div class="col-lg-12">
						<div class="prod-detail">
							<div class="row">
								<div class="col-lg-6">
									<div class="prod-avatar">
										<ul class="slider-for-gold">
                                            <img src="{{$book->image_url}}" class="img-fluid">
										</ul>
										<ul class="slider-nav-gold">
											<li><img src="images/resources/detail-gold1.jpg" alt=""></li>
											<li><img src="images/resources/detail-gold2.jpg" alt=""></li>
											<li><img src="images/resources/detail-gold3.jpg" alt=""></li>
											<li><img src="images/resources/detail-gold1.jpg" alt=""></li>
										</ul>
									</div>
								</div>
								<div class="col-lg-6">
    								<div class="full-postmeta">

    									<span class="prices style2">
											<ins>
												<span class="woocommerce-Price-amount amount">
													<span class="woocommerce-Price-currencySymbol">$</span>122.00
												</span>
											</ins>
											<del>
												<span class="woocommerce-Price-amount amount">
													<span class="woocommerce-Price-currencySymbol">$</span>150.00
												</span>
											</del>
                                    	</span>

                                    	<h4>{{$book->original_title }}</h4>

                                    	<p>
                                    		Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor
                                    	</p>



							<div class="gap no-bottom">
								<div class="tab-section">
									<ul class="nav nav-tabs single-btn">
										 <li class="nav-item"><a class="active" href="#desc" data-toggle="tab">Description</a></li>
										 <li class="nav-item"><a class="" href="#additional" data-toggle="tab">Additional Information</a></li>
										 <li class="nav-item"><a class="" href="#review" data-toggle="tab">Reviews (2)</a></li>
									</ul>

									<!-- Tab panes -->
									<div class="tab-content">
									  <div class="tab-pane active fade show " id="desc" >
										<div class="more-pix">
											<h2 class="main-title text-center">{{ $book->original_title }}</h2>
											<div class="row">
												<div class="offset-md-1 col-lg-10">
													<p class="prod-info text-center">
														Let the rest look at you with starry eyes, as you show off your love for fashion and for the company by carrying this grey handbag from Inc.5. Featuring a sophisticated gusseted design and delicate laser cut details all over,and find the way through the maze of the creative process/journey. this handbag is a cut above the rest. It also has twin grab handles and a zip closure that allows the ease of carrying.
													</p>
													<p class="prod-info text-center">
														Ariadne’s thread is the thread of the divine present in all things.  or rather uncover, their source and find the way through the maze of the creative process/journey.
														Let the rest look at you with starry eyes, as you show off your love for fashion and for the company by carrying this grey handbag from Inc.5.
													</p>
												</div>
											</div>
										</div>
									  </div>
									  <div class="tab-pane fade" id="additional" >
										<div class="aditional-inf">
										  	<h2 class="main-title">Shoes for Men Black</h2>
											<p class="adition-info">
												Fusce vestibulum justo id varius tristique. Vivamus purus odio, interdum id massa ullamcorper, tempus.
											</p>
											<table class="table table-responsive adition">
												<tbody>
													<tr>
														<td class="bold">Material:</td>
														<td>Cotton</td>
													</tr>
													<tr>
														<td class="bold">Weight:</td>
														<td>100 g</td>
													</tr>
													<tr>
														<td class="bold">Color:</td>
														<td>Beige, white, blue</td>
													</tr>
													<tr>
														<td class="bold">Size:</td>
														<td>44, 48, 50</td>
													</tr>
												</tbody>
											</table>
										  </div>
									  </div>
									  <div class="tab-pane fade" id="review">
											<div class="woocommerce-Reviews">
												<div id="comments">
													<h2 class="woocommerce-Reviews-title">Reviews</h2>
													<ol class="commentlist">
														<li>
															<div class="comment_container">
																<img src="images/resources/single-comment1.jpg" alt="" class="avatar">
																<div class="comment-text">
																	<span class="user-name">Jason Bourne</span>
																	<a class="post-date">24 Sep 2018</a>
																	<div class="star-rating">
																		<span><i class="fa fa-star"></i></span>
																		<span><i class="fa fa-star"></i></span>
																		<span><i class="fa fa-star"></i></span>
																		<span><i class="fa fa-star"></i></span>
																		<span><i class="fa fa-star"></i></span>
																	</div>
																	<p>
																		Duis ante magna, aliquet sit amet sagittis vitae, tristique at lacus. Ut et accumsan turpis. Phasellus ornare, tortor ut congue imperdiet, mauris magna condimentum nulla, non malesuada mauris massa eu augue.
																	</p>
																</div>
															</div>
														</li>
														<li>
															<div class="comment_container">
																<img src="images/resources/single-comment1.jpg" alt="" class="avatar">
																<div class="comment-text">
																	<span class="user-name">Jhon Cena</span>
																	<a class="post-date">12 Aug 2018</a>
																	<div class="star-rating">
																		<span><i class="fa fa-star"></i></span>
																		<span><i class="fa fa-star"></i></span>
																		<span><i class="fa fa-star"></i></span>
																		<span><i class="fa fa-star"></i></span>
																		<span><i class="fa fa-star"></i></span>
																	</div>
																	<p>
																		Duis ante magna, aliquet sit amet sagittis vitae, tristique at lacus. Ut et accumsan turpis. Phasellus ornare, tortor ut congue imperdiet, mauris magna condimentum nulla, non malesuada mauris massa eu augue.
																	</p>
																</div>
															</div>
														</li>
													</ol>
												</div>
												<div id="respond" class="comment-respond">
													<h3 class="reply-title">Post Your Review:</h3>
													<div class="star-rating">
														<label>Rating:</label>
															<span><i class="fa fa-star"></i></span>
															<span><i class="fa fa-star"></i></span>
															<span><i class="fa fa-star"></i></span>
															<span><i class="fa fa-star"></i></span>
															<span><i class="fa fa-star"></i></span>
														</div>
													<form method="post">
														<p class="comment-notes"><span id="email-notes">Your email address will not be published.</span> Required fields are marked <span class="required">*</span>
														</p>

														<p class="comment-form-author">
															<input type="text" placeholder="Your Name*">
														</p>
														<p class="comment-form-email">
															<input type="text" placeholder="Email*">
														</p>
														<p class="comment-notes">
															<textarea placeholder="Enter your review*"></textarea>
														</p>
													</form>

													<p class="form-submit">
														<input type="submit" class="submit" value="submit">
													</p>

												</div>
											</div>
									  </div>
									</div>
								</div>
							</div>

	</section><!-- shop detail meta -->



</body>
@endsection
