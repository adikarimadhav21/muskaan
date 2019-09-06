<div id="page-wrapper">

            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                            Company Profile
                        </h1>
                    </div>
                </div>
                <!-- /.row -->

                <div class="row">
                    <div class="col-lg-12">

                        <form role="form" action="<?php echo base_url(); ?>AdminDashboard/UpdateWebsiteSettings" method="POST" enctype="multipart/form-data">

                           <div class="form-group">
                                <label>Company Name</label>
                                <input type="text" class="form-control" name="companyName" value="<?php echo $WebsiteSettings[0]->CompanyName; ?>">
                            </div>
							
							<div class="form-group">
                                <label>Address</label>
                                <input type="text" class="form-control" name="companyAddress" value="<?php echo $WebsiteSettings[0]->Address; ?>">
                            </div>
							
							<div class="form-group">
                                <label>Phone</label>
                                <input type="text" class="form-control" name="companyPhone" value="<?php echo $WebsiteSettings[0]->Telephone; ?>">
                            </div>
							
							<div class="form-group">
                                <label>Mobile</label>
                                <input type="text" class="form-control" name="companyMobile" value="<?php echo $WebsiteSettings[0]->Mobile; ?>">
                            </div>
							
							<div class="form-group">
                                <label>Email</label>
                                <input type="text" class="form-control" name="companyEmail" value="<?php echo $WebsiteSettings[0]->Email; ?>">
                            </div>

                            <div class="form-group">
                                <label>Facebook</label>
                                <input type="text" class="form-control" name="companyFB" value="<?php echo $WebsiteSettings[0]->Facebook; ?>">
                            </div>
							
							<div class="form-group">
                                <label>Logo</label>
                                <input type="file" class="form-control" name="photo">
                                <img src='<?php echo base_url().'application/assets/uploads/min/'.$WebsiteSettings[0]->Logo?>'>
                            </div>
							
                            <input type="submit" class="btn btn-default" Value="Submit">
                            <button type="reset" class="btn btn-default">Reset Button</button>

                        </form>

                    </div>
                </div>
                <!-- /.row -->

            </div>
            <!-- /.container-fluid -->

        </div>
        <!-- /#page-wrapper -->