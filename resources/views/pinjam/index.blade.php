@extends('././layouts.app')

@section('content')
    <div class="bg-white p-6 rounded shadow">
        <h1 class="text-2xl font-bold mb-4">Articles</h1>
        <ul>
            @foreach($book as $book)
                <li class="border-b py-2">
                    <a href="#" class="text-blue-600 hover:underline">{{ $book->title }}</a>
                </li>
            @endforeach
        </ul>
    </div>
@endsection
