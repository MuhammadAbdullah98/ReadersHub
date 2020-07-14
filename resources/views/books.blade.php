@extends('layouts.app')

@section('content')
 {{-- <form action="{{route ('admin.importbook')}}" method="POST" enctype="multipart/form-data">
    @csrf
    <input type="file" name="file" accept=".csv">
    <button class="btn btn-success">Import Books Data</button>
    </form> --}}

<div class="col-12 px-0">
    <h1 style="text-align: center; padding:3%;">Suggestions</h1>

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

                        </div>
                        {{-- <div class="col-12 mb-3 align-self-end">
                            <a class="add_to_wishlist" href="#" title="Add to Wishlist"><i class="fa fa-heart-o"></i></a>
                        </div> --}}
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
