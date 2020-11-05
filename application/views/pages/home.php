<div class="container">
	<div class="row mt-3 mb-3">
		<div class="col-md-6">
			<a href="<?= base_url(); ?>crud/" class="btn btn-primary">Add Users</a>
		</div>
	</div>
	<div class="row">
		<div class="col">
			<section>
				<h4 class="card-title">List of users</h4>
				<table class="table table-hover">
					<thead class="thead-light">
						<tr>
							<th scope="col">#</th>
							<th scope="col">USERNAME</th>
							<th scope="col">STATUS</th>
							<th scope="col">ACTION</th>
						</tr>
					</thead>
					<tbody>
						<?php $i = 1 ?>
						<?php foreach ($users as $d) : ?>
							<tr>
								<th scope="row"><?= $i++; ?></th>
								<td><?= $d['username']; ?></td>
								<td><?= $d['status']; ?></td>
								<td>
									<div class="action">
										<a href="">Edit</a>
										<a href="">Delete</a>
									</div>
								</td>
							</tr>
						<?php endforeach; ?>
					</tbody>
				</table>
			</section>
		</div>
	</div>
</div>