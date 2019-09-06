<nav class="navbar navbar-expand-lg navbar-light bg-blue">
	<div class="container">
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
				aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
		</button>

		<div class="collapse navbar-collapse" id="navbarSupportedContent">
			<ul class="navbar-nav mr-auto">
				<li class="nav-item"> <!--<li class="nav-item active"> -->
					<a class="nav-link" href="<?php echo base_url(); ?>">Home <span class="sr-only">(current)</span></a>
				</li>

				<?php
				foreach ($parentMenuArray as $parentMenu) {
					$checkDropDown = false;
					if (count($this->Mdl_pages->getActiveChildMenuByParentId($parentMenu->id)) > 0) {
						$checkDropDown = true;
					}
					?>
					<?php if ($checkDropDown) { ?>

						<li class="nav-item dropdown">
							<a href="<?php echo base_url() . 'Pages/' . $parentMenu->URL; ?>"
							   class="nav-link dropdown-toggle" data-toggle="dropdown"
							   data-target="<?php $parentMenu->URL; ?>"><?php echo $parentMenu->PageTitle; ?></a>
							<?php
							if ($checkDropDown) {
								?>
								<span class="caret"></span>
								<div class="dropdown-menu bg-blue" aria-labelledby="<?php $parentMenu->URL; ?>">

									<?php
									foreach ($this->Mdl_pages->getActiveChildMenuByParentId($parentMenu->id) as $childMenu) {
										?>
										<a href="<?php echo base_url() . 'Pages/' . $childMenu->URL; ?>"
										   class="dropdown-item"><?php echo $childMenu->PageTitle; ?></a>
									<?php } ?>
								</div>
							<?php } ?>
						</li>

						<?php
					} else {
						?>
						<li class="nav-item">
							<a href="<?php $pageURL = $parentMenu->PageTitle;
							echo base_url() . 'Pages/' . str_replace(" ", "-", $pageURL); ?>"
							   class="nav-link"><?php echo $parentMenu->PageTitle; ?></a>
						</li>
					<?php } ?>

					<?php
				}
				?>

				<?php

				foreach ($categoryMenuArray as $categoryName) { ?>

					<li class="nav-item">
						<a class="nav-link"
						   href="<?php echo base_url() . 'Category/' . $categoryName->URL; ?>"><?php echo $categoryName->CategoryName ?></a>
					</li>
					<?php
				}
				?>
				<li class="nav-item">
					<a href="<?php echo base_url() . 'Contacts'; ?>" class="nav-link">Contact Us</a>
				</li>
			</ul>
		</div>
	</div>
</nav>
