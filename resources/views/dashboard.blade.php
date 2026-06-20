<!DOCTYPE html>
<html>
<head>
    <title>Library Management System</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body class="bg-light">

<div class="container mt-5">

    <div class="card shadow">

        <div class="card-header bg-primary text-white">
            <a href="/logout" class="btn btn-danger">
               Logout
            </a>
            <h2>Hệ thống Quản lý Sách <br></br>Sinh viên: Nguyễn Đức Thọ - 75DTTT31013</h2>
        </div>

        <div class="card-body">

    <div class="row text-center">

        <div class="col-md-3">
            <div class="card bg-primary text-white mb-3">
                <div class="card-body">
                    <h5>Total Books</h5>
                    <h1>{{ $totalBooks }}</h1>
                </div>
            </div>
        </div>

        <div class="col-md-3">
            <div class="card bg-success text-white mb-3">
                <div class="card-body">
                    <h5>Total Borrow Records</h5>
                    <h1>{{ $totalBorrows }}</h1>
                </div>
            </div>
        </div>

        <div class="col-md-3">
            <div class="card bg-warning text-dark mb-3">
                <div class="card-body">
                    <h5>Borrowing</h5>
                    <h1>{{ $studentsBorrowing }}</h1>
                </div>
            </div>
        </div>

        <div class="col-md-3">
            <div class="card bg-secondary text-white mb-3">
                <div class="card-body">
                    <h5>Returned</h5>
                    <h1>{{ $studentsReturned }}</h1>
                </div>
            </div>
        </div>

    </div>

    <br>

    <a href="/books" class="btn btn-primary">
        Manage Books
    </a>

    <a href="/borrows" class="btn btn-success">
        Manage Borrows
    </a>

</div>

    </div>

</div>

</body>
</html>