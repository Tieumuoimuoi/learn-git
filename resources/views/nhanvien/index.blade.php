<h1>Danh sách nhân viên</h1>
<head>
	<title>Danh sách nhân viên</title>
	<style>
		table {
		    border-collapse: collapse;
		}

		th, td {
		    border: 1px solid black;
		}
	</style>
</head>
<form action="{{ route('nhanvien.search') }}" method="GET">
    <input type="text" name="keyword" placeholder="Nhập từ khóa tìm kiếm">
    <button type="submit">Tìm kiếm</button>
</form>
<table>
    <thead>
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Age</th>
            <th>Address</th>
            <th>Phone</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($nhanviens as $nhanvien)
            <tr>
                <td>{{ $nhanvien->id }}</td>
                <td>{{ $nhanvien->name }}</td>
                <td>{{ $nhanvien->age }}</td>
                <td>{{ $nhanvien->address }}</td>
                <td>{{ $nhanvien->phone }}</td>
                <td style="display: flex;">                    
                <form action="{{ route('nhanvien.destroy', ['id' => $nhanvien->id]) }}" method="POST">
                    <button><a href="{{ route('nhanvien.edit', ['id' => $nhanvien->id]) }}" class="btn btn-primary" style="color: black;text-decoration: none;">Sửa</a></button>
                        @csrf
                        @method('DELETE')
                    <button type="submit">Xóa</button>
                </form>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>

<a href="{{ route('nhanvien.create') }}">Thêm mới</a>
<br>
<a href="{{ route('nhanvien.refresh') }}">Quay lại trang chủ</a>


