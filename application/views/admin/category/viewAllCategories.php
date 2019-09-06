<div id="page-wrapper">

	<div class="container-fluid">

		<!-- Page Heading -->
		<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header">
					View/Edit Categories
				</h1>
			</div>
		</div>
		<!-- /.row -->

		<div class="row">
			<div class="col-lg-12">
				<div class="table-responsive">
					<a href="<?php echo base_url(); ?>AdminDashboard/addCategory" class="btn btn-danger btn-sm page_buttom">Add New Category</a>
					<table class="table table-striped table-bordered">

						<tr>
							<td><strong>S.N.</strong></td>
							<td><strong>Category Name</strong></td>
							<td><strong>Status</strong></td>
							<td><strong>Edit</strong></td>
						</tr>

						<?php
						foreach($allCategories->result() as $category)
						{
							?>
							<tr>
								<td><?php echo $category->id; ?></td>
								<td><?php echo $category->CategoryName; ?></td>
								<td><?php  if($category->Status == 1) echo "Active"; else echo "Not Active"; ?></td>
								<td><a type="button" class="btn btn-sm btn-danger" href="<?php echo base_url().'AdminDashboard/updateCategory/'.$category->id ?>"><i class="fa fa-edit"></i></a></td>
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
