<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;

class PinjamController extends Controller
{
    public function index()
    {
        $books = Book::whereNotIn('id', function ($query) {
            $query->select('book_id')
                  ->from('borrowings')
                  ->where('status', 'dipinjam');
        })->get();
    
        return view('pinjam.index', compact('books'));
    }
    
    public function show($id)
    {
        $book = Book::findOrFail($id);
        return view('pinjam.show', compact('book'));
 
    }
    public function store(Request $request)
    {
        $request->validate([
            'book_id' => 'required|exists:books,id',
        ]);
    
        $book = Book::findOrFail($request->book_id);
    
        try {
            $book->pinjam(); // Panggil method dari model
            return redirect()->route('pinjam.index')->with('success', 'Buku berhasil dipinjam!');
        } catch (\Exception $e) {
            return back()->withErrors(['error' => $e->getMessage()]);
        }
    }
    public function listPinjam()
    {
        $borrowings = \App\Models\Borrowing::with('book')
            ->where('status', 'dipinjam')
            ->where('user_id', auth()->id()) // Tambahkan filter user login
            ->get();
    
        return view('pinjam.list', compact('borrowings'));
    }
    public function returnBook($id)
{
    $borrowing = \App\Models\Borrowing::where('id', $id)
        ->where('user_id', auth()->id()) // Supaya hanya pemilik pinjaman bisa kembalikan
        ->where('status', 'dipinjam')
        ->firstOrFail();

    $borrowing->update([
        'status' => 'dikembalikan',
        'tanggal_kembali' => now(),
    ]);

    return redirect()->route('pinjam.list')->with('success', 'Buku berhasil dikembalikan.');
}

    

}