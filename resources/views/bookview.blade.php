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
                                            <img src="{{$book->image_url}}" class="img-fluid" style="    height: 100%;
                                            width: 50%;">
										</ul>
										<ul class="slider-nav-gold">

										</ul>
									</div>
								</div>
								<div class="col-lg-6">
    								<div class="full-postmeta">

    									<span class="prices style2">
											<ins>

											</ins>
											<del>

											</del>
                                    	</span>

                                        <h4>{{$book->original_title }}</h4>

                                        <h5>{{$book->original_title }}</h5>
                                        <h6>{{$book->authors}}</h6>

                                    	<p>

                                    	</p>

										<div class="share">
											<span>share</span>
											<a href="#" title=""><i class="fa fa-facebook-square"></i></a>
											<a href="#" title=""><i class="fa fa-twitter-square"></i></a>
											<a href="#" title=""><i class="fa fa-google-plus-square"></i></a>
										</div>




	</section><!-- shop detail meta -->



</body>
@endsection
