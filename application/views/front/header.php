<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr"
	crossorigin="anonymous">
	<!--web fonts-->
	<link href='http://fonts.googleapis.com/css?family=Raleway:400,200,300,600,700,900' rel='stylesheet' type='text/css'>
	<link href="https://fonts.googleapis.com/css?family=Oswald:200" rel="stylesheet">

	<link rel="stylesheet" href="<?php echo base_url(); ?>application/assets/css/bootstrap.min.css">
	<link media="all" rel="stylesheet" href="<?php echo base_url(); ?>application/assets/css/style.css" />
	<title><?php
		if ($this->router->fetch_class() == 'Home') {
			echo 'Muskaan | '.$settingsArray[0]->CompanyName;
		} else if ($this->router->fetch_class() == 'Contacts') {
			echo "Contact Us";
		} else {
			echo $WebTitle[0]->WebTitle;
		}
		?></title>
</head>
<body>
	<header class="site-header">
		<div class="container">
			<div class="row">
				<div class="col-xs-12 col-sm-6 col-lg-6">
					<div class="logo">
						<img src="<?php echo base_url().'application/assets/uploads/'.$settingsArray[0]->Logo; ?>" title="MUSKAAN" class="img-responsive" />
					</div>
				</div>
				<div class="col-xs-12 col-sm-6 col-lg-6">
					<div class="right-header">
						<p>
							<i class="fas fa-map-marker-alt"></i> <?php echo $settingsArray[0]->Address; ?><br />
							<i class="fas fa-phone-square"></i> <?php echo $settingsArray[0]->Telephone; ?><br />
							<i class="fas fa-envelope"></i> <a href="mailto:<?php echo $settingsArray[0]->Email; ?>"><?php echo $settingsArray[0]->Email; ?></a><br />
							<a href="<?php echo prep_url($settingsArray[0]->Facebook); ?>" target="_blank"><i class="fab fa-facebook-square"></i></a> 
						</p>

					</div>
				</div>
			</div>
		</div>
	</header>
