<section class="site-slider">
	<div id="carouselExampleIndicators" class="carousel slide carousel-fade" data-ride="carousel">
		<ol class="carousel-indicators">
			<?php
			$i=0;
			foreach ($AllActiveSlides->result() as $slide) {
			?>
			<li data-target="#carouselExampleIndicators" data-slide-to="<?php echo $i; ?>" class="<?php if($i==0) echo "active"; ?>"></li>
			<?php
			$i++;
			}
			?>
		</ol>
		<div class="carousel-inner">
			<?php
			$i=0;
			foreach ($AllActiveSlides->result() as $slide) {
				?>
				<div class="carousel-item <?php if($i==0) {echo "active";}?>">
					<img class="d-block w-100" src="<?php echo base_url(); ?>application/assets/uploads/<?php echo $slide->SlideImage; ?>"
						 alt="First slide">
				</div>

				<?php
				$i++;
			}
			?>

		</div>
		<a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
			<span class="carousel-control-prev-icon" aria-hidden="true"></span>
			<span class="sr-only">Previous</span>
		</a>
		<a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
			<span class="carousel-control-next-icon" aria-hidden="true"></span>
			<span class="sr-only">Next</span>
		</a>
	</div>
</section>
