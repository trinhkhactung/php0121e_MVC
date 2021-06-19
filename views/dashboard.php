<h4 class="page-title">Dashboard</h4>
<div class="col-md-12">
	<div class="card">
		<div class="card-header ">
			<h4 class="card-title">Table</h4>
			<form action="" method="POST" role="form">
				<div class="row">
					<div class="col-md-6">
						<div class="form-group">
							<input type="number" name="key" class="form-control" id="" placeholder="Input phone search">
						</div>
					</div>
					<div class="col-md-2" style="padding-top: 15px;">
						<button type="submit" name="search-phone" class="btn btn-primary">Search</button>
					</div>
				</div>
			</form>
		</div>
		<div class="card-body">
			<table id="list-students" class="table table-head-bg-success table-striped table-hover">
				<thead>
					<tr>
						<th scope="col">#</th>
						<th scope="col">Name</th>
						<th scope="col">Faculty</th>
						<th scope="col">Phone</th>
						<th scope="col">Email</th>
						<th scope="col">Action</th>
					</tr>
				</thead>
				<tbody>
					<?php  
					$stt = 0;
						foreach ($result as $key => $value) {
							$stt += 1;
					?>
						<tr>
							<td><?php echo $stt; ?></td>
							<td><?php echo $value['name']; ?></td>
							<td><?php echo $value['title']; ?></td>
							<td><?php echo $value['phone']; ?></td>
							<td><?php echo $value['email']; ?></td>
							<td>
								<a href="index.php?page=dashboard&method=destroy&id=<?php echo $value['id']; ?>" onclick="return confirm('Bạn có chắc chắn muốn xóa học viên?');" class="btn btn-danger">
									Xóa
								</a>
							</td>
						</tr>
					<?php
						}
					?>
					
				</tbody>
			</table>
		</div>
	</div>
</div>