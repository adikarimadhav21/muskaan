<footer class="site-footer">
		<section class="footer-top">
			<div class="container">
				<div class="row">
					<div class="col-xs-12 col-sm-6 col-md-6 col-lg-3">
						<div class="footer_box">
							<h3>Our Address</h3>
							<address>
								<span><?php echo $settingsArray[0]->CompanyName; ?></span><br> 
								<i class="fas fa-map-marker-alt"></i> <?php echo $settingsArray[0]->Address; ?><br>
								<i class="fas fa-phone-square"></i> <?php echo $settingsArray[0]->Telephone; ?><br>
								<i class="fas fa-envelope"></i> <a href="mailto:<?php echo $settingsArray[0]->Email; ?>"><?php echo $settingsArray[0]->Email; ?></a><br />
								<a href="<?php echo prep_url($settingsArray[0]->Facebook); ?>"><i class="fab fa-facebook-square"></i></a>
							</address>
						</div>
					</div>
					<div class="col-xs-12 col-sm-6 col-md-6 col-lg-3">
						<div class="footer_box">
							<h3>Quick Links</h3>
							<ul>
							<?php 
							foreach($childMenuArray as $childMenu) { 
								 echo '<li><a href="'.base_url().'Pages/'.$childMenu->URL.'"> <i class="fas fa-caret-square-right"></i>'.$childMenu->PageTitle.'</a></li>';
							}
							?>
								<!-- <li><a href="#"> <i class="fas fa-caret-square-right"></i>About Us</a></li>
								<li><a href="#"><i class="fas fa-caret-square-right"></i>Our Registrations</a></li>
								<li><a href="#"><i class="fas fa-caret-square-right"></i>Our Dealers</a></li>
								<li><a href="#"><i class="fas fa-caret-square-right"></i>Contacts</a></li> -->
							</ul>
						</div>
					</div>
					<div class="col-xs-12 col-sm-6 col-md-6 col-lg-3">
						<div class="footer_box">
							<h3>Our Products</h3>
							<ul>
							<?php 
							foreach($categoryMenuArray as $categoryMenu) { 
								 echo '<li><a href="'.base_url().'Category/'.$categoryMenu->URL.'"> <i class="fas fa-caret-square-right"></i>'.$categoryMenu->CategoryName.'</a></li>';
							}
							?>
								<!-- <li><a href="#"> <i class="fas fa-caret-square-right"></i>Paper Plate</a></li>
								<li><a href="#"><i class="fas fa-caret-square-right"></i>Napkin</a></li>
								<li><a href="#"><i class="fas fa-caret-square-right"></i>Toilet Paper</a></li>
								<li><a href="#"><i class="fas fa-caret-square-right"></i>Aluminium Foil Paper</a></li>
								<li><a href="#"><i class="fas fa-caret-square-right"></i>Aluminium Foil Container</a></li> -->
							</ul>
						</div>
					</div>
					<div class="col-xs-12 col-sm-6 col-md-6 col-lg-3">
						<div class="footer_box">
							<h3>Get in touch!</h3>
							<form>
								<div class="form-group">
									<input type="text" class="form-control" id="name" placeholder="Your Name Here">
								</div>
								<div class="form-group">
									<input type="email" class="form-control" id="email" placeholder="Your Email Here">
								</div>
								<div class="form-group">
									<textarea class="form-control" id="message" rows="2" placeholder="Your Message Here"></textarea>
								</div>
								<button type="submit" class="btn btn-primary">Submit</button>
							</form>
						</div>
					</div>
				</div>
			</div>
		</section>
		<section class="footer-bottom">
			<div class="container">
				<div class="row">
					<div class="col-xs-12 col-sm-6 col-md-6">
						<p>&copy 2019 Manakamana Kagaj Udhyog </p>
					</div>
					<div class="col-xs-12 col-sm-6 col-md-6">
						<p class="foot-right">Design by: Rajesh</p>
					</div>
				</div>
			</div>
		</section>
	</footer>

	<script src="<?php echo base_url(); ?>application/assets/js/jquery-3.3.1.min.js"></script>
	<script type="text/javascript" src="<?php echo base_url(); ?>application/assets/js/bootstrap.min.js"></script>
	<script type="text/javascript">
		$(document).ready(function () {
			$('.carousel').carousel({
				interval: 2500,
				pause: 'none'
			});

			$('.carousel').carousel('cycle');
		});
	</script>  
</body>
<html>
