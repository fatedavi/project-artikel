@extends('././layouts.app')

@section('content')
    <div class="bg-white p-6 rounded shadow">
        <h1 class="text-2xl font-bold mb-4">Detail Buku</h1>

        <p><strong>Judul:</strong> {{ $book->title }}</p>
        <p><strong>Penulis:</strong> {{ $book->author }}</p>
        <p><strong>Penerbit:</strong> {{ $book->publisher }}</p>
        <p><strong>Tahun:</strong> {{ $book->year }}</p>

        <div class="mt-6 flex items-center gap-4">
            <a href="{{ route('pinjam.index') }}" class="text-blue-600 hover:underline">Kembali ke daftar buku</a>

            <form action="{{ route('pinjam.store') }}" method="POST">
                @csrf
                <input type="hidden" name="book_id" value="{{ $book->id }}">
                <button type="submit" class="bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700">
                    Pinjam Buku
                </button>
            </form>
        </div>
    </div>
@endsection
