<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Thêm</title>
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    </head>
    <body>
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container">
                <a class="navbar-brand" href="#">Ứng dụng quản lý nhân viên</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav mr-auto">
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('nhanvien.index') }}">Danh sách nhân viên</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('nhanvien.create') }}">Thêm mới nhân viên</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>

        <div class="container mt-3">
            <h2>Thêm mới nhân viên</h2>
            <form method="post" action="{{ route('nhanvien.store') }}">
                @csrf
                <div class="form-group">
                    <label for="ho_ten">Họ tên</label>
                    <input type="text" class="form-control" id="ho_ten" name="name" required>
                </div>
                <div class="form-group">
                    <label for="ngay_sinh">Tuổi</label>
                    <input type="text" class="form-control" id="tuoi" name="age" required>
                </div>
                <div class="form-group">
                    <label for="dia_chi">Địa chỉ</label>
                    <input type="text" class="form-control" id="dia_chi" name="address" required>
                </div>
                <div class="form-group">
                    <label for="so_dien_thoai">Số điện thoại</label>
                    <input type="tel" class="form-control" id="so_dien_thoai" name="phone" required>
                </div>
                <button type="submit" class="btn btn-primary">Thêm mới</button>
            </form>
        </div>

        <script src="{{ asset('js/app.js') }}"></script>
    </body>
</html>
