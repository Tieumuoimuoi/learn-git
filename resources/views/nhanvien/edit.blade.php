<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Cập nhật</title>
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

        <div class="container mt-5">
            <div class="row justify-content-center">
                <div class="col-md-8">
                    <div class="card">
                        <div class="card-header">Chỉnh sửa thông tin nhân viên</div>
                        <div class="card-body">
                            <form action="{{ route('nhanvien.update', ['id' => $nhanvien->id]) }}" method="POST">
                                @csrf
                                @method('PUT')
                                <div class="form-group">
                                    <label for="name">Tên nhân viên:</label>
                                    <input type="text" class="form-control" id="name" name="name" value="{{ $nhanvien->name }}">
                                </div>
                                <div class="form-group">
                                    <label for="age">Tuổi:</label>
                                    <input type="number" class="form-control" id="age" name="age" value="{{ $nhanvien->age }}">
                                </div>
                                <div class="form-group">
                                    <label for="address">Địa chỉ:</label>
                                    <input type="text" class="form-control" id="address" name="address" value="{{ $nhanvien->address }}">
                                </div>
                                <div class="form-group">
                                    <label for="phone">Số điện thoại:</label>
                                    <input type="text" class="form-control" id="phone" name="phone" value="{{ $nhanvien->phone }}">
                                </div>
                                <button type="submit" class="btn btn-primary">Lưu thông tin</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <script src="{{ asset('js/app.js') }}"></script>
    </body>
</html>
