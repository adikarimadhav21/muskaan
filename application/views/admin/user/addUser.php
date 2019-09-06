<div id="page-wrapper">

            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                            Add User
                        </h1>
                    </div>
                </div>
                <!-- /.row -->

                <div class="row">
                    <div class="col-lg-12">

                        <form role="form" action="<?php echo base_url(); ?>AdminDashboard/addNewUser" method="POST" enctype="multipart/form-data" >
                            
                            <div class="form-group">
                                <label>Full Name</label>
                                <input type="text" class="form-control" name="name">
                            </div>
                            
                            <div class="form-group">
                                <label>Address</label>
                                <input type="text" class="form-control" name="address">
                            </div>
                            
                            <div class="form-group">
                                <label>Phone</label>
                                <input type="text" class="form-control" name="phone">
                            </div>
                                                                                    
                            <div class="form-group">
                                <label>Email</label>
                                <input type="email" class="form-control" name="email">
                            </div>

                            <div class="form-group">
                                <label>Photo</label>
                                <input type="file" class="form-control" name="photo">
                            </div>

                            <div class="form-group">
                                <label>Username</label>
                                <input type="text" class="form-control" name="username">
                            </div>

                            <div class="form-group">
                                <label>Password</label>
                                <input type="password" class="form-control" name="password">
                            </div>
                            <div class="form-group">
                                <label>User Status</labell>
                                <select class="form-control" name="userStatus">
                                <option value="1">Active</value>
                                <option value="0">Not Active</value>
                                </select>
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