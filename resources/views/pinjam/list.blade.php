@extends('././layouts.app')

@section('content')
<div class="bg-white p-6 rounded shadow">
    <h1 class="text-2xl font-bold mb-4">Daftar Buku yang Kamu Pinjam</h1>

    @forelse ($borrowings as $borrowing)
        <div class="border-b py-4">
            <h2 class="text-lg font-semibold">{{ $borrowing->book->title }}</h2>
            <p>Penulis: {{ $borrowing->book->author }}</p>
            <p>Penerbit: {{ $borrowing->book->publisher }}</p>
            <p>Tahun: {{ $borrowing->book->year }}</p>
            <p>Dipinjam pada: {{ $borrowing->tanggal_pinjam }}</p>

            <form action="{{ route('pinjam.return', $borrowing->id) }}" method="POST" class="mt-2">
                @csrf
                @method('PATCH')
                <button type="submit" class="bg-green-500 hover:bg-green-700 text-white font-bold py-1 px-3 rounded">
                    Kembalikan Buku
                </button>
            </form>
        </div>
    @empty
        <p class="text-center text-gray-600">Kamu belum meminjam buku apapun.</p>
    @endforelse
</div>
@endsection
