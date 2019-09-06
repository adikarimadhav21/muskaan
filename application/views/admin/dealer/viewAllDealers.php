<div id="page-wrapper">

	<div class="container-fluid">

		<!-- Page Heading -->
		<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header">
					View/Edit Posts
				</h1>
			</div>
		</div>
		<!-- /.row -->

		<div class="row">
			<div class="col-lg-12">
				<div class="table-responsive">
					<a href="<?php echo base_url(); ?>AdminDashboard/addDealer" class="btn btn-danger btn-sm page_buttom">Add New Dealer</a>
					<table class="table table-striped table-bordered">

						<tr>
							<td><strong>S.N.</strong></td>
							<td><strong>Page Title</strong></td>
							<td><strong>Page Status</strong></td>
							<td><strong>Edit</strong></td>
						</tr>

						<?php 
						$i=1;
						foreach($listAllDealers->result() as $dealerData)
						{


							?>
							<tr>
								<td><?php echo $dealerData->id; ?></td>
								<td><?php echo $dealerData->Name; ?></td>
								<td><?php  if($dealerData->Status == 1) echo "Active"; else echo "Not Active"; ?></td>
								<td><a type="button" class="btn btn-sm btn-danger" href="<?php echo base_url().'AdminDashboard/UpdateDealer/'.$dealerData->id ?>"><i class="fa fa-edit"></i></a></td>
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
