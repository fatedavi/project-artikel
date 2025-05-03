@extends('././layouts.app')

@section('content')
    <div class="bg-white p-6 rounded shadow">
        <h1 class="text-2xl font-bold mb-4">Pinjam Buku</h1>
        <ul>
            @foreach($book as $book)
                <li class="border-b py-2">
                    <a href="{{ route('pinjam.show', $book->id) }}" class="text-blue-600 hover:underline">
                        {{ $book->title }}
                    </a>
                    <h1>{{$book->author}}</h1>
                    <h1>{{$book->publisher}}</h1>
                    <h1>{{$book->year}}</h1>
                </li>informasi
            @endforeach
        </ul>
    </div>
@endsection
