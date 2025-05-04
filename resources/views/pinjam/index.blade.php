<!-- resources/views/pinjam/index.blade.php -->
@extends('././layouts.app')

@section('content')
    <div class="bg-white p-6 rounded shadow">
        <h1 class="text-2xl font-bold mb-4">Pinjam Buku</h1>

        <!-- Mulai pengecekan jika ada buku -->
        @forelse($books as $book)  <!-- Jika ada buku yang tersedia -->
            <ul>
                <li class="border-b py-2">
                    <a href="{{ route('pinjam.show', $book->id) }}" class="text-blue-600 hover:underline">
                        {{ $book->title }}
                    </a>
                    <h1>{{ $book->author }}</h1>
                    <h1>{{ $book->publisher }}</h1>
                    <h1>{{ $book->year }}</h1>
                </li>
            </ul>
        @empty
            <!-- Jika tidak ada buku yang tersedia -->
            <p class="text-center text-gray-600 mt-4">Buku belum tersedia.</p>
        @endforelse
    </div>
@endsection
