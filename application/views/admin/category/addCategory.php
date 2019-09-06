<div id="page-wrapper">

            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                            Add Category
                        </h1>
                    </div>
                </div>
                <!-- /.row -->

                <div class="row">
                    <div class="col-lg-12">

                        <form role="form" action="<?php echo base_url(); ?>AdminDashboard/submitCategory" method="POST" enctype="multipart/form-data" >
                            
                            <div class="form-group">
                                <label>Category Name</label>
                                <input type="text" class="form-control" name="categoryName">
                            </div>
                            
                            <div class="form-group">
                                <label>Status</label>
                                <select class="form-control" name="status">
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