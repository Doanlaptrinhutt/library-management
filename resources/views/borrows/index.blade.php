<!DOCTYPE html>
<html>
<head>
    <title>Borrow Management</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>

<div class="container mt-5">

    <div class="card shadow">

        <div class="card-header bg-success text-white">

            <div class="d-flex justify-content-between">

                <h3>Quản lý Sinh viên Mượn sách<br></br>Nguyễn Đức Thọ - 75DTTT31013</h3>

                <a href="/borrows/create" class="btn btn-light">
                    Add Borrow
                </a>

            </div>

        </div>

        <div class="card-body">

            <table class="table table-bordered">

                <thead class="table-dark">

                    <tr>
                        <th>ID</th>
                        <th>Student Name</th>
                        <th>Student Code</th>
                        <th>Book</th>
                        <th>Borrow Date</th>
                        <th>Return Date</th>
                        <th>Status</th>
			<th>Action</th>
                    </tr>

                </thead>

                <tbody>

                    @foreach($borrows as $borrow)

                    <tr>

                        <td>{{ $borrow->id }}</td>

                        <td>{{ $borrow->student_name }}</td>

                        <td>{{ $borrow->student_code }}</td>

                        <td>{{ $borrow->book->title }}</td>

                        <td>{{ $borrow->borrow_date }}</td>

                        <td>{{ $borrow->return_date }}</td>

                        <td>{{ $borrow->status }}</td>
			<td>
    			   @if($borrow->status == 'borrowing')
         		      <form action="/borrows/{{ $borrow->id }}/return" method="POST">
            		         @csrf
           		         @method('PUT')
            		         <button class="btn btn-warning btn-sm">
                                    Return Book
            			 </button>
        		      </form>
    			   @else
        		      <span class="badge bg-success">Returned</span>
    			   @endif
			</td>

                    </tr>

                    @endforeach

                </tbody>

            </table>

        </div>

    </div>

</div>

</body>
</html>
