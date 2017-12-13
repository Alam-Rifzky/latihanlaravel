<!DOCTYPE html>
<html>
<head>
	<title>Dashboard Latihan</title>
	<link rel="stylesheet" type="text/css" href="<?= asset('bootstrap/css/bootstrap.css') ?>">
</head>
<body>
	<div class="container">
		<div class="row">
			<div class="page-header">
				<h2>Recruitment Test - Rifzky Alam</h2>
			</div>
		</div>
		<form action="/register" method="POST">
			{!! csrf_field() !!}
		<div class="row">
			<div class="col-md-12">
				<div class="form-group">
					<label>Username</label>
					<input type="text" name="username" class="form-control" required>
				</div>
				<div class="form-group">
					<label>Password</label>
					<input type="password" name="password" class="form-control" required>
				</div>
				<div class="form-group">
					<label>Nama Lengkap</label>
					<input type="text" name="namalengkap" class="form-control" required>
				</div>
				<div class="form-group">
					<label>Email</label>
					<input type="email" name="email" class="form-control" required>
				</div>
				<div class="form-group">
					<label>Telepon</label>
					<input type="text" name="telepon" class="form-control" required>
				</div>
				<button class="btn btn-lg btn-primary" style="width:100%;">Submit</button>
			</div>
		</div>
		</form>
	</div>
	<script src="<?= asset('bootstrap/js/jquery.js') ?>"></script>
	<script src="<?= asset('bootstrap/js/bootstrap.js') ?>"></script>
</body>
</html>