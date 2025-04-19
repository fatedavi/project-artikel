@extends('layouts.app')

@section('content')
    <div class="text-center py-10">
        <h1 class="text-4xl font-bold text-gray-800">Welcome to My Laravel App</h1>
        <p class="mt-4 text-gray-600">This is the home page using TailwindCSS.</p>
        <a href="/articles" class="mt-6 inline-block bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700">
            View Articles
        </a>
    </div>
@endsection
