<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes(['verify' => true]);

Route::group(['middleware' => ['verified']], function () {

    Route::get('/home', 'HomeController@index')->name('home');
    Route::get('books', 'HomeController@books')->name('books');

    Route::get('welcome', 'HomeController@welcome')->name('welcome');

    Route::get('viewprofile', 'HomeController@viewprofile')->name('viewprofile');
    Route::get('Browsebooks', 'HomeController@Browsebooks')->name('Browsebooks');
    Route::get('Blogs', 'HomeController@Blogs')->name('Blogs');
    Route::get('recommendations', 'HomeController@recommendations')->name('recommendations');
    Route::get('PopularArticles', 'HomeController@PopularArticles')->name('PopularArticles');
    Route::get('Publisherdetails ', 'HomeController@Publisherdetails')->name('Publisherdetails');
    Route::get('Recommended Authors', 'HomeController@Recommended Authors')->name('Recommended Authors');
    Route::get('Authordetails', 'HomeController@Authordetails')->name('Authordetails');
    Route::get('Blogs', 'HomeController@Blogs')->name('Blogs');
    Route::get('bookview', 'HomeController@bookview')->name('bookview');
    Route::get('Author', 'HomeController@Author')->name('Author');

    Route::get('article1', 'HomeController@article1')->name('article1');
    Route::get('article2', 'HomeController@article2')->name('article2');
    Route::get('article3', 'HomeController@article3')->name('article3');
    Route::get('article4', 'HomeController@article4')->name('article4');
    Route::get('article5', 'HomeController@article5')->name('article5');
    Route::get('article6', 'HomeController@article6')->name('article6');
    Route::get('article7', 'HomeController@article7')->name('article7');
    Route::get('article8', 'HomeController@article8')->name('article8');
    Route::get('article9', 'HomeController@article9')->name('article9');

    Route::get('bookview/{id}', ['as' => 'bookview', 'uses' => 'HomeController@bookview']);


    Route::post('/books',['as' => 'admin.importbook','uses'=> 'BookCsv@bookCsvImport']);
    Route::post('/script',['as' => 'script.run','uses'=> 'BookCsv@script']);
});


Route::get('terms', 'HomeController@terms')->name('terms');
Route::get('conditions', 'HomeController@conditions')->name('conditions');
    Route::get('privacy', 'HomeController@privacy')->name('privacy');
    Route::get('policy', 'HomeController@policy')->name('policy');




    Route::get('FAQ', 'HomeController@FAQ')->name('FAQ');
    Route::get('Help Authors', 'HomeController@Help Authors')->name('Help Authors');

    Route::get('help', 'HomeController@help')->name('help');
    Route::get('support', 'HomeController@support')->name('support');

Route::get('aboutus', 'HomeController@aboutus')->name('aboutus');
Route::get('about', 'HomeController@about')->name('about');
Route::get('contactus', 'HomeController@contactus')->name('contactus');
Route::get('contact', 'HomeController@contact')->name('contact');
Route::get('confeedback', 'HomeController@confeedback')->name('confeedback');
Route::get('/runscript', 'HomeController@runScript')->name('runscript');




Route::get('accountcreation', 'HomeController@accountcreation')->name('accountcreation');
Route::get('accountverification', 'HomeController@accountverification')->name('accountverification');
Route::get('authorsprofilehelp', 'HomeController@authorsprofilehelp')->name('authorsprofilehelp');
Route::get('wishlisthelp', 'HomeController@wishlisthelp')->name('wishlisthelp');
Route::get('recommendedauthorshelp', 'HomeController@recommendedauthorshelp')->name('recommendedauthorshelp');
Route::get('publisherhelp', 'HomeController@publisherhelp')->name('publisherhelp');
Route::get('profilehelp', 'HomeController@profilehelp')->name('profilehelp');
Route::get('Mybooklisthelp', 'HomeController@Mybooklisthelp')->name('Mybooklisthelp');
Route::get('helpbooks', 'HomeController@helpbooks')->name('helpbooks');
Route::get('HelpAuthors', 'HomeController@HelpAuthors')->name('HelpAuthors');
Route::get('helprecommendedbooks', 'HomeController@helprecommendedbooks')->name('helprecommendedbooks');
Route::get('Forgotpasswordhelp', 'HomeController@Forgotpasswordhelp')->name('Forgotpasswordhelp');


