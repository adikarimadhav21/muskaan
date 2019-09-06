<div id="page-wrapper">

    <div class="container-fluid">

        <!-- Page Heading -->
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">
                    Website Settings
                </h1>
            </div>
        </div>
        <!-- /.row -->

        <div class="row">
            <div class="col-lg-12">

                <form role="form" action="<?php echo base_url(); ?>AdminDashboard/SubmitSettings" method="POST" enctype="multipart/form-data">

                 <div class="form-group">
                    <label>Company Name</label>
                    <input type="text" class="form-control" name="companyName">
                </div>
                
                <div class="form-group">
                    <label>Address</label>
                    <input type="text" class="form-control" name="companyAddress">
                </div>
                
                <div class="form-group">
                    <label>Phone</label>
                    <input type="text" class="form-control" name="companyPhone">
                </div>
                
                <div class="form-group">
                    <label>Mobile</label>
                    <input type="text" class="form-control" name="companyMobile">
                </div>
                
                <div class="form-group">
                    <label>Email</label>
                    <input type="text" class="form-control" name="companyEmail">
                </div>

                <div class="form-group">
                    <label>Facebook</label>
                    <input type="text" class="form-control" name="companyFB">
                </div>
                
                <div class="form-group">
                    <label>Logo</label>
                    <input type="file" class="form-control" name="photo">
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