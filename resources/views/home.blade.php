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
                            <a href="{{url('bookview')}}">
                                <img src="{{$book->image_url}}" class="img-fluid">
                            </a>
                        </div>
                        <div class="col-12 mb-3">
                            <a href="{{url('bookview')}}" class="product-name">{{$book->original_title}}</a>
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


@endsection
