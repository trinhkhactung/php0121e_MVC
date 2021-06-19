<?php  
	ob_start();
?>
<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
	<title>Ready Bootstrap Dashboard</title>
	<meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
	<link rel="stylesheet" href="assets/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i">
	<link rel="stylesheet" href="assets/css/ready.css">
	<link rel="stylesheet" href="assets/css/demo.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.css">
	<link rel="stylesheet" href="https://cdn.datatables.net/1.10.24/css/dataTables.bootstrap4.min.css">
</head>
<body>
	<div class="wrapper">
		<div class="main-header">
			<?php include_once 'layout/header.php'; ?>

			<?php include_once 'layout/sidebar.php'; ?>

			<div class="main-panel">
				<div class="content">
					<div class="container-fluid">
						<!-- Phần thân hiển thị nội dung website -->
						<?php  
							if (isset($_GET['page'])) {
								$page = $_GET['page'];
							}else{
								$page = 'dashboard';
							}

							switch ($page) {
								case 'dashboard':
									
									break;
								
								default:
									# code...
									break;
							}
						?>

					</div>
				</div>
			</div>
		</div>
	</div>
</body>
	<script src="assets/js/core/jquery.3.2.1.min.js"></script>
	<script src="assets/js/plugin/jquery-ui-1.12.1.custom/jquery-ui.min.js"></script>
	<script src="assets/js/core/popper.min.js"></script>
	<script src="assets/js/core/bootstrap.min.js"></script>
	<script src="assets/js/plugin/chartist/chartist.min.js"></script>
	<script src="assets/js/plugin/chartist/plugin/chartist-plugin-tooltip.min.js"></script>
	<script src="assets/js/plugin/bootstrap-notify/bootstrap-notify.min.js"></script>
	<script src="assets/js/plugin/bootstrap-toggle/bootstrap-toggle.min.js"></script>
	<script src="assets/js/plugin/jquery-mapael/jquery.mapael.min.js"></script>
	<script src="assets/js/plugin/jquery-mapael/maps/world_countries.min.js"></script>
	<script src="assets/js/plugin/chart-circle/circles.min.js"></script>
	<script src="assets/js/plugin/jquery-scrollbar/jquery.scrollbar.min.js"></script>
	<script src="https://cdn.datatables.net/1.10.24/js/jquery.dataTables.min.js"></script>
	<script src="https://cdn.datatables.net/1.10.24/js/dataTables.bootstrap4.min.js"></script>
	<script src="assets/js/ready.min.js"></script>
	<script src="assets/js/demo.js"></script>
</html>