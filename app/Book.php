<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
// use Laravel\Scout\Searchable;

class Book extends Model

{

    // use Searchable;


    // public function searchableAs()
    // {
    //     return 'original_title';
    // }

    // public function toSearchableArray()
    // {
    //     $array = $this->toArray();

    //     // Customize array...

    //     return $array;
    // }
    protected $primarykey='id';
    protected $fillable =
    [
        'book_id','best_book_id','work_id','books_Count','isbn','isbn13','authors','original_publication_year','original_title','title','language_code','average_rating','ratings_count','work_ratings_count','work_text_reviews_count','ratings_1','ratings_2','ratings_3','ratings_4','ratings_5','image_url','small_image_url',
    ];
}
