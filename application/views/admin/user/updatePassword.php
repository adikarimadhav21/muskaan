<div id="page-wrapper">

            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                            Update Password
                        </h1>
                    </div>
                </div>
                <!-- /.row -->

                <div class="row">
                    <div class="col-lg-12">

                        <form role="form" action="<?php echo base_url().'AdminDashboard/submitUpdatedPassword/'. $userArray[0]->id ?>" method="POST" enctype="multipart/form-data">
                            
                            <div class="form-group">
                                <label>UserName</label>
                                <input type="text" class="form-control" value="<?php echo $userArray[0]->UserName; ?>" disabled>
                            </div>

                           <div class="form-group">
                                <label>Set New Password</label>
                                <input type="password" class="form-control" name="password">
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