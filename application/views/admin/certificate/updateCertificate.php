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

				<form role="form" action="<?php echo base_url(); ?>Admindashboard/submitUpdatedCertificate/<?php echo $certifiateInfoById[0]->id; ?>" method="POST" enctype="multipart/form-data">

					<div class="form-group">
						<label>Certificate Title</label>
						<input type="text" class="form-control" name="certificate_title" value="<?php echo $certifiateInfoById[0]->CertificateTitle?>">
					</div>

					<div class="form-group">
						<label>Certificate From</label>
						<input type="text" class="form-control" name="certificate_from" value="<?php echo $certifiateInfoById[0]->CertificateFrom?>">
					</div>

					<div class="form-group">
						<label>Certificate Received Date</label>
						<input class="form-control" type="date" name="certificate_received_date" value="<?php echo $certifiateInfoById[0]->CertificateReceivedDate?>">
					</div>

					<div class="form-group">
						<label>Certificate Image</label>
						<img src="<?php echo base_url().'application/assets/uploads/'.$certifiateInfoById[0]->CertificateImage; ?>" class="img-thumbnail" style="height:100px;">
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
