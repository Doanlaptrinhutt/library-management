<!DOCTYPE html>
<html>
<head>
    <title>Đăng nhập hệ thống</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body class="bg-light">

<div class="container mt-5">

    <div class="row justify-content-center">

        <div class="col-md-5">

            <div class="card shadow">

                <div class="card-header bg-primary text-white text-center">
                    <h3>Đăng nhập hệ thống</h3>
                    <p>Nguyễn Đức Thọ - 75DTTT31013</p>
                </div>

                <div class="card-body">

                    @if(session('error'))
                        <div class="alert alert-danger">
                            {{ session('error') }}
                        </div>
                    @endif

                    <form action="/login" method="POST">
                        @csrf

                        <div class="mb-3">
                            <label>Tài khoản</label>
                            <input type="text" name="username" class="form-control">
                        </div>

                        <div class="mb-3">
                            <label>Mật khẩu</label>
                            <input type="password" name="password" class="form-control">
                        </div>

                        <button class="btn btn-primary w-100">
                            Đăng nhập
                        </button>
                    </form>

                    <hr>

                    <p class="text-muted">
                        Demo account: admin / 123456
                    </p>

                </div>

            </div>

        </div>

    </div>

</div>

</body>
</html>
