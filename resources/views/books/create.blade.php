<!DOCTYPE html>
<html>
<head>
    <title>Add Book</title>
</head>
<body>
    <h1>Add New Book</h1>

    <form action="{{ route('books.store') }}" method="POST">
        @csrf
        <p>Title: <input type="text" name="title"></p>
        <p>Author: <input type="text" name="author"></p>
        <p>Publisher: <input type="text" name="publisher"></p>
        <p>Informasi: <input type="text" name="informasi"></p>
        <p>Year: <input type="text" name="year"></p>

        <button type="submit">Save</button>
    </form>

    <a href="{{ route('books.index') }}">Back</a>
</body>
</html>
