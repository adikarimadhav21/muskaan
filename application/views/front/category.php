<section class="site-latest-products">
	<div class="container">
		<div class="heading">
			<h1><?php echo $AllCategoryData[0]->CategoryName; ?></h1>
		</div>
		<div class="row">
			<?php
			foreach ($FetchAllProducts->result() as $product) {
				?>

				<div class="col-xs-12 col-sm-6 col-md-6 col-lg-3">
					<div class="product">
						<div class="product-heading">
							<img src="<?php echo base_url().'application/assets/uploads/'.$product->ProductImage1; ?>" class="img-thumbnail"/>
							<h2><?php echo $product->ProductName;?></h2>
							<div class="button-link"><a href="<?php echo base_url().'Product/'.$product->URL; ?>" class="btn btn-details">Details</a></div>
						</div>
					</div>
				</div>
				<?php
			}
			?>
		</div>
	</div>
</section>
