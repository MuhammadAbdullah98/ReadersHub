<?php

namespace App\Imports;

use App\Book;
use Maatwebsite\Excel\Concerns\ToModel;

class BookCsvImport implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new Book([
            'book_id'     => $row['0'],



    'best_book_id'    => $row['1'],



    'work_id'     => $row['2'],



    'books_count'    => $row['3'],



    'isbn'     => $row['4'],



    'isbn13'    => $row['5'],



    'authors'     => $row['6'],



    'original_publication_year'    => $row['7'],



    'original_title'     => $row['8'],



    'title'    => $row['9'],



    'language_code'     => $row['10'],



    'average_rating'    => $row['11'],



    'ratings_count'     => $row['12'],



    'work_ratings_count'    => $row['13'],



    'work_text_reviews_count'     => $row['14'],



    'ratings_1'    => $row['15'],



    'ratings_2'     => $row['16'],



    'ratings_3'    => $row['17'],



    'ratings_4'     => $row['18'],



    'ratings_5'    => $row['19'],



    'image_url'     => $row['20'],



    'small_image_url'    => $row['21'],
            ]);
    }
}
