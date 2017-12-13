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
				<h2>Display Users</h2>
			</div>
		</div>

		<div class="row">
			<div class="col-md-12">
				<table class="table table-bordered">
					<thead>
						<tr>
							<th class="tocenter">Username</th>
							<th class="tocenter">Nama Lengkap</th>
							<th class="tocenter">Email</th>
							<th class="tocenter">Telepon</th>
							<th class="tocenter">Aksi</th>
						</tr>
					</thead>
					<tbody>
						@forelse($users as $user)
						<tr>
							<td>{{ $user->usr_username }}</td>
							<td>{{ $user->usr_name }}</td>
							<td>{{ $user->usr_email }}</td>
							<td>{{ $user->usr_phone }}</td>
							<td class="tocenter">
								<a href="/user/{{ $user->usr_username }}/edit" title="Edit">Edit</a>
								||
								<a href="/user/{{ $user->usr_username }}" title="Detail">Detail</a>
								||
								<a href="/user/delete/{{ $user->usr_username }}" title="Delete">Delete</a>
							</td>
						</tr>
						@empty
						<tr>
							<td colspan="5" style="text-align: center;">Tidak Ada User yang terdaftar</td>
						</tr>
						@endforelse
					</tbody>
				</table>
				<a href="user/json" title="json" style="text-align:left;">Json?</a>
				<div class="col-md-6 col-md-offset-3">
					{{ $users->links() }}
				</div>
			</div>
		</div>
	</div>
	<script src="<?= asset('bootstrap/js/jquery.js') ?>"></script>
	<script src="<?= asset('bootstrap/js/bootstrap.js') ?>"></script>
</body>
</html>