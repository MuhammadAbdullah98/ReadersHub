@extends('layouts.app')

@section('content')


<div class="col-12 px-0">
    <h1 style="text-align: center; padding:3%;">New Suggestions</h1>

        </div>
@if (count ($books)>0)
<div class="row">
@foreach ($books as $book)


        <div class="col-xl-2 col-lg-3 col-sm-6 my-3">
                <div class="col-12 bg-white text-center h-100 product-item">
                    <div class="row h-10">
                        <div class="col-12 p-0 mb-3">
                            <a href="{{ route('bookview',['id'=>$book->book_id]) }}"
                                title="">
                                <img src="{{$book->image_url}}" class="img-fluid">
                            </a>
                            {{-- <a href="{{url('bookview')}}">
                                <img src="{{$book->image_url}}" class="img-fluid">
                            </a> --}}
                        </div>
                        <div class="col-12 mb-3">
                            <a href="{{ route('bookview',['id'=>$book->book_id]) }}"
                                title="">{{$book->original_title}}</a>
                            {{--  <a href="{{url('bookview')}}" class="product-name">{{$book->original_title}}</a>  --}}
                        </div>
                        <div class="col-12 mb-3">
                            <span class="product-price-old">
                                Author : {{$book->authors}}
                            </span>
                            <br>
                            <span class="product-price">
                                $500
                            </span>
                        </div>
                        <div class="col-12 mb-3 align-self-end">
                            <a class="add_to_wishlist" href="#" title="Add to Wishlist"><i class="fa fa-heart-o"></i></a>
                        </div>
                    </div>
                </div>
            </div>


@endforeach
</div>
<br>

<div style="margin-left:35%;">
    {{$books->links()}}
</div>

@else

<p>Currently no book in database.</p>

@endif




