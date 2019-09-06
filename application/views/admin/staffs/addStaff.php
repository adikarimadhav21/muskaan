<div id="page-wrapper">

	<div class="container-fluid">

		<!-- Page Heading -->
		<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header">
					Add Staff
				</h1>
			</div>
		</div>
		<!-- /.row -->

		<div class="row">
			<div class="col-lg-12">


				<script type="text/javascript" src="http://ajax.aspnetcdn.com/ajax/jQuery/jquery-2.0.3.js"></script>

				<form role="form" action="<?php echo base_url(); ?>Admindashboard/submitStaff" method="POST" enctype="multipart/form-data">
						<div class="form-group">
							<div class="row">
								<div class="col-xs-12">
									<label>Staff Name</label>
									<input type="text" class="form-control" name="name">
								</div>
								<div class="col-xs-12">
									<label>Photo</label>
									<input type="file" class="form-control" name="photo">
								</div>
								<div class="col-xs-12">
									<label>Designation</label>
									<select class="form-control" name="designation">
										<?php
										foreach($allDesignations->result() as $designation)
										{
											echo '<option value="'.$designation->id.'">'.$designation->Designation.'</option>';
										}
										?>

									</select>
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
