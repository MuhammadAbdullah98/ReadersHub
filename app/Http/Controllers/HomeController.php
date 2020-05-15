<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Book;
use DB;
use Auth;
use App\User;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //$this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {

        $books= Book::orderBy('id')->paginate(12);
        return view('books')->with('books',$books);
    }

    public function books()
    {
        $books= Book::orderBy('id')->paginate(12);
        return view('books')->with('books',$books);
    }
    public function cart()
    {
        return view('cart');
    }
    public function welcome()
    {
        return view('welcome');
    }
    public function contactus()
    {
        return view('contactus');
    }
    public function terms()
    {
        return view('terms');
    }
    public function aboutus()
    {
        return view('aboutus');
    }
    public function privacy()
    {
        return view('privacy');
    }
    public function recommendations()
    {
        return view('recommendations');
    }
    public function viewprofile()
    {
        $user=Auth::user();
        return view('viewprofile')->with('user',$user);
    }
    public function Blogs()
    {
        return view('Blogs');
    }

    public function Browsebooks()
    {
        return view('Browsebooks');
    }

    public function about()
    {
        return view('about');
    }
    public function contact()
    {
        return view('contact');
    }
    public function confeedback()
    {
        return view('confeedback');
    }
    public function help()
    {
        return view('help');
    }
    public function policy()
    {
        return view('policy');
    }
    public function conditions()
    {
        return view('conditions');
    }
    public function support()
    {
        return view('support');
    }
    public function PopularArticles()
    {
        return view('PopularArticles');
    }
    public function Authordetails()
    {
        return view('Authordetails');
    }
    public function Publisherdetails()
    {
        return view('Publisherdetails');
    }

    public function bookview($id)
    {
        //return "hello".$id;
        // $book = Book::find($id);
        $book =Book::where('book_id',$id) -> first();
        return view('bookview')->with('book',$book);
    }
    public function article1()
    {
        return view('article1');
    }
    public function article2()
    {
        return view('article2');
    }
    public function article3()
    {
        return view('article3');
    }
    public function article4()
    {
        return view('article4');
    }
    public function article5()
    {
        return view('article5');
    }
    public function article6()
    {
        return view('article6');
    }
    public function article7()
    {
        return view('article7');
    }
    public function article8()
    {
        return view('article8');
    }
    public function article9()
    {
        return view('article9');
    }
    public function accountcreation()
    {
        return view('accountcreation');
    }
    public function accountverification()
    {
        return view('accountverification');
    }
    public function authorsprofilehelp()
    {
        return view('authorsprofilehelp');
    }
    public function wishlisthelp()
    {
        return view('wishlisthelp');
    }
    public function recommendedauthorshelp()
    {
        return view('recommendedauthorshelp');
    }
    public function publisherhelp()
    {
        return view('publisherhelp');
    }
    public function profilehelp()
    {
        return view('profilehelp');
    }
    public function Mybooklisthelp()
    {
        return view('Mybooklisthelp');
    }
    public function helpbooks()
    {
        return view('helpbooks');
    }
    public function HelpAuthors()
    {
        return view('HelpAuthors');
    }
    public function helprecommendedbooks()
    {
        return view('helprecommendedbooks');
    }
    public function Forgotpasswordhelp()
    {
        return view('Forgotpasswordhelp');
    }
    public function Author()
    {
        return view('Author');
    }

    public function runScript(){
        // $result=app_path();
        $mybook="Othello";
        $result= shell_exec("python D:/scripts/runscript.py ".$mybook." 2>&1");
        return $result;
    }
}