{{--  <div class="col-lg-5 mx-auto mt-4 mt-lg-0">
    <form action="#">
        <div class="form-group">
            <div class="input-group">
                <input type="search" class="form-control border-dark" placeholder="Search..." required>
                <div class="input-group-append">
                    <button class="btn btn-outline-dark"><i class="fas fa-search"></i></button>
                </div>
            </div>
        </div>
    </form>
</div>

<!-- Nav -->
<div class="row">
    <nav class="navbar navbar-expand-lg navbar-light bg-white col-12">
        <button class="navbar-toggler d-lg-none border-0" type="button" data-toggle="collapse" data-target="#mainNav">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="mainNav">
            <ul class="navbar-nav mx-auto mt-2 mt-lg-0">
                <li class="nav-item active">
                    <a class="nav-link" href="{{ url('home') }}">Home <span class="sr-only">(current)</span></a>
</li>
<li class="nav-item dropdown">
    <a class="nav-link dropdown-toggle" href="#" id="electronics" data-toggle="dropdown" aria-haspopup="true"
        aria-expanded="false">Categories</a>
    <div class="dropdown-menu" aria-labelledby="electronics">
        <a class="dropdown-item" href="{{ url('category') }}">Literature</a>
        <a class="dropdown-item" href="{{ url('category') }}">Science</a>
        <a class="dropdown-item" href="{{ url('category') }}">Poetry</a>
        <a class="dropdown-item" href="{{ url('category') }}">Novels</a>

    </div>
</li>

<li class="nav-item dropdown">
    <a class="nav-link dropdown-toggle" href="#" id="books" data-toggle="dropdown" aria-haspopup="true"
        aria-expanded="false">Books</a>
    <div class="dropdown-menu" aria-labelledby="books">
        <a class="dropdown-item" href="{{ url('category') }}">Adventure</a>
        <a class="dropdown-item" href="{{ url('category') }}">Horror</a>
        <a class="dropdown-item" href="{{ url('category') }}">Romantic</a>
        <a class="dropdown-item" href="{{ url('category') }}">Childrens</a>
        <a class="dropdown-item" href="{{ url('category') }}">Non-Fiction</a>
    </div>
</li>
</ul>
</div>
</nav>
</div>
<!-- Nav -->

<div class="col-12">
    <!-- Main Content -->
    <main class="row">

        <!-- Category Products -->
        <div class="col-12">
            <div class="row">
                <div class="col-12 py-3">
                    <div class="row">
                        <div class="col-12 text-center text-uppercase">
                            <h2>Computers</h2>
                        </div>
                    </div>
                    <div class="row">

                        <!-- Books -->
                        <div class="col-xl-2 col-lg-3 col-sm-6 my-3">
                            <div class="col-12 bg-white text-center h-100 product-item">
                                <div class="row h-100">
                                    <div class="col-12 p-0 mb-3">
                                        <a href="product.html">
                                            <img src="images/image-1.jpg" class="img-fluid">
                                        </a>
                                    </div>
                                    <div class="col-12 mb-3">
                                        <a href="product.html" class="product-name">Sony Alpha DSLR Camera</a>
                                    </div>
                                    <div class="col-12 mb-3">
                                        <span class="product-price-old">
                                            $500
                                        </span>
                                        <br>
                                        <span class="product-price">
                                            $500
                                        </span>
                                    </div>
                                    <div class="col-12 mb-3 align-self-end">
                                        <button class="btn btn-outline-dark" type="button"><i
                                                class="fas fa-cart-plus mr-2"></i>Add to cart</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Product -->

                        <!-- Product -->
                        <div class="col-xl-2 col-lg-3 col-sm-6 my-3">
                            <div class="col-12 bg-white text-center h-100 product-item">
                                <div class="row h-100">
                                    <div class="col-12 p-0 mb-3">
                                        <a href="product.html">
                                            <img src="images/image-2.jpg" class="img-fluid">
                                        </a>
                                    </div>
                                    <div class="col-12 mb-3">
                                        <a href="product.html" class="product-name">Optoma 4K HDR Projector</a>
                                    </div>
                                    <div class="col-12 mb-3">
                                        <span class="product-price">
                                            $1,500
                                        </span>
                                    </div>
                                    <div class="col-12 mb-3 align-self-end">
                                        <button class="btn btn-outline-dark" type="button"><i
                                                class="fas fa-cart-plus mr-2"></i>Add to cart</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Product -->

                        <!-- Product -->
                        <div class="col-xl-2 col-lg-3 col-sm-6 my-3">
                            <div class="col-12 bg-white text-center h-100 product-item">
                                <div class="row h-100">
                                    <div class="col-12 p-0 mb-3">
                                        <a href="product.html">
                                            <img src="images/image-3.jpg" class="img-fluid">
                                        </a>
                                    </div>
                                    <div class="col-12 mb-3">
                                        <a href="product.html" class="product-name">HP Envy Specter 360</a>
                                    </div>
                                    <div class="col-12 mb-3">
                                        <div class="product-price-old">
                                            $2,800
                                        </div>
                                        <span class="product-price">
                                            $2,500
                                        </span>
                                    </div>
                                    <div class="col-12 mb-3 align-self-end">
                                        <button class="btn btn-outline-dark" type="button"><i
                                                class="fas fa-cart-plus mr-2" href="{{ url('cart') }}"></i>Add to
                                            cart</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Product -->

                        <!-- Product -->
                        <div class="col-xl-2 col-lg-3 col-sm-6 my-3">
                            <div class="col-12 bg-white text-center h-100 product-item">
                                <div class="row h-100">
                                    <div class="col-12 p-0 mb-3">
                                        <a href="product.html">
                                            <img src="images/image-4.jpg" class="img-fluid">
                                        </a>
                                    </div>
                                    <div class="col-12 mb-3">
                                        <a href="product.html" class="product-name">Dell Alienware Area 51</a>
                                    </div>
                                    <div class="col-12 mb-3">
                                        <span class="product-price">
                                            $4,500
                                        </span>
                                    </div>
                                    <div class="col-12 mb-3 align-self-end">
                                        <button class="btn btn-outline-dark" type="button"><i
                                                class="fas fa-cart-plus mr-2"></i>Add to cart</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Product -->

                        <!-- Product -->
                        <div class="col-xl-2 col-lg-3 col-sm-6 my-3">
                            <div class="col-12 bg-white text-center h-100 product-item">
                                <div class="row h-100">
                                    <div class="col-12 p-0 mb-3">
                                        <a href="product.html">
                                            <img src="images/image-1.jpg" class="img-fluid">
                                        </a>
                                    </div>
                                    <div class="col-12 mb-3">
                                        <a href="product.html" class="product-name">Sony Alpha DSLR Camera</a>
                                    </div>
                                    <div class="col-12 mb-3">
                                        <span class="product-price-old">
                                            $500
                                        </span>
                                        <br>
                                        <span class="product-price">
                                            $500
                                        </span>
                                    </div>
                                    <div class="col-12 mb-3 align-self-end">
                                        <button class="btn btn-outline-dark" type="button"><i
                                                class="fas fa-cart-plus mr-2"></i>Add to cart</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Product -->

                        <!-- Product -->
                        <div class="col-xl-2 col-lg-3 col-sm-6 my-3">
                            <div class="col-12 bg-white text-center h-100 product-item">
                                <div class="row h-100">
                                    <div class="col-12 p-0 mb-3">
                                        <a href="product.html">
                                            <img src="images/image-2.jpg" class="img-fluid">
                                        </a>
                                    </div>
                                    <div class="col-12 mb-3">
                                        <a href="product.html" class="product-name">Optoma 4K HDR Projector</a>
                                    </div>
                                    <div class="col-12 mb-3">
                                        <span class="product-price">
                                            $1,500
                                        </span>
                                    </div>
                                    <div class="col-12 mb-3 align-self-end">
                                        <button class="btn btn-outline-dark" type="button"><i
                                                class="fas fa-cart-plus mr-2"></i>Add to cart</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Product -->

                        <!-- Product -->
                        <div class="col-xl-2 col-lg-3 col-sm-6 my-3">
                            <div class="col-12 bg-white text-center h-100 product-item">
                                <div class="row h-100">
                                    <div class="col-12 p-0 mb-3">
                                        <a href="product.html">
                                            <img src="images/image-3.jpg" class="img-fluid">
                                        </a>
                                    </div>
                                    <div class="col-12 mb-3">
                                        <a href="product.html" class="product-name">HP Envy Specter 360</a>
                                    </div>
                                    <div class="col-12 mb-3">
                                        <div class="product-price-old">
                                            $2,800
                                        </div>
                                        <span class="product-price">
                                            $2,500
                                        </span>
                                    </div>
                                    <div class="col-12 mb-3 align-self-end">
                                        <button class="btn btn-outline-dark" type="button"><i
                                                class="fas fa-cart-plus mr-2"></i>Add to cart</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Product -->

                        <!-- Product -->
                        <div class="col-xl-2 col-lg-3 col-sm-6 my-3">
                            <div class="col-12 bg-white text-center h-100 product-item">
                                <div class="row h-100">
                                    <div class="col-12 p-0 mb-3">
                                        <a href="product.html">
                                            <img src="images/image-4.jpg" class="img-fluid">
                                        </a>
                                    </div>
                                    <div class="col-12 mb-3">
                                        <a href="product.html" class="product-name">Dell Alienware Area 51</a>
                                    </div>
                                    <div class="col-12 mb-3">
                                        <span class="product-price">
                                            $4,500
                                        </span>
                                    </div>
                                    <div class="col-12 mb-3 align-self-end">
                                        <button class="btn btn-outline-dark" type="button"><i
                                                class="fas fa-cart-plus mr-2"></i>Add to cart</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Product -->

                        <!-- Product -->
                        <div class="col-xl-2 col-lg-3 col-sm-6 my-3">
                            <div class="col-12 bg-white text-center h-100 product-item">
                                <div class="row h-100">
                                    <div class="col-12 p-0 mb-3">
                                        <a href="product.html">
                                            <img src="images/image-1.jpg" class="img-fluid">
                                        </a>
                                    </div>
                                    <div class="col-12 mb-3">
                                        <a href="product.html" class="product-name">Sony Alpha DSLR Camera</a>
                                    </div>
                                    <div class="col-12 mb-3">
                                        <span class="product-price-old">
                                            $500
                                        </span>
                                        <br>
                                        <span class="product-price">
                                            $500
                                        </span>
                                    </div>
                                    <div class="col-12 mb-3 align-self-end">
                                        <button class="btn btn-outline-dark" type="button"><i
                                                class="fas fa-cart-plus mr-2"></i>Add to cart</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Product -->

                        <!-- Product -->
                        <div class="col-xl-2 col-lg-3 col-sm-6 my-3">
                            <div class="col-12 bg-white text-center h-100 product-item">
                                <div class="row h-100">
                                    <div class="col-12 p-0 mb-3">
                                        <a href="product.html">
                                            <img src="images/image-2.jpg" class="img-fluid">
                                        </a>
                                    </div>
                                    <div class="col-12 mb-3">
                                        <a href="product.html" class="product-name">Optoma 4K HDR Projector</a>
                                    </div>
                                    <div class="col-12 mb-3">
                                        <span class="product-price">
                                            $1,500
                                        </span>
                                    </div>
                                    <div class="col-12 mb-3 align-self-end">
                                        <button class="btn btn-outline-dark" type="button"><i
                                                class="fas fa-cart-plus mr-2"></i>Add to cart</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Product -->

                        <!-- Product -->
                        <div class="col-xl-2 col-lg-3 col-sm-6 my-3">
                            <div class="col-12 bg-white text-center h-100 product-item">
                                <div class="row h-100">
                                    <div class="col-12 p-0 mb-3">
                                        <a href="product.html">
                                            <img src="images/image-3.jpg" class="img-fluid">
                                        </a>
                                    </div>
                                    <div class="col-12 mb-3">
                                        <a href="product.html" class="product-name">HP Envy Specter 360</a>
                                    </div>
                                    <div class="col-12 mb-3">
                                        <div class="product-price-old">
                                            $2,800
                                        </div>
                                        <span class="product-price">
                                            $2,500
                                        </span>
                                    </div>
                                    <div class="col-12 mb-3 align-self-end">
                                        <button class="btn btn-outline-dark" type="button"><i
                                                class="fas fa-cart-plus mr-2"></i>Add to cart</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Product -->

                        <!-- Product -->
                        <div class="col-xl-2 col-lg-3 col-sm-6 my-3">
                            <div class="col-12 bg-white text-center h-100 product-item">
                                <div class="row h-100">
                                    <div class="col-12 p-0 mb-3">
                                        <a href="product.html">
                                            <img src="images/image-4.jpg" class="img-fluid">
                                        </a>
                                    </div>
                                    <div class="col-12 mb-3">
                                        <a href="product.html" class="product-name">Dell Alienware Area 51</a>
                                    </div>
                                    <div class="col-12 mb-3">
                                        <span class="product-price">
                                            $4,500
                                        </span>
                                    </div>
                                    <div class="col-12 mb-3 align-self-end">
                                        <button class="btn btn-outline-dark" type="button"><i
                                                class="fas fa-cart-plus mr-2"></i>Add to cart</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Product -->

                        <!-- Product -->
                        <div class="col-xl-2 col-lg-3 col-sm-6 my-3">
                            <div class="col-12 bg-white text-center h-100 product-item">
                                <div class="row h-100">
                                    <div class="col-12 p-0 mb-3">
                                        <a href="product.html">
                                            <img src="images/image-1.jpg" class="img-fluid">
                                        </a>
                                    </div>
                                    <div class="col-12 mb-3">
                                        <a href="product.html" class="product-name">Sony Alpha DSLR Camera</a>
                                    </div>
                                    <div class="col-12 mb-3">
                                        <span class="product-price-old">
                                            $500
                                        </span>
                                        <br>
                                        <span class="product-price">
                                            $500
                                        </span>
                                    </div>
                                    <div class="col-12 mb-3 align-self-end">
                                        <button class="btn btn-outline-dark" type="button"><i
                                                class="fas fa-cart-plus mr-2"></i>Add to cart</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Product -->

                        <!-- Product -->
                        <div class="col-xl-2 col-lg-3 col-sm-6 my-3">
                            <div class="col-12 bg-white text-center h-100 product-item">
                                <div class="row h-100">
                                    <div class="col-12 p-0 mb-3">
                                        <a href="product.html">
                                            <img src="images/image-2.jpg" class="img-fluid">
                                        </a>
                                    </div>
                                    <div class="col-12 mb-3">
                                        <a href="product.html" class="product-name">Optoma 4K HDR Projector</a>
                                    </div>
                                    <div class="col-12 mb-3">
                                        <span class="product-price">
                                            $1,500
                                        </span>
                                    </div>
                                    <div class="col-12 mb-3 align-self-end">
                                        <button class="btn btn-outline-dark" type="button"><i
                                                class="fas fa-cart-plus mr-2"></i>Add to cart</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Product -->

                        <!-- Product -->
                        <div class="col-xl-2 col-lg-3 col-sm-6 my-3">
                            <div class="col-12 bg-white text-center h-100 product-item">
                                <div class="row h-100">
                                    <div class="col-12 p-0 mb-3">
                                        <a href="product.html">
                                            <img src="images/image-3.jpg" class="img-fluid">
                                        </a>
                                    </div>
                                    <div class="col-12 mb-3">
                                        <a href="product.html" class="product-name">HP Envy Specter 360</a>
                                    </div>
                                    <div class="col-12 mb-3">
                                        <div class="product-price-old">
                                            $2,800
                                        </div>
                                        <span class="product-price">
                                            $2,500
                                        </span>
                                    </div>
                                    <div class="col-12 mb-3 align-self-end">
                                        <button class="btn btn-outline-dark" type="button"><i
                                                class="fas fa-cart-plus mr-2"></i>Add to cart</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Product -->

                        <!-- Product -->
                        <div class="col-xl-2 col-lg-3 col-sm-6 my-3">
                            <div class="col-12 bg-white text-center h-100 product-item">
                                <div class="row h-100">
                                    <div class="col-12 p-0 mb-3">
                                        <a href="product.html">
                                            <img src="images/image-4.jpg" class="img-fluid">
                                        </a>
                                    </div>
                                    <div class="col-12 mb-3">
                                        <a href="product.html" class="product-name">Dell Alienware Area 51</a>
                                    </div>
                                    <div class="col-12 mb-3">
                                        <span class="product-price">
                                            $4,500
                                        </span>
                                    </div>
                                    <div class="col-12 mb-3 align-self-end">
                                        <button class="btn btn-outline-dark" type="button"><i
                                                class="fas fa-cart-plus mr-2"></i>Add to cart</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Product -->

                        <!-- Product -->
                        <div class="col-xl-2 col-lg-3 col-sm-6 my-3">
                            <div class="col-12 bg-white text-center h-100 product-item">
                                <div class="row h-100">
                                    <div class="col-12 p-0 mb-3">
                                        <a href="product.html">
                                            <img src="images/image-3.jpg" class="img-fluid">
                                        </a>
                                    </div>
                                    <div class="col-12 mb-3">
                                        <a href="product.html" class="product-name">HP Envy Specter 360</a>
                                    </div>
                                    <div class="col-12 mb-3">
                                        <div class="product-price-old">
                                            $2,800
                                        </div>
                                        <span class="product-price">
                                            $2,500
                                        </span>
                                    </div>
                                    <div class="col-12 mb-3 align-self-end">
                                        <button class="btn btn-outline-dark" type="button"><i
                                                class="fas fa-cart-plus mr-2"></i>Add to cart</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Product -->

                        <!-- Product -->
                        <div class="col-xl-2 col-lg-3 col-sm-6 my-3">
                            <div class="col-12 bg-white text-center h-100 product-item">
                                <div class="row h-100">
                                    <div class="col-12 p-0 mb-3">
                                        <a href="product.html">
                                            <img src="images/image-4.jpg" class="img-fluid">
                                        </a>
                                    </div>
                                    <div class="col-12 mb-3">
                                        <a href="product.html" class="product-name">Dell Alienware Area 51</a>
                                    </div>
                                    <div class="col-12 mb-3">
                                        <span class="product-price">
                                            $4,500
                                        </span>
                                    </div>
                                    <div class="col-12 mb-3 align-self-end">
                                        <button class="btn btn-outline-dark" type="button"><i
                                                class="fas fa-cart-plus mr-2"></i>Add to cart</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Product -->

                        <!-- Product -->
                        <div class="col-xl-2 col-lg-3 col-sm-6 my-3">
                            <div class="col-12 bg-white text-center h-100 product-item">
                                <div class="row h-100">
                                    <div class="col-12 p-0 mb-3">
                                        <a href="product.html">
                                            <img src="images/image-1.jpg" class="img-fluid">
                                        </a>
                                    </div>
                                    <div class="col-12 mb-3">
                                        <a href="product.html" class="product-name">Sony Alpha DSLR Camera</a>
                                    </div>
                                    <div class="col-12 mb-3">
                                        <span class="product-price-old">
                                            $500
                                        </span>
                                        <br>
                                        <span class="product-price">
                                            $500
                                        </span>
                                    </div>
                                    <div class="col-12 mb-3 align-self-end">
                                        <button class="btn btn-outline-dark" type="button"><i
                                                class="fas fa-cart-plus mr-2"></i>Add to cart</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Product -->

                        <!-- Product -->
                        <div class="col-xl-2 col-lg-3 col-sm-6 my-3">
                            <div class="col-12 bg-white text-center h-100 product-item">
                                <div class="row h-100">
                                    <div class="col-12 p-0 mb-3">
                                        <a href="product.html">
                                            <img src="images/image-2.jpg" class="img-fluid">
                                        </a>
                                    </div>
                                    <div class="col-12 mb-3">
                                        <a href="product.html" class="product-name">Optoma 4K HDR Projector</a>
                                    </div>
                                    <div class="col-12 mb-3">
                                        <span class="product-price">
                                            $1,500
                                        </span>
                                    </div>
                                    <div class="col-12 mb-3 align-self-end">
                                        <button class="btn btn-outline-dark" type="button"><i
                                                class="fas fa-cart-plus mr-2"></i>Add to cart</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Product -->

                        <!-- Product -->
                        <div class="col-xl-2 col-lg-3 col-sm-6 my-3">
                            <div class="col-12 bg-white text-center h-100 product-item">
                                <div class="row h-100">
                                    <div class="col-12 p-0 mb-3">
                                        <a href="product.html">
                                            <img src="images/image-3.jpg" class="img-fluid">
                                        </a>
                                    </div>
                                    <div class="col-12 mb-3">
                                        <a href="product.html" class="product-name">HP Envy Specter 360</a>
                                    </div>
                                    <div class="col-12 mb-3">
                                        <div class="product-price-old">
                                            $2,800
                                        </div>
                                        <span class="product-price">
                                            $2,500
                                        </span>
                                    </div>
                                    <div class="col-12 mb-3 align-self-end">
                                        <button class="btn btn-outline-dark" type="button"><i
                                                class="fas fa-cart-plus mr-2"></i>Add to cart</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Product -->

                        <!-- Product -->
                        <div class="col-xl-2 col-lg-3 col-sm-6 my-3">
                            <div class="col-12 bg-white text-center h-100 product-item">
                                <div class="row h-100">
                                    <div class="col-12 p-0 mb-3">
                                        <a href="product.html">
                                            <img src="images/image-4.jpg" class="img-fluid">
                                        </a>
                                    </div>
                                    <div class="col-12 mb-3">
                                        <a href="product.html" class="product-name">Dell Alienware Area 51</a>
                                    </div>
                                    <div class="col-12 mb-3">
                                        <span class="product-price">
                                            $4,500
                                        </span>
                                    </div>
                                    <div class="col-12 mb-3 align-self-end">
                                        <button class="btn btn-outline-dark" type="button"><i
                                                class="fas fa-cart-plus mr-2"></i>Add to cart</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Product -->

                        <!-- Product -->
                        <div class="col-xl-2 col-lg-3 col-sm-6 my-3">
                            <div class="col-12 bg-white text-center h-100 product-item">
                                <div class="row h-100">
                                    <div class="col-12 p-0 mb-3">
                                        <a href="product.html">
                                            <img src="images/image-3.jpg" class="img-fluid">
                                        </a>
                                    </div>
                                    <div class="col-12 mb-3">
                                        <a href="product.html" class="product-name">HP Envy Specter 360</a>
                                    </div>
                                    <div class="col-12 mb-3">
                                        <div class="product-price-old">
                                            $2,800
                                        </div>
                                        <span class="product-price">
                                            $2,500
                                        </span>
                                    </div>
                                    <div class="col-12 mb-3 align-self-end">
                                        <button class="btn btn-outline-dark" type="button"><i
                                                class="fas fa-cart-plus mr-2"></i>Add to cart</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Product -->

                        <!-- Product -->
                        <div class="col-xl-2 col-lg-3 col-sm-6 my-3">
                            <div class="col-12 bg-white text-center h-100 product-item">
                                <div class="row h-100">
                                    <div class="col-12 p-0 mb-3">
                                        <a href="product.html">
                                            <img src="images/image-4.jpg" class="img-fluid">
                                        </a>
                                    </div>
                                    <div class="col-12 mb-3">
                                        <a href="product.html" class="product-name">Dell Alienware Area 51</a>
                                    </div>
                                    <div class="col-12 mb-3">
                                        <span class="product-price">
                                            $4,500
                                        </span>
                                    </div>
                                    <div class="col-12 mb-3 align-self-end">
                                        <button class="btn btn-outline-dark" type="button"><i
                                                class="fas fa-cart-plus mr-2"></i>Add to cart</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Product -->

                    </div>
                </div>
            </div>
        </div>
        <!-- Category Products -->

        <div class="col-12">
            <nav aria-label="Page navigation example">
                <ul class="pagination justify-content-center">
                    <li class="page-item disabled">
                        <a class="page-link" href="#" tabindex="-1" aria-disabled="true"><i
                                class="fas fa-long-arrow-alt-left"></i></a>
                    </li>
                    <li class="page-item"><a class="page-link" href="#">1</a></li>
                    <li class="page-item active" aria-current="page">
                        <a class="page-link" href="#">2 <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                    <li class="page-item">
                        <a class="page-link" href="#"><i class="fas fa-long-arrow-alt-right"></i></a>
                    </li>
                </ul>
            </nav>
        </div>

    </main>
    <!-- Main Content -->
</div> --}}

@endsection
