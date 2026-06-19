<!DOCTYPE html>
<html>
<head>
    <title>Book List</title>
</head>
<body>

<h1>Book List</h1>

<table border="1" cellpadding="10">
    <tr>
        <th>ID</th>
        <th>Title</th>
        <th>Author</th>
        <th>ISBN</th>
        <th>Quantity</th>
        <th>Description</th>
    </tr>

    @foreach($books as $book)
    <tr>
        <td>{{ $book->id }}</td>
        <td>{{ $book->title }}</td>
        <td>{{ $book->author }}</td>
        <td>{{ $book->isbn }}</td>
        <td>{{ $book->quantity }}</td>
        <td>{{ $book->description }}</td>
    </tr>
    @endforeach

</table>

</body>
</html>