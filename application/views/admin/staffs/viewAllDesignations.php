<div id="page-wrapper">

	<div class="container-fluid">

		<!-- Page Heading -->
		<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header">
					View/Edit Desingations
				</h1>
			</div>
		</div>
		<!-- /.row -->

		<div class="row">
			<div class="col-lg-12">
				<div class="table-responsive">
					<a href="<?php echo base_url(); ?>AdminDashboard/addDesignation" class="btn btn-danger btn-sm page_buttom">Add New Designation</a>
					<table class="table table-striped table-bordered">

						<tr>
							<td><strong>S.N.</strong></td>
							<td><strong>Designation</strong></td>
							<td><strong>Edit</strong></td>
						</tr>

						<?php
						foreach($designations->result() as $designation)
						{


							?>
							<tr>
								<td><?php echo $designation->id; ?></td>
								<td><?php echo $designation->Designation; ?></td>
								<td><a type="button" class="btn btn-sm btn-danger" href="<?php echo base_url().'AdminDashboard/updateDesignation/'.$designation->id ?>"><i class="fa fa-edit"></i></a></td>
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
