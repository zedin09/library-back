<?php

namespace App\Services\Books\Impl;

use App\Models\Book;
use App\Services\Books\BookService;

class BookServiceImpl implements BookService
{

    public function index()
    {
        return Book::with('author')->orderBy('id', 'desc')->get();
    }
}
