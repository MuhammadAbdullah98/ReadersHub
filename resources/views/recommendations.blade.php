@extends('layouts.app')

@section('content')

{{--  <form action="{{route ('script.run')}}" method="POST" enctype="multipart/form-data">
@csrf
<input type="file" name="file" accept=".csv">
<button class="btn btn-success">Import Book Data</button>
</form> --}}
<!-- Nav -->
{{--  <nav class="navbar navbar-expand-lg navbar-light bg-white col-12">
    <button class="navbar-toggler d-lg-none border-0" type="button" data-toggle="collapse" data-target="#mainNav">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="mainNav">
        <ul class="navbar-nav mx-auto mt-2 mt-lg-0">
            <li class="nav-item active">
                <a class="nav-link" href="{{url('/')}}">Home <span class="sr-only">(current)</span></a>
</li>
<li class="nav-item active">
    <a class="nav-link" href="{{url('category')}}">Books <span class="sr-only">(current)</span></a>
</li>
</ul>
</div>
</nav> --}}


{{-- <div class="col-12">
    <!-- Main Content -->
    <main class="row">

        <div class="col-12 ">
            <div id="slider" class="carousel slide w-100" data-ride="carousel">
                <ol class="carousel-indicators">
                    <li data-target="#slider" data-slide-to="0" class="active"></li>
                    <li data-target="#slider" data-slide-to="1"></li>
                    <li data-target="#slider" data-slide-to="2"></li>
                </ol>
                <div class="carousel-inner" role="listbox">
                    <div class="carousel-item active">
                        <img src="images/slider-1.jpg" class="slider-img" width="100%">
                    </div>
                    <div class="carousel-item">
                        <img src="images/slider-2.jpg" class="slider-img" width="100%">
                    </div>
                    <div class="carousel-item">
                        <img src="images/slider-3.jpg" class="slider-img" width="100%">
                    </div>
                </div>
                <a class="carousel-control-prev" href="#slider" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#slider" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
        </div>
        <!-- Slider --> --}}

{{--
        <div class="col-12 px-0">
            <h1 style="text-align: center; padding:3%;">New Suggestions</h1>
            <p style="text-align: center; font-size:14pt;padding-bottom:2%;">Books are a uniquely portable magic</p>
            <div class="row" style="padding-right:90px; padding-left:90px; margin-bottom: 5%">
                <div class="col-3">
                    <div class="card" style="width: 18rem; display:contents;">
                        <img class="card-img-top" src="images/pro_pbid_660798.jpg" alt="Card image cap">
                        <div class="card-body">
                            <h5 class="card-title">A is for Alibi</h5>


                        </div>
                    </div>
                </div>
                <div class="col-3">
                    <div class="card" style="width: 18rem; display:contents;">
                        <img class="card-img-top" src="images/pro_pbid_16756.jpg" alt="Card image cap">
                        <div class="card-body">
                            <h5 class="card-title">Gillain flynn dark places</h5>


                        </div>
                    </div>
                </div>
                <div class="col-3">
                    <div class="card" style="width: 18rem; display:contents;">
                        <img class="card-img-top" src="images/pro_pbid_288869.jpg" alt="Card image cap">
                        <div class="card-body">
                            <h5 class="card-title">Frankenstein</h5>


                        </div>
                    </div>
                </div>
                <div class="col-3">
                    <div class="card" style="width: 18rem; display:contents;">
                        <img class="card-img-top" src="images/pro_pbid_166268.jpg" alt="Card image cap">
                        <div class="card-body">
                            <h5 class="card-title">Dracula</h5>

                        </div>
                    </div>
                </div>
            </div>

        </div>  --}}
{{-- best book --}}
{{--  <div class="col-12 px-0">
            <h1 style="text-align: center; padding:3%;">Recommendations for you</h1>
            <p style="text-align: center; font-size:14pt;padding-bottom:2%;">Books are a uniquely portable magic</p>
            <div class="row" style="padding-right:90px; padding-left:90px; margin-bottom: 5%">
                <div class="col-3">
                    <div class="card" style="width: 18rem; display:contents;">
                        <img class="card-img-top" src="images/pro_pbid_704207.jpg" alt="Card image cap">
                        <div class="card-body">
                            <h5 class="card-title">One for the money</h5>

                        </div>
                    </div>
                </div>
                <div class="col-3">
                    <div class="card" style="width: 18rem; display:contents;">
                        <img class="card-img-top" src="images/pro_pbid_827349.jpg" alt="Card image cap">
                        <div class="card-body">
                            <h5 class="card-title">The hound of the baskervilles</h5>


                        </div>
                    </div>
                </div>
                <div class="col-3">
                    <div class="card" style="width: 18rem; display:contents;">
                        <img class="card-img-top" src="images/pro_pbid_997621.jpg" alt="Card image cap">
                        <div class="card-body">
                            <h5 class="card-title">Red Dragon</h5>


                        </div>
                    </div>
                </div>
                <div class="col-3">
                    <div class="card" style="width: 18rem; display:contents;">
                        <img class="card-img-top" src="images/pro_pbid_12428.jpg" alt="Card image cap">
                        <div class="card-body">
                            <h5 class="card-title">Dean Koontz</h5>

                        </div>
                    </div>
                </div>
            </div>

        </div>
        <div class="col-12 px-0">
            <h1 style="text-align: center; padding:3%;">Recommenders you may like</h1>
            <p style="text-align: center; font-size:14pt;padding-bottom:2%;">Books are a uniquely portable magic</p>
            <div class="row" style="padding-right:90px; padding-left:90px; margin-bottom: 5%">
                <div class="col-3">
                    <div class="card" style="width: 18rem; display:contents;">
                        <img class="card-img-top" src="images/NewWayToReadBooks.jpg" alt="Card image cap">
                        <div class="card-body">
                            <h5 class="card-title">Popular novels</h5>
                            <p class="card-text">It's the possibility of having a dream come true that makes life interesting.</p>

                        </div>
                    </div>
                </div>
                <div class="col-3">
                    <div class="card" style="width: 18rem; display:contents;">
                        <img class="card-img-top" src="images/Readingabook.jpg" alt="Card image cap">
                        <div class="card-body">
                            <h5 class="card-title">Popular fictions</h5>
                            <p class="card-text">Thats what fiction is for.Its for getting at the truth when the truth isn't sufficient for the truth.</p>

                        </div>
                    </div>
                </div>
                <div class="col-3">
                    <div class="card" style="width: 18rem; display:contents;">
                        <img class="card-img-top" src="images/mockup2.jpg" alt="Card image cap">
                        <div class="card-body">
                            <h5 class="card-title">Short Tech Articles</h5>
                            <p class="card-text">You never change things by fighting the existing reality.
                            </p>

                        </div>
                    </div>
                </div>
                <div class="col-3">
                    <div class="card" style="width: 18rem; display:contents;">
                        <img class="card-img-top" src="images/8b191360068195.5a3a79c44b084.jpg" alt="Card image cap">
                        <div class="card-body">
                            <h5 class="card-title">Popular poetry</h5>
                            <p class="card-text">He who draws noble delights from sentiments of poetry is a true poet.</p>

                        </div>
                    </div>
                </div>
            </div>

        </div>  --}}
{{-- quote --}}


