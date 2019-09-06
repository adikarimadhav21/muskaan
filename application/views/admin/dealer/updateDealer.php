<div id="page-wrapper">

    <div class="container-fluid">

        <!-- Page Heading -->
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">
                    Add Dealer
                </h1>
            </div>
        </div>
        <!-- /.row -->

        <div class="row">
            <div class="col-lg-12">

            <form role="form" action="<?php echo base_url().'AdminDashboard/submitUpdatedDealer/'. $DealerInfoById[0]->id ?>" method="POST" enctype="multipart/form-data">

                 <div class="form-group">
                    <label>Dealer Name</label>
                    <input type="text" class="form-control" name="name" value="<?php echo $DealerInfoById[0]->Name; ?>">
                </div>
                
                <div class="form-group">
                    <label>Address</label>
                    <input type="text" class="form-control" name="address" value="<?php echo $DealerInfoById[0]->Address; ?>">
                </div>
                
                <div class="form-group">
                    <label>Phone</label>
                    <input type="text" class="form-control" name="phone" value="<?php echo $DealerInfoById[0]->Phone; ?>">
                </div>
                
                <div class="form-group">
                    <label>Mobile</label>
                    <input type="text" class="form-control" name="mobile" value="<?php echo $DealerInfoById[0]->Mobile; ?>">
                </div>
                
                <div class="form-group">
                    <label>Email</label>
                    <input type="text" class="form-control" name="email" value="<?php echo $DealerInfoById[0]->Email; ?>">
                </div>

                <div class="form-group">
                    <label>Facebook</label>
                    <input type="text" class="form-control" name="facebook" value="<?php echo $DealerInfoById[0]->Facebook; ?>">
                </div>

                <div class="form-group">
                    <label>Dealer Status</label>
                    <select class="form-control" name="status">
                        <option value="1" <?php if($DealerInfoById[0]->Status == 1) {echo "selected"; } ?>>Active</option>
                        <option value="0"<?php if($DealerInfoById[0]->Status == 0) {echo "selected"; } ?>>Not Active</option>
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