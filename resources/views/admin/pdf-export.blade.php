<!DOCTYPE html>
<html>
<head>
	<title>PeduliDiri.com - Data User</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
	<style type="text/css">
		table tr td,
		table tr th{
			font-size: 9pt;
		}
	</style>
    {{-- <img src="{{ url('image') }}/{{ $foto }}" style="max-width: 150px; text-align: center" alt=""> --}}
    <h3>PeduliDiri.com</h3>
	<table class='table table-bordered'>
		<thead>
			<tr>
                <th>NIK</th>
                <th>Name</th>
                <th>Email</th>
                <th>Username</th>
                <th>Telp</th>
                <th>Alamat</th>
			</tr>
		</thead>
		<tbody>
            @foreach ($users as $user)
                <tr>
                    <td>{{$user->nik == null ? 'Data Kosong' : $user->nik}}</td>
                    <td>{{$user->name == null ? 'Data Kosong' : $user->name}}</td>
                    <td>{{$user->email == null ? 'Data Kosong' : $user->email}}</td>
                    <td>{{$user->username == null ? 'Data Kosong' : $user->username}}</td>
                    <td>{{$user->telp == null ? 'Data Kosong' : '0' . $user->telp}}</td>
                    <td>{{$user->alamat == null ? 'Data Kosong' : $user->alamat}}</td>
                </tr>
            @endforeach
		</tbody>
	</table>
</body>
</html>