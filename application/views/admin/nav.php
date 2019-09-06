   <!-- Navigation -->
    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#">Constructive Solutions</a>
        </div>
        <!-- Top Menu Items -->
        <ul class="nav navbar-right top-nav">
            <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i> 
                <?php
                        echo $currentUser[0]->Name;
                ?>
                <b class="caret"></b></a>
                <ul class="dropdown-menu">
                    <li>
                        <a href="<?php echo base_url().'AdminDashboard/viewUser/'.$currentUser[0]->id ?>"><i class="fa fa-fw fa-user"></i> Profile</a>
                    </li>
                    <li class="divider"></li>
                    <li>
                        <a href="<?php echo base_url().'Admindashboard/logout'?>"><i class="fa fa-fw fa-power-off"></i> Log Out</a>
                    </li>
                </ul>
            </li>
        </ul>
        <!-- Sidebar Menu Items - These collapse to the responsive navigation menu on small screens -->
            <div class="collapse navbar-collapse navbar-ex1-collapse">
                <ul class="nav navbar-nav side-nav">
                    <li>
                        <a href="<?php echo base_url(); ?>AdminDashboard"> Dashboard</a>
                    </li>
                    <li>
                        <a href="<?php echo base_url(); ?>AdminDashboard/addSettings">Website Settings</a>
                    </li>
                    <li>
                        <a href="javascript:;" data-toggle="collapse" data-target="#pages"> Pages <i class="fa fa-fw fa-caret-down"></i></a>
                        <ul id="pages" class="collapse">
                            <li>
                                <a href="<?php echo base_url(); ?>AdminDashboard/addPage">Add Page</a>
                            </li>
                            <li>
                                <a href="<?php echo base_url(); ?>AdminDashboard/viewAllPages">View/Edit Pages</a>
                            </li>
                        </ul>
                    </li>
					<li>
						<a href="javascript:;" data-toggle="collapse" data-target="#staffs"> Staffs <i class="fa fa-fw fa-caret-down"></i></a>
						<ul id="staffs" class="collapse">
							<li>
								<a href="<?php echo base_url(); ?>AdminDashboard/addDesignation">Add Designation</a>
							</li>
							<li>
								<a href="<?php echo base_url(); ?>AdminDashboard/viewAllDesignations">View/Edit Designations</a>
							</li>
							<li>
								<a href="<?php echo base_url(); ?>AdminDashboard/addStaff">Add Staff</a>
							</li>
							<li>
								<a href="<?php echo base_url(); ?>AdminDashboard/viewAllStaffs">View/Edit Staffs</a>
							</li>
						</ul>
					</li>
					<li>
						<a href="javascript:;" data-toggle="collapse" data-target="#dealers"> Dealers <i class="fa fa-fw fa-caret-down"></i></a>
						<ul id="dealers" class="collapse">
							<li>
								<a href="<?php echo base_url(); ?>AdminDashboard/addDealer">Add Dealer</a>
							</li>
							<li>
								<a href="<?php echo base_url(); ?>AdminDashboard/viewAllDealers">View/Edit Dealers</a>
							</li>
						</ul>
					</li>
					<li>
						<a href="javascript:;" data-toggle="collapse" data-target="#certificates"> Certificates <i class="fa fa-fw fa-caret-down"></i></a>
						<ul id="certificates" class="collapse">
							<li>
								<a href="<?php echo base_url(); ?>AdminDashboard/addCertificate">Add Certificate</a>
							</li>
							<li>
								<a href="<?php echo base_url(); ?>AdminDashboard/viewAllCertificates">View/Edit Certificates</a>
							</li>
						</ul>
					</li>
                    <li>
                        <a href="javascript:;" data-toggle="collapse" data-target="#Posts"> Posts <i class="fa fa-fw fa-caret-down"></i></a>
                        <ul id="Posts" class="collapse">
                            <li>
                                <a href="<?php echo base_url(); ?>AdminDashboard/addPost">Add Posts</a>
                            </li>
                            <li>
                                <a href="<?php echo base_url(); ?>AdminDashboard/viewAllPosts">View/Edit Posts</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="javascript:;" data-toggle="collapse" data-target="#categories"> Categories <i class="fa fa-fw fa-caret-down"></i></a>
                        <ul id="categories" class="collapse">
                            <li>
                                <a href="<?php echo base_url(); ?>AdminDashboard/addCategory">Add Category</a>
                            </li>
                            <li>
                                <a href="<?php echo base_url(); ?>AdminDashboard/viewAllCategories">View/Edit Categories</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="javascript:;" data-toggle="collapse" data-target="#products"> Products <i class="fa fa-fw fa-caret-down"></i></a>
                        <ul id="products" class="collapse">
                            <li>
                                <a href="<?php echo base_url(); ?>AdminDashboard/addProduct">Add Product</a>
                            </li>
                            <li>
                                <a href="<?php echo base_url(); ?>AdminDashboard/viewAllProducts">View/Edit Products</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="javascript:;" data-toggle="collapse" data-target="#slideshow"> Slideshow <i class="fa fa-fw fa-caret-down"></i></a>
                        <ul id="slideshow" class="collapse">
                            <li>
                                <a href="<?php echo base_url(); ?>AdminDashboard/addSlideshow">Add Slide</a>
                            </li>
                            <li>
                                <a href="<?php echo base_url(); ?>AdminDashboard/viewAllSlides">View/Edit Slides</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="javascript:;" data-toggle="collapse" data-target="#Users"> Users <i class="fa fa-fw fa-caret-down"></i></a>
                        <ul id="Users" class="collapse">
                            <li>
                                <a href="<?php echo base_url(); ?>AdminDashboard/addUser">Add User</a>
                            </li>
                            <li>
                                <a href="<?php echo base_url(); ?>AdminDashboard/viewAllUsers">View/Edit Users</a>
                            </li>
                        </ul>
                    </li>
                    
                </ul>
            </div>
            <!-- /.navbar-collapse -->
    </nav>
    <!-- /nav -->
