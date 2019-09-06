<div id="page-wrapper">

	<div class="container-fluid">

		<!-- Page Heading -->
		<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header">
					Update Designation
				</h1>
			</div>
		</div>
		<!-- /.row -->

		<div class="row">
			<div class="col-lg-12">


				<script type="text/javascript" src="http://ajax.aspnetcdn.com/ajax/jQuery/jquery-2.0.3.js"></script>

				<form role="form" action="<?php echo base_url().'AdminDashboard/submitUpdatedDesignation/'. $designationById[0]->id ?>" method="POST" enctype="multipart/form-data">
					<div id="itemRows">
						<div class="form-group">
							<div class="row">
								<div class="col-xs-12">
									<label>Designation</label>
									<input class="form-control" name="designation" value="<?php echo $designationById[0]->Designation; ?>">
								</div>

							</div>
						</div>
					</div>

					<input type="submit" value="Save" class="btn btn-danger btn-sm">
				</form>

			</div>
		</div>
		<!-- /.row -->

	</div>
	<!-- /.container-fluid -->

</div>
