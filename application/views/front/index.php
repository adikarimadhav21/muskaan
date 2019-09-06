<section class="main-content">
	<div class="container">
		<div class="heading heading-center">
			<h1>About Muskaan</h1>
		</div>

		<div class="site-content">
			<?php
			echo substr($PageData[0]->PageContent, 0, 500) . "......";
			?>
			<div class="button-read-more">
				<a href="<?php echo base_url(); ?>Pages/about-us/" class="btn btn-primary">Read More</a>
			</div>
		</div>
	</div>
</section>

<section class="site-latest-products">
	<div class="container">
		<div class="heading">
			<h1>Latest Products</h1>
		</div>
		<div class="row">
			<?php
				foreach($LatestProducts->result() as $product) {
					?>
					<div class="col-xs-12 col-sm-6 col-md-6 col-lg-3">
						<div class="product">
							<div class="product-heading">
								<img src="<?php echo base_url().'application/assets/uploads/'.$product->ProductImage1; ?>"
									 class="img-thumbnail"/>
								<h2><?php echo $product->ProductName?></h2>
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
