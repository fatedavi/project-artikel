<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Book;
use App\Models\Borrowing;

class BorrowingController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'book_id' => 'required|exists:books,id',
        ]);

        Borrowing::create([
            'user_id' => auth()->id(),
            'book_id' => $request->book_id,
            'tanggal_pinjam' => now(),
            'status' => 'dipinjam',
        ]);

        return redirect()->route('pinjam.index')->with('success', 'Buku berhasil dipinjam!');
    }
}
