<!DOCTYPE html>
<html>
<head>
    <title>Edit Book</title>
</head>
<body>

<h1>Edit Book</h1>

<form action="/books/{{ $book->id }}" method="POST">
    @csrf
    @method('PUT')

    <p>Title</p>
    <input type="text" name="title" value="{{ $book->title }}">

    <p>Author</p>
    <input type="text" name="author" value="{{ $book->author }}">

    <p>ISBN</p>
    <input type="text" name="isbn" value="{{ $book->isbn }}">

    <p>Quantity</p>
    <input type="number" name="quantity" value="{{ $book->quantity }}">

    <p>Description</p>
    <textarea name="description">{{ $book->description }}</textarea>

    <br><br>

    <button type="submit">Update</button>
</form>

<br>

<a href="/books">Back</a>

</body>
</html>