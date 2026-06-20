<!DOCTYPE html>
<html>
<head>
    <title>Add Borrow</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>

<div class="container mt-5">

    <div class="card shadow">

        <div class="card-header bg-success text-white">

            <h3>Add Borrow Record</h3>

        </div>

        <div class="card-body">

            <form action="/borrows" method="POST">

                @csrf

                <div class="mb-3">
                    <label>Student Name</label>
                    <input type="text" name="student_name" class="form-control">
                </div>

                <div class="mb-3">
                    <label>Student Code</label>
                    <input type="text" name="student_code" class="form-control">
                </div>

                <div class="mb-3">
                    <label>Book</label>

                    <select name="book_id" class="form-control">

                        @foreach($books as $book)

                        <option value="{{ $book->id }}">
                            {{ $book->title }}
                        </option>

                        @endforeach

                    </select>

                </div>

                <div class="mb-3">
                    <label>Borrow Date</label>
                    <input type="date" name="borrow_date" class="form-control">
                </div>

                <button class="btn btn-success">
                    Save
                </button>

            </form>

        </div>

    </div>

</div>

</body>
</html>