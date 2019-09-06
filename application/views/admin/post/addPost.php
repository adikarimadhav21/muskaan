<div id="page-wrapper">

    <div class="container-fluid">

        <!-- Page Heading -->
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">
                    Add Post
                </h1>
            </div>
        </div>
        <!-- /.row -->

        <div class="row">
            <div class="col-lg-12">

                <form role="form" action="<?php echo base_url(); ?>Admindashboard/submitPost" method="POST" enctype="multipart/form-data">
                    <div id="itemRows">
                        <div class="form-group">
                            <div class="row">
                                <div class="col-xs-12">
                                    <label>Post Title</label>
                                    <input type="text" class="form-control" name="postTitle">
                                </div>

                                <div class="col-xs-12">
                                    <label>Image</label>
                                    <input type="file" class="form-control" name="photo">
                                </div>

                                <div class="col-xs-12 col-md-6">
                                    <label>Parent Title</label>
                                    <select class="form-control" name="parentId">
                                        <option value="">Select Any</option>
                                        <?php 
                                        foreach($AllPages->result() as $page)
                                        {
                                            ?>
                                            <option value="<?php echo $page->id; ?>"><?php echo $page->PageTitle; ?></option>
                                            <?php
                                        }
                                        ?>

                                    </select>
                                </div>

                                <div class="col-xs-12 col-sm-6">
                                    <label>Post Status</label>
                                    <select class="form-control" name="postStatus">
                                        <option value="1">Active</option>
                                        <option value="0">Not Active</option>
                                    </select>
                                </div>
                                
                                <div class="col-xs-12">
                                    <label>Post Content</label>
                                    <textarea class="form-control ckeditor" name="editor"></textarea>
                                </div>
                                
                            </div>
                        </div>
                    </div>

                    <input type="submit" value="Save" class="btn btn-danger btn-sm">
                </form>

            </div>
        </div>
        <!-- /.row -->

    </div>
    <!-- /.container-fluid -->

</div>
        <!-- /#page-wrapper -->