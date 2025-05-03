<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;

class PinjamController extends Controller
{
    public function index()
    {
        $book=Book::all();
        return view('pinjam.index', compact('book'));
    }
    public function show($id)
    {
        $book = Book::findOrFail($id);
        return view('pinjam.show', compact('book'));
    }
}