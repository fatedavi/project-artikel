@extends('././layouts.app')

@section('content')
    <div class="bg-white p-6 rounded shadow">
        <h1 class="text-2xl font-bold mb-4">Detail Buku</h1>

        <p><strong>Judul:</strong> {{ $book->title }}</p>
        <p><strong>Penulis:</strong> {{ $book->author }}</p>
        <p><strong>Penerbit:</strong> {{ $book->publisher }}</p>
        <p><strong>Tahun:</strong> {{ $book->year }}</p>

        <a href="{{ route('pinjam.index') }}" class="text-blue-600 hover:underline mt-4 block">Kembali ke daftar buku</a>
    </div>
@endsection
