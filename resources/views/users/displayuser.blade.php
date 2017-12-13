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
				<a href="/json/user/{{ $user->usr_username }}" title="Json Data">Json?</a>
			</div>
		</div>
	</div>
	<script src="<?= asset('bootstrap/js/jquery.js') ?>"></script>
	<script src="<?= asset('bootstrap/js/bootstrap.js') ?>"></script>
</body>
</html>