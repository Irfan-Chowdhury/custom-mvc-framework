<?php 

namespace App\Controllers;

use App\Models\Book;

class BookController extends Controller
{
    public function index()
    {

        $book = new Book();

        return view('book', [
            "message" => "Hello from controller",
            "books" => $book->getAll(),
        ]);
    }


    public function toAnotherRoute()
    {
        return redirect('/route2');
    }

    public function toAnotherMethod()
    {
        echo "Another page LOL";

        return;
    }
}