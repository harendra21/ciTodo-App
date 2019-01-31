<!DOCTYPE html>
<html>
<head>
	<title>Crud App</title>
	<link rel="stylesheet" type="text/css" href="<?= base_url('assets/css/bootstrap.min.css'); ?>">
</head>
<body>
	<div class="container">

		<?php if (!empty($this->session->flashdata('formResp'))) {
			formResp($this->session->flashdata('formResp'));
		} ?>

		<div class="row">
			<div class="col-md-6">
				<form class="form-group" method="POST">
					<label>Name : </label>
					<input type="text" name="userName" class="form-control">
					<label>Email : </label>
					<input type="email" name="userEmail" class="form-control">
					<label>Phone : </label>
					<input type="text" name="userPhone" class="form-control">
					<div class="row">
						<div class="col-xs-12 text-right">
							<input type="submit" name="submit" class="btn btn-primary btn-sm">
						</div>
					</div>	
				</form>
			</div>
			<div class="col-md-6">
				
				<table class="table">
					<thead>
						<tr>
							<th>S.No.</th>
							<th>Name</th>
							<th>Email</th>
							<th>Phone</th>
						</tr>
					</thead>
					<tbody>
						
						<?php if (!empty($users)) { $i = 1;
							foreach ($users as $user) { ?>
								<tr>
									<td><?= $i ?></td>
									<td><?= $user->user_name ?></td>
									<td><?= $user->user_email ?></td>
									<td><?= $user->user_phone ?></td>
								</tr>
							<?php $i++; }
						} ?>
						
					</tbody>
				</table>
			</div>
		</div>

	</div>
</body>
</html>