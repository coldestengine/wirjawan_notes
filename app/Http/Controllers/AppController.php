<?php

namespace App\Http\Controllers;
use App\Models\Book;

use Illuminate\Http\Request;

class AppController extends Controller
{
    public function Home()
    {

        $books = Book::inRandomOrder()->take(3)->get();
        $latest_books = Book::latest()->take(4)->get();
        $random_book = Book::inRandomOrder()->first();
        return view('index', compact('books', 'latest_books', 'random_book'));
    } // End Method

    public function BookDetail(Book $book)
    {
        return view('detail', compact('book'));
    } // End Method
}
