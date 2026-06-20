<!DOCTYPE html>
<html>
<head>
    <title>Library Management</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body class="bg-light">

<div class="container mt-5">
    <div class="card shadow">
        <div class="card-header bg-primary text-white d-flex justify-content-between align-items-center">
            <h3 class="mb-0">Hệ thống Quản lý Sách - Book List<br></br>Sinh viên: Nguyễn Đức Thọ - 75DTTT31013</h3>

            <a href="/books/create" class="btn btn-light">
                Add Book
            </a>
        </div>

        <div class="card-body">

	   <form method="GET" action="/books" class="mb-3">
              <div class="input-group">
                 <input type="text"
                    name="search"
               	    class="form-control"
                    placeholder="Search by title, author or ISBN"
                    value="{{ request('search') }}">

                 <button type="submit" class="btn btn-primary">
                    Search
                 </button>

                 <a href="/books" class="btn btn-secondary">
                    Reset
                 </a>
              </div>
	    </form>
            <table class="table table-bordered table-striped table-hover">
                <thead class="table-dark">
                    <tr>
                        <th>ID</th>
                        <th>Title</th>
                        <th>Author</th>
                        <th>ISBN</th>
                        <th>Quantity</th>
                        <th>Description</th>
                        <th width="160">Action</th>
                    </tr>
                </thead>

                <tbody>
                    @foreach($books as $book)
                        <tr>
                            <td>{{ $book->id }}</td>
                            <td>{{ $book->title }}</td>
                            <td>{{ $book->author }}</td>
                            <td>{{ $book->isbn }}</td>
                            <td>{{ $book->quantity }}</td>
                            <td>{{ $book->description }}</td>
                            <td>
                                <a href="/books/{{ $book->id }}/edit" class="btn btn-warning btn-sm">
                                    Edit
                                </a>

                                <form action="/books/{{ $book->id }}" method="POST" style="display:inline-block;">
                                    @csrf
                                    @method('DELETE')

                                    <button type="submit" class="btn btn-danger btn-sm">
                                        Delete
                                    </button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>

            @if($books->count() == 0)
                <p class="text-center text-muted">No books found.</p>
            @endif
        </div>
    </div>
</div>

</body>
</html>