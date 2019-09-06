<section class="site-latest-products">
	<div class="container">
		<div class="heading">
			<h1><?php echo $AllPageData[0]->PageTitle; ?></h1>
		</div>
		<div class="row">
			<?php
			foreach ($FetchAllCertificates->result() as $certificate) {
				?>

				<div class="col-xs-12 col-sm-6 col-md-6 col-lg-3">
					<div class="certificate">
						<div class="certificate-heading">
							<img src="<?php echo base_url().'application/assets/uploads/'.$certificate->CertificateImage; ?>" class="img-thumbnail"/>
							<h2><?php echo $certificate->CertificateTitle;?></h2>
							<p><?php echo $certificate->CertificateFrom;?></p>
							<p><?php echo $certificate->CertificateReceivedDate;?></p>
						</div>
					</div>
				</div>
				<?php
			}
			?>
		</div>
	</div>
</section>
