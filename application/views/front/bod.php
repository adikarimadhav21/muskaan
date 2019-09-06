<section class="site-bod">
	<div class="container">
		<div class="heading">
			<h1>Board of Directors</h1>
		</div>
		<div class="board-of-directors">
			<div class="row">
				<?php
					foreach($FetchAllStaffs->result() as $staffs) {
						?>
						<div class="col-xs-12 col-sm-4 col-md-4 col-lg-3">
							<div class="bod">
								<img src="<?php echo base_url().'application/assets/uploads/'.$staffs->Photo; ?>" class="rounded mx-auto d-block img-responsive img-thumbnail staff-img">
								<h3><?php echo $staffs->Name; ?></h3>
								<p><?php echo $staffs->Designation; ?></p>
							</div>
						</div>
						<?php
					}
				?>
			</div>
		</div>
	</div>
</section>
