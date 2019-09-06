<div id="page-wrapper">

	<div class="container-fluid">

		<!-- Page Heading -->
		<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header">
					Update Slideshow
				</h1>
			</div>
		</div>
		<!-- /.row -->

		<div class="row">
			<div class="col-lg-12">

				<form role="form" action="<?php echo base_url().'AdminDashboard/submitUpdatedSlide/'. $SlideInfoById[0]->id ?>" method="POST" enctype="multipart/form-data">
					<div id="itemRows">
						<div class="form-group">
							<div class="row">
								<div class="col-xs-12">
									<label>Image</label>
									<img src="<?php echo base_url().'application/assets/uploads/'.$SlideInfoById[0]->SlideImage; ?>" class="img-thumbnail thumbnail-img">
									<input type="file" class="form-control" name="photo">
								</div>

								<div class="col-xs-12">
									<label>Title</label>
									<input type="text" class="form-control" name="title" value="<?php echo $SlideInfoById[0]->Title; ?>">
								</div>

								<div class="col-xs-12">
									<label>Small Description</label>
									<textarea class="form-control" name="slideDesc" rows="3"><?php echo $SlideInfoById[0]->SmallDesc; ?></textarea>
								</div>

								<div class="col-xs-12 col-md-6">
									<label>Slide Status</label>
									<select class="form-control" name="slideStatus">
										<option value="1" <?php if($SlideInfoById[0]->Status == 1) {echo "selected"; } ?>>Active</option>
                                            <option value="0"<?php if($SlideInfoById[0]->Status == 0) {echo "selected"; } ?>>Not Active</option>
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