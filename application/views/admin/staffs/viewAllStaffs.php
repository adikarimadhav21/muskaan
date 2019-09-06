<div id="page-wrapper">

	<div class="container-fluid">

		<!-- Page Heading -->
		<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header">
					View/Edit Staffs
				</h1>
			</div>
		</div>
		<!-- /.row -->

		<div class="row">
			<div class="col-lg-12">
				<div class="table-responsive">
					<a href="<?php echo base_url(); ?>AdminDashboard/addStaff" class="btn btn-danger btn-sm page_buttom">Add New Staff</a>
					<table class="table table-striped table-bordered">

						<tr>
							<td><strong>S.N.</strong></td>
							<td><strong>Name</strong></td>
							<td><strong>Designation</strong></td>
							<td><strong>Edit</strong></td>
						</tr>


						<?php
						$i=1;
						foreach($allStaffs->result() as $staff)
						{


							?>
							<tr>
								<td><?php echo $staff->id; ?></td>
								<td><?php echo $staff->Name; ?></td>
								<td><?php echo $staff->Designation; ?></td>
								<td><a type="button" class="btn btn-sm btn-danger" href="<?php echo base_url().'AdminDashboard/UpdateStaff/'.$staff->id ?>"><i class="fa fa-edit"></i> Edit</a>
									<a type="button" class="btn btn-sm btn-danger" href="<?php echo base_url().'AdminDashboard/DeleteStaff/'.$staff->id ?>"><i class="fa fa-trash"></i> Delete</a></td>
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
