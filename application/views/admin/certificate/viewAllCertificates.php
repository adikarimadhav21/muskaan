<div id="page-wrapper">

	<div class="container-fluid">

		<!-- Page Heading -->
		<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header">
					View/Edit Certificates
				</h1>
			</div>
		</div>
		<!-- /.row -->

		<div class="row">
			<div class="col-lg-12">
				<div class="table-responsive">
					<a href="<?php echo base_url(); ?>AdminDashboard/addCertificate" class="btn btn-danger btn-sm page_buttom">Add New Certificate</a>
					<table class="table table-striped table-bordered">

						<tr>
							<td><strong>S.N.</strong></td>
							<td><strong>Certificate Title</strong></td>
							<td><strong>Certificate From</strong></td>
							<td><strong>Certificate Received Date</strong></td>
							<td><strong>Image</strong></td>
							<td><strong>Actions</strong></td>
						</tr>


						<?php
						$i=1;
						foreach($allcertificates->result() as $certificate)
						{


							?>
							<tr>
								<td><?php echo $certificate->id; ?></td>
								<td><?php echo $certificate->CertificateTitle; ?></td>
								<td><?php echo $certificate->CertificateFrom; ?></td>
								<td><?php echo $certificate->CertificateReceivedDate; ?></td>
								<td><img src="<?php echo base_url().'/application/assets/uploads/min/'.$certificate->CertificateImage; ?>" class="img-responsive center-block" alt="<?php echo $certificate->CertificateTitle; ?>" style="width: 50px;"></td>
								<td><a type="button" class="btn btn-sm btn-danger" href="<?php echo base_url().'AdminDashboard/updateCertificate/'.$certificate->id ?>"><i class="fa fa-edit"></i> Edit</a>
									<a type="button" class="btn btn-sm btn-danger" href="<?php echo base_url().'AdminDashboard/deleteCertificate/'.$certificate->id ?>"><i class="fa fa-trash"></i> Delete</a></td>
							</tr>
							<?php
						}

						?>


					</table>
				</div>

			</div>
		</div>
		<!-- /.row -->

	</div>
	<!-- /.container-fluid -->

</div>
<!-- /#page-wrapper -->
