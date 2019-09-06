<div id="page-wrapper">

	<div class="container-fluid">

		<!-- Page Heading -->
		<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header">
					Update Post
				</h1>
			</div>
		</div>
		<!-- /.row -->

		<div class="row">
			<div class="col-lg-12">
				<div class="table-responsive">
					<a href="<?php echo base_url(); ?>AdminDashboard/addProduct" class="btn btn-danger btn-sm page_buttom">Add New Product</a>
					<table class="table table-striped table-bordered">

						<tr>
							<td><strong>S.N.</strong></td>
							<td><strong>Product Name</strong></td>
							<td><strong>Category Name</strong></td>
							<td><strong>Product Image</strong></td>
							<td><strong>Product Status</strong></td>
							<td><strong>Edit</strong></td>
						</tr>

			 			<?php 
						$i=1;
						foreach($listAllProducts->result() as $productData)
						{


							?>
							<tr>
								<td><?php echo $productData->id; ?></td>
								<td><?php echo $productData->ProductName; ?></td>
								<td>
								<?php 
								$categoryId =  $productData->CategoryId;
								foreach ($listAllCategories->result() as $categoryData) {
								 	if($categoryId == $categoryData->id) {
								 		echo $categoryData->CategoryName;
								 	}
								 } 
								?>
								</td>
								<td><img src="<?php echo base_url().'/application/assets/uploads/min/'.$productData->ProductImage1; ?>" class="img-responsive center-block" alt="<?php echo $productData->ProductImage1; ?>" style="width: 50px;"></td>
									<td><?php  if($productData->Status == 1) echo "Active"; else echo "Not Active"; ?></td>
									<td><a type="button" class="btn btn-sm btn-danger" href="<?php echo base_url().'AdminDashboard/UpdateProduct/'.$productData->id ?>"><i class="fa fa-edit"></i></a></td>
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
