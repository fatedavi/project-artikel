@extends('layouts.app')

@section('content')
    <div class="text-center py-10">
        <h1 class="text-4xl font-bold text-gray-800">Welcome to My Laravel App</h1>
        <p class="mt-4 text-gray-600">This is the home page using TailwindCSS.</p>
        <a href="/pinjam" class="mt-6 inline-block bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700">
            View Articles
        </a>
    </div>
    <div class="relative">
 
      
        <!--
          Flyout menu, show/hide based on flyout menu state.
      
          Entering: "transition ease-out duration-200"
            From: "opacity-0 translate-y-1"
            To: "opacity-100 translate-y-0"
          Leaving: "transition ease-in duration-150"
            From: "opacity-100 translate-y-0"
            To: "opacity-0 translate-y-1"
        -->

@endsection
