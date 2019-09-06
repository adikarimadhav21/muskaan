<div id="page-wrapper">

            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                            Update Category
                        </h1>
                    </div>
                </div>
                <!-- /.row -->

                <div class="row">
                    <div class="col-lg-12">

                        <form role="form" action="<?php echo base_url(); ?>AdminDashboard/submitUpdatedCategory/<?php echo $CategoryById[0]->id; ?>" method="POST" enctype="multipart/form-data" >
                            
                            <div class="form-group">
                                <label>Category Name</label>
                                <input type="text" class="form-control" name="categoryName" value="<?php echo $CategoryById[0]->CategoryName; ?>">
                            </div>
                            
                            <div class="form-group">
                                <label>Status</label>
                                <select class="form-control" name="status">
                                <option value="1" <?php if($CategoryById[0]->Status == 1) {echo "selected"; } ?>>Active</option>
                                    <option value="0" <?php if($CategoryById[0]->Status == 0) {echo "selected"; } ?>>Not Active</option>
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