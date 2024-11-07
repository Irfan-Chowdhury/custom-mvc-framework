<?php 

namespace App\Controllers;

use App\Models\Book;

class BookController extends Controller
{
    public function index()
    {

        $book = new Book();

        // return print_r($book->getAll());

        // return $this->view('profile', [
        //     "message" => "Hello from controller"
        // ]);
        return view('book', [
            "message" => "Hello from controller",
            "books" => $book->getAll(),
        ]);
    }
}