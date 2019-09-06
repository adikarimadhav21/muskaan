<section class="main-content">
	<div class="container">
		<div class="row">
			<div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
				<div class="contacts">
					<div class="left-heading">
						<h2>Contact us</h2>
					</div>
					<address>
						<span><?php echo $settingsArray[0]->CompanyName; ?></span><br>
						<i class="fas fa-map-marker-alt"></i> <?php echo $settingsArray[0]->Address; ?><br>
						<i class="fas fa-phone-square"></i> <?php echo $settingsArray[0]->Telephone; ?><br>
						<i class="fas fa-envelope"></i> <a href="mailto:<?php echo $settingsArray[0]->Email; ?>"><?php echo $settingsArray[0]->Email; ?></a><br />
						<a href="<?php echo prep_url($settingsArray[0]->Facebook); ?>"><i class="fab fa-facebook-square"></i></a>
					</address>
				</div>
				<div class="contacts">

				</div>
			</div>
			<div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
				<div class="left-heading">
					<h2>Get in Touch!</h2>
				</div>
				<!--				<form role="form" action="-->
				<?php //echo base_url(); ?><!--Contacts/" method="POST" enctype="multipart/form-data">-->
				<!--					<div class="controls">-->
				<!--						<div class="form-group">-->
				<!--							<input id="form_name" type="text" name="name" class="form-control"-->
				<!--								   placeholder="FullName *" required="required"-->
				<!--								   data-error="FullName is required.">-->
				<!--							<div class="help-block with-errors"></div>-->
				<!--						</div>-->
				<!--						<div class="form-group">-->
				<!--							<input id="form_name" type="email" name="name" class="form-control"-->
				<!--								   placeholder="Email *" required="required"-->
				<!--								   data-error="Email is required.">-->
				<!--							<div class="help-block with-errors"></div>-->
				<!--						</div>-->
				<!--						<div class="form-group">-->
				<!--							<textarea id="form_message" name="message" class="form-control"-->
				<!--									  placeholder="Message *" rows="4" required="required"-->
				<!--									  data-error="Please, leave us a message."></textarea>-->
				<!--							<div class="help-block with-errors"></div>-->
				<!--						</div>-->
				<!--						<input type="submit" class="btn btn-success btn-send" value="Send message">-->
				<!--					</div>-->
				<!--				</form>-->
				<!-- Contact form -->
				<?php if (!empty($status)) { ?>
					<div class="status <?php echo $status['type']; ?>"><?php echo $status['msg']; ?></div>
				<?php } ?>

				<form action="" method="post">
					<div class="controls">
						<div class="form-group">
							<input id="form_name" type="text" name="name" class="form-control" placeholder="FullName *"
								   value="<?php echo !empty($postData['name']) ? $postData['name'] : ''; ?>">
							<?php echo form_error('name', '<p class="field-error">', '</p>'); ?>
						</div>
						<!--						<div class="input-group">-->
						<!--							<input type="text" name="name"-->
						<!--								   value="-->
						<?php //echo !empty($postData['name']) ? $postData['name'] : ''; ?><!--"-->
						<!--								   placeholder="NAME">-->
						<!--							--><?php //echo form_error('name', '<p class="field-error">', '</p>'); ?>
						<!--						</div>-->
						<div class="form-group">
							<input id="form_name" type="email" name="email" class="form-control"
								   placeholder="Email *"
								   value="<?php echo !empty($postData['email']) ? $postData['email'] : ''; ?>">
							<?php echo form_error('email', '<p class="field-error">', '</p>'); ?>
						</div>
						<!--						<div class="input-group">-->
						<!--							<input type="email" name="email"-->
						<!--								   value="-->
						<?php //echo !empty($postData['email']) ? $postData['email'] : ''; ?><!--"-->
						<!--								   placeholder="EMAIL@ADDRESS.COM">-->
						<!--							--><?php //echo form_error('email', '<p class="field-error">', '</p>'); ?>
						<!--						</div>-->

						<div class="form-group">
								<textarea id="form_message" name="message" class="form-control" placeholder="Message *" rows="4"><?php echo !empty($postData['message'])?$postData['message']:''; ?></textarea>
							<?php echo form_error('message','<p class="field-error">','</p>'); ?>
						</div>

						<input type="submit" name="contactSubmit" class="btn btn-success btn-send" value="Send Message">
				</form>
			</div>
		</div>

</section>
<!--<section class="google_map">-->
<!--Google map-->
<!--	<div id="map-container-google-3" class="z-depth-1-half map-container-3 google_map">-->
<!--		<iframe width="100%" height="450" frameborder="0" style="border:0"-->
<!--				src="https://www.google.com/maps/embed/v1/place?q=place_id:ChIJqXDR2noZ6zkRWH3VSLgnZY8&key=..." allowfullscreen></iframe>-->
<!--	</div>-->
<!--</section>-->
