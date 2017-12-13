<!DOCTYPE html>
<html>
<head>
	<title>Dashboard Latihan</title>
	<link rel="stylesheet" type="text/css" href="<?= asset('bootstrap/css/bootstrap.css') ?>">
	<style>
		.tocenter{
			text-align: center;
		}
	</style>
</head>
<body>
	<div class="container">
		<div class="row">
			<div class="page-header">
				<h2>Display Detail Users</h2>
			</div>
		</div>

		<div class="row">
			<div class="col-md-12">
				<table class="table table-bordered">
					<tbody>
						<tr>
							<td colspan="2" class="tocenter"><b>Detail User</b></td>
						</tr>
						<tr>
							<td>Username</td>
							<td>{{ $user->usr_username }}</td>
						</tr>
						<tr>
							<td>Password</td>
							<td>{{ $user->usr_password }}</td>
						</tr>
						<tr>
							<td>Nama Lengkap</td>
							<td>{{ $user->usr_name }}</td>
						</tr>
						<tr>
							<td>Email</td>
							<td>{{ $user->usr_email }}</td>
						</tr>
						<tr>
							<td>Telepon</td>
							<td>{{ $user->usr_phone }}</td>
						</tr>						
					</tbody>
				</table>
				<p>Anda Yakin ingin hapus data ini?</p>
				<form action="/user/{{ $user->usr_username }}" method="POST">
					{{ method_field('DELETE') }}
					{!! csrf_field() !!}
					<input type="hidden" name="_token" value="{{ csrf_token() }}">
					<input type="hidden" name="username" value="{{ $user->usr_username }}">
					<button class="btn btn-lg btn-danger">Ya, Hapus Data Ini</button><a href="/user" class="btn btn-lg btn-info">Kembali Ke Data User</a>
				</form>
			</div>
		</div>
	</div>
	<script src="<?= asset('bootstrap/js/jquery.js') ?>"></script>
	<script src="<?= asset('bootstrap/js/bootstrap.js') ?>"></script>
</body>
</html>