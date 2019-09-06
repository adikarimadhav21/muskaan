<!-- start section -->
<section class="section white-backgorund">
	<div class="container">
		<div class="heading">
			<h1><?php echo $FetchProductDataByURL[0]->ProductName; ?></h1>
		</div>

		<div class="images">
			<div class="row">
				<div class="col-xs-12 col-sm-4 col-md-4">
					<img src="<?php echo base_url().'application/assets/uploads/'.$FetchProductDataByURL[0]->ProductImage1; ?>" title="MUSKAAN" class="img-thumbnail product_img" />
				</div>
				<div class="col-xs-12 col-sm-4 col-md-4">
					<img src="<?php echo base_url().'application/assets/uploads/'.$FetchProductDataByURL[0]->ProductImage2; ?>" title="MUSKAAN" class="img-thumbnail product_img" />
				</div>
				<div class="col-xs-12 col-sm-4 col-md-4">
					<img src="<?php echo base_url().'application/assets/uploads/'.$FetchProductDataByURL[0]->ProductImage3; ?>" title="MUSKAAN" class="img-thumbnail product_img" />
				</div>
			</div>
		</div>

		<div class="information">
			<dl class="dl-horizontal">
				<dt>Dimensions</dt>
				<dd>120 x 75 x 90 cm</dd>
				<dt>Colors</dt>
				<dd>white, black, brown</dd>
				<dt>Materials</dt>
				<dd>cotton</dd>
			</dl>
		</div>





	</div><!-- end container -->
</section>
<!-- end section -->
