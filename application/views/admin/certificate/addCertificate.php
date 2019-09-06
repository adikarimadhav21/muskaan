<div id="page-wrapper">

	<div class="container-fluid">

		<!-- Page Heading -->
		<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header">
					Add Certificate
				</h1>
			</div>
		</div>
		<!-- /.row -->

		<div class="row">
			<div class="col-lg-12">

				<form role="form" action="<?php echo base_url(); ?>AdminDashboard/submitCertificate" method="POST" enctype="multipart/form-data">

					<div class="form-group">
						<label>Certificate Title</label>
						<input type="text" class="form-control" name="certificate_title">
					</div>

					<div class="form-group">
						<label>Certificate From</label>
						<input type="text" class="form-control" name="certificate_from">
					</div>

					<div class="form-group">
						<label>Certificate Received Date</label>
						<input class="form-control" type="date" name="certificate_received_date">
					</div>

					<div class="form-group">
						<label>Certificate Image</label>
						<input type="file" class="form-control" name="photo">
					</div>

					<input type="submit" class="btn btn-default" Value="Submit">
					<button type="reset" class="btn btn-default">Reset Button</button>

				</form>

			</div>
		</div>
		<!-- /.row -->

	</div>
	<!-- /.container-fluid -->

</div>
<!-- /#page-wrapper -->