</div>
</div>
</div>
{{--  </div>


    </main>  --}}
{{--  <!-- Main Content -->
</div>

</div>  --}}

{{--  </div>  --}}
<div class="container">
    <h3>Current Suggestions</h3>
    <div id="carouselId" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#carouselId" data-slide-to="0" class="active"></li>
            <li data-target="#carouselId" data-slide-to="1"></li>
        </ol>
        <div class="carousel-inner" role="listbox">
            <div class="carousel-item active">
                <div class="row">
                    <div class="col-md-2">
                        <div class="card">
                            <div class="card-body">
                                <h3 class="card-title">Title</h3>
                                <p class="card-text">Text</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-2">
                        <div class="card">
                            <div class="card-body">
                                <h3 class="card-title">Title</h3>
                                <p class="card-text">Text</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-2">
                        <div class="card">
                            <div class="card-body">
                                <h3 class="card-title">Title</h3>
                                <p class="card-text">Text</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-2">
                        <div class="card">
                            <div class="card-body">
                                <h3 class="card-title">Title</h3>
                                <p class="card-text">Text</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-2">
                        <div class="card">
                            <div class="card-body">
                                <h3 class="card-title">Title</h3>
                                <p class="card-text">Text</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-2">
                        <div class="card">
                            <div class="card-body">
                                <h3 class="card-title">Title</h3>
                                <p class="card-text">Text</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <div class="row">
                    <div class="col-md-2">
                        <div class="card">
                            <div class="card-body">
                                <h3 class="card-title">Title</h3>
                                <p class="card-text">Text</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-2">
                        <div class="card">
                            <div class="card-body">
                                <h3 class="card-title">Title</h3>
                                <p class="card-text">Text</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-2">
                        <div class="card">
                            <div class="card-body">
                                <h3 class="card-title">Title</h3>
                                <p class="card-text">Text</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-2">
                        <div class="card">
                            <div class="card-body">
                                <h3 class="card-title">Title</h3>
                                <p class="card-text">Text</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-2">
                        <div class="card">
                            <div class="card-body">
                                <h3 class="card-title">Title</h3>
                                <p class="card-text">Text</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-2">
                        <div class="card">
                            <div class="card-body">
                                <h3 class="card-title">Title</h3>
                                <p class="card-text">Text</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <a class="carousel-control-prev" href="#carouselId" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselId" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
