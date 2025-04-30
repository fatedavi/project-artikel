<!DOCTYPE html>
<html>
<head>
    <title>Edit Book</title>
</head>
<body>
    <h1>Edit Book</h1>

    <form action="{{ route('books.update', $book->id) }}" method="POST">
        @csrf
        @method('PUT')

        <p>Title: <input type="text" name="title" value="{{ $book->title }}"></p>
        <p>Author: <input type="text" name="author" value="{{ $book->author }}"></p>
        <p>Publisher: <input type="text" name="publisher" value="{{ $book->publisher }}"></p>
        <p>Year: <input type="text" name="year" value="{{ $book->year }}"></p>

        <button type="submit">Update</button>
    </form>

    <a href="{{ route('books.index') }}">Back</a>
</body>
</html>
