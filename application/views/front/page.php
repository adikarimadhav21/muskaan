<section class="main-content">
	<div class="container">
		<div class="heading">
			<h1><?php echo $AllPageData[0]->PageTitle; ?></h1>
		</div>

		<div class="page-content">
			<?php echo $AllPageData[0]->PageContent; ?>
		</div>

		<!-- <div class="dealers-info">
			<div class="row">
				<?php 
				foreach($FetchAllPosts->result() as $postData) { ?>
				<div class="col-xs-12 col-sm-6 col-md-3">
					<div class="dealer-post">
						<address>
							<span>Manakamana Kagaj Udhyog </span><br> 
							<i class="fas fa-map-marker-alt"></i> Sitapaila, Kathmandu<br>
							<i class="fas fa-phone-square"></i> 01-4039611/4033026<br>
							<i class="fas fa-envelope"></i> <a href="mailto:muskaan@gmail.com">muskaan@gmail.com</a><br />
							<a href="#"><i class="fab fa-facebook-square"></i></a>
						</address>
					</div>
				</div>
				<?php 
			}
			?>
		</div>
	</div>
 -->

	<div class="dealers-info">
			<div class="row">
				<?php 
				if($AllPageData[0]->URL == "our-dealers") { 

				foreach($FetchAllDealers->result() as $dealerData) { ?>
				<div class="col-xs-12 col-sm-6 col-md-3">
					<div class="dealer-post">
						<address>
							<span><?php echo $dealerData->Name; ?> </span><br> 
							<?php echo $dealerData->Address; ?><br>
							<?php echo $dealerData->Phone; ?><br>
							<?php if(!empty($dealerData->Email)) { echo '<a href="'.$dealerData->Email.'">'.$dealerData->Email.'</a><br />';} ?>
							<?php if(!empty($dealerData->Facebook)) {echo '<a href="'.prep_url($dealerData->Facebook).'"><i class="fab fa-facebook-square"></i></a>';} ?>
						</address>
					</div>
				</div>

				<?php 
				}
			}
			 ?>
				
		</div>
	</div>


</div>
</section>