</div>
<div class="container">
    <h3>New Release</h3>
    <div id="carouselId" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#carouselId" data-slide-to="0" class="active"></li>
            <li data-target="#carouselId" data-slide-to="1"></li>
        </ol>
        <div class="carousel-inner" role="listbox">
            <div class="carousel-item active">
                <div class="row">
                    <div class="col-md-2">
                        <div class="card">
                            <div class="card-body">
                                <h3 class="card-title">Title</h3>
                                <p class="card-text">Text</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-2">
                        <div class="card">
                            <div class="card-body">
                                <h3 class="card-title">Title</h3>
                                <p class="card-text">Text</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-2">
                        <div class="card">
                            <div class="card-body">
                                <h3 class="card-title">Title</h3>
                                <p class="card-text">Text</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-2">
                        <div class="card">
                            <div class="card-body">
                                <h3 class="card-title">Title</h3>
                                <p class="card-text">Text</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-2">
                        <div class="card">
                            <div class="card-body">
                                <h3 class="card-title">Title</h3>
                                <p class="card-text">Text</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-2">
                        <div class="card">
                            <div class="card-body">
                                <h3 class="card-title">Title</h3>
                                <p class="card-text">Text</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <div class="row">
                    <div class="col-md-2">
                        <div class="card">
                            <div class="card-body">
                                <h3 class="card-title">Title</h3>
                                <p class="card-text">Text</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-2">
                        <div class="card">
                            <div class="card-body">
                                <h3 class="card-title">Title</h3>
                                <p class="card-text">Text</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-2">
                        <div class="card">
                            <div class="card-body">
                                <h3 class="card-title">Title</h3>
                                <p class="card-text">Text</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-2">
                        <div class="card">
                            <div class="card-body">
                                <h3 class="card-title">Title</h3>
                                <p class="card-text">Text</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-2">
                        <div class="card">
                            <div class="card-body">
                                <h3 class="card-title">Title</h3>
                                <p class="card-text">Text</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-2">
                        <div class="card">
                            <div class="card-body">
                                <h3 class="card-title">Title</h3>
                                <p class="card-text">Text</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <a class="carousel-control-prev" href="#carouselId" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselId" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
</div>
<div class="container">
    <h3>For You</h3>
    <div id="carouselId" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#carouselId" data-slide-to="0" class="active"></li>
            <li data-target="#carouselId" data-slide-to="1"></li>
        </ol>
        <div class="carousel-inner" role="listbox">
            <div class="carousel-item active">
                <div class="row">
                    <div class="col-md-2">
                        <div class="card">
                            <div class="card-body">
                                <h3 class="card-title">Title</h3>
                                <p class="card-text">Text</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-2">
                        <div class="card">
                            <div class="card-body">
                                <h3 class="card-title">Title</h3>
                                <p class="card-text">Text</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-2">
                        <div class="card">
                            <div class="card-body">
                                <h3 class="card-title">Title</h3>
                                <p class="card-text">Text</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-2">
                        <div class="card">
                            <div class="card-body">
                                <h3 class="card-title">Title</h3>
                                <p class="card-text">Text</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-2">
                        <div class="card">
                            <div class="card-body">
                                <h3 class="card-title">Title</h3>
                                <p class="card-text">Text</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-2">
                        <div class="card">
                            <div class="card-body">
                                <h3 class="card-title">Title</h3>
                                <p class="card-text">Text</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <div class="row">
                    <div class="col-md-2">
                        <div class="card">
                            <div class="card-body">
                                <h3 class="card-title">Title</h3>
                                <p class="card-text">Text</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-2">
                        <div class="card">
                            <div class="card-body">
                                <h3 class="card-title">Title</h3>
                                <p class="card-text">Text</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-2">
                        <div class="card">
                            <div class="card-body">
                                <h3 class="card-title">Title</h3>
                                <p class="card-text">Text</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-2">
                        <div class="card">
                            <div class="card-body">
                                <h3 class="card-title">Title</h3>
                                <p class="card-text">Text</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-2">
                        <div class="card">
                            <div class="card-body">
                                <h3 class="card-title">Title</h3>
                                <p class="card-text">Text</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-2">
                        <div class="card">
                            <div class="card-body">
                                <h3 class="card-title">Title</h3>
                                <p class="card-text">Text</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <a class="carousel-control-prev" href="#carouselId" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselId" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
</div>


@endsection
