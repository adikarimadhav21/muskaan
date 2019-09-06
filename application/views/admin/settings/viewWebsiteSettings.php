<div id="page-wrapper">

	<div class="container-fluid">

		<!-- Page Heading -->
		<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header">
					Company Profile
				</h1>
			</div>
		</div>
		<!-- /.row -->

		<div class="row">
			<div class="col-lg-12">
				<div class="table-responsive">
					<table class="table table-striped table-bordered">
						<tr>
							<td><strong>Company Name</strong></td>
							<td><?php echo	$WebsiteSettings[0]->CompanyName; ?></td>
						</tr>
						<tr>
							<td><strong>Address</strong></td>
							<td><?php echo	$WebsiteSettings[0]->Address; ?></td>
						</tr>
						<tr>
							<td><strong>Telephone</strong></td>
							<td><?php echo	$WebsiteSettings[0]->Telephone; ?></td>
						</tr>
						<tr>
							<td><strong>Mobile</strong></td>
							<td><?php echo	$WebsiteSettings[0]->Mobile; ?></td>
						</tr>
						<tr>
							<td><strong>Email</strong></td>
							<td><a href="mailto:<?php echo	$WebsiteSettings[0]->Email; ?>"><?php echo	$WebsiteSettings[0]->Email; ?></a></td>
						</tr>
						<tr>
							<td><strong>Facebook</strong></td>
							<td><a href="<?php echo	$WebsiteSettings[0]->Facebook; ?>" target="_blank"><?php echo	$WebsiteSettings[0]->Facebook; ?></a></td>
						</tr>
						<tr>
							<td><strong>Logo</strong></td>
							<td><img src="<?php echo base_url().'application/assets/uploads/min/'.$WebsiteSettings[0]->Logo; ?>" class="img-responsive" alt="<?php echo $WebsiteSettings[0]->Logo; ?>"></td>
						</tr>
					</table>
					<a type="button" class="btn btn-sm btn-danger" href="<?php echo base_url().'AdminDashboard/EditWebsiteSettings' ?>"><i class="fa fa-edit"></i> Edit</a>
				</div>

			</div>
		</div>
		<!-- /.row -->

	</div>
	<!-- /.container-fluid -->

</div>
        <!-- /#page-wrapper -->