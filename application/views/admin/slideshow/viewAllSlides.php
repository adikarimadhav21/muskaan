<div id="page-wrapper">

	<div class="container-fluid">

		<!-- Page Heading -->
		<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header">
					View/Edit Slides
				</h1>
			</div>
		</div>
		<!-- /.row -->

		<div class="row">
			<div class="col-lg-12">
				<div class="table-responsive">
					<a href="<?php echo base_url(); ?>AdminDashboard/addSlideshow" class="btn btn-danger btn-sm page_buttom">Add New Slideshow</a>
					<table class="table table-striped table-bordered">

						<tr>
							<td><strong>S.N.</strong></td>
							<td><strong>Image</strong></td>
							<td><strong>Slide Title</strong></td>
							<td><strong>Status</strong></td>
							<td><strong>Edit</strong></td>
						</tr>

						<?php 
						$i=1;
						foreach($AllSlides->result() as $slide)
						{


							?>
							<tr>
								<td><?php echo $slide->id; ?></td>
								<td>
								<img src="<?php echo base_url().'/application/assets/uploads/min/'.$slide->SlideImage; ?>" class="img-responsive center-block" alt="<?php echo $slide->SlideImage; ?>">
								</td>
								<td><?php echo $slide->Title; ?>
								</td>
									<td><?php  if($slide->Status == 1) echo "Active"; else echo "Not Active"; ?></td>
									<td><a type="button" class="btn btn-sm btn-danger" href="<?php echo base_url().'AdminDashboard/UpdateSlide/'.$slide->id ?>"><i class="fa fa-edit"></i></a></td>
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
