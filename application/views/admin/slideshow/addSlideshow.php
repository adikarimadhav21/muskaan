<div id="page-wrapper">

	<div class="container-fluid">

		<!-- Page Heading -->
		<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header">
					Add Slideshow
				</h1>
			</div>
		</div>
		<!-- /.row -->

		<div class="row">
			<div class="col-lg-12">

				<form role="form" action="<?php echo base_url(); ?>Admindashboard/submitSlideshow" method="POST" enctype="multipart/form-data">
					<div id="itemRows">
						<div class="form-group">
							<div class="row">
								<div class="col-xs-12">
									<label>Image</label>
									<input type="file" class="form-control" name="photo">
								</div>

								<div class="col-xs-12">
									<label>Title</label>
									<input type="text" class="form-control" name="title">
								</div>

								<div class="col-xs-12">
									<label>Small Description</label>
									<textarea class="form-control" name="slideDesc" rows="3"></textarea>
								</div>

								<div class="col-xs-12 col-md-6">
									<label>Slide Status</label>
									<select class="form-control" name="slideStatus">
										<option value="1">Active</option>
										<option value="0">Not Active</option>
									</select>
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
        <!-- /#page-wrapper -->