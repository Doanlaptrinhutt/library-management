<!DOCTYPE html>
<html>
<head>
    <title>Add Book</title>
</head>
<body>

<h1>Add Book</h1>

<form action="/books" method="POST">
    @csrf

    <p>Title</p>
    <input type="text" name="title">

    <p>Author</p>
    <input type="text" name="author">

    <p>ISBN</p>
    <input type="text" name="isbn">

    <p>Quantity</p>
    <input type="number" name="quantity">

    <p>Description</p>
    <textarea name="description"></textarea>

    <br><br>

    <button type="submit">
        Save
    </button>
</form>

</body>
</html>