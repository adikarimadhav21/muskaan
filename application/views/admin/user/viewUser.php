	<!-- /nav -->
	<div id="page-wrapper">

		<div class="container-fluid">

			<!-- Page Heading -->
			<div class="row">
				<div class="col-lg-12">
					<h1 class="page-header">
					<?php echo $users[0]->Name; ?>
					</h1>
				</div>
			</div>
			<!-- /.row -->

			<div class="row">
				<div class="col-lg-12">

					<div class="row">
						<div class="col-xs-12">
							<img src="<?php echo base_url().'/application/assets/uploads/min/'.$users[0]->Image; ?>" class="img-responsive" alt="<?php echo $users[0]->Image; ?>">

							<div class="table-responsive">
								<table class="table table-striped">
									<tr>
										<td width="30%"><strong>Address</strong></td>
										<td width="70%"><?php echo $users[0]->Address; ?></td>
									</tr>
									<tr>
										<td><strong>Phone</strong></td>
										<td><?php echo $users[0]->Phone; ?></td>
									</tr>
									<tr>
										<td><strong>Email</strong></td>
										<td><?php echo $users[0]->Email; ?></td>
									</tr>
									<tr>
										<td><strong>UserName</strong></td>
										<td><?php echo $users[0]->UserName; ?></td>
									</tr>
									<tr>
										<td><strong>User Status</strong></td>
										<td><?php 
											if($users[0]->UserStatus == "1") {
												echo "Active";
											} else {
												echo "Not Active";
												}; ?></td>
									</tr>
									
							<tr>
								<td>
								<a href="<?php echo base_url().'AdminDashboard/updatePassword/'.$users[0]->id ?>" class="btn btn-danger btn-sm"><i class="fa fa-key"></i> Update Password</a>
								<a href="<?php echo base_url().'AdminDashboard/UpdateUser/'.$users[0]->id ?>" class="btn btn-danger btn-sm"><i class="fa fa-edit"></i> Edit User</a>
								</td>
							</tr>

						</table>
					</div>

				</div>
			</div>

		</div>
	</div>
	<!-- /.row -->

</div>
<!-- /.container-fluid -->

</div>
        <!-- /#page-wrapper -->