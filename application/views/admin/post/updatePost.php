<div id="page-wrapper">

  <div class="container-fluid">

    <!-- Page Heading -->
    <div class="row">
      <div class="col-lg-12">
        <h1 class="page-header">
          Update Post
        </h1>
      </div>
    </div>
    <!-- /.row -->

    <div class="row">
      <div class="col-lg-12">
<form role="form" action="<?php echo base_url().'AdminDashboard/submitUpdatedPost/'. $PostInfoById[0]->id ?>" method="POST" enctype="multipart/form-data">
          <div id="itemRows">
            <div class="form-group">
              <div class="row">
                <div class="col-xs-12">
                  <label>Post Title</label>
                  <input type="text" class="form-control" name="postTitle" value="<?php echo $PostInfoById[0]->PostTitle?>">
                </div>

                <div class="col-xs-12">
                  <label>Image</label>
                  <img src="<?php echo base_url().'application/assets/uploads/'.$PostInfoById[0]->PostImage; ?>" class="img-thumbnail" style="max-width:100px;">
                  <input type="file" class="form-control" name="photo">
                </div>

                <div class="col-xs-12 col-md-6">
                  <label>Parent Title</label>
                  <select class="form-control" name="parentId">
                    <?php 
                    foreach($AllSubPages->result() as $page)
                    {
                      ?>
                      <option value="<?php echo $page->id; ?>" 
                        <?php
                        $idToBeChecked = $PostInfoById[0]->ParentPageId;
                        $idToBeCheckedIn = $page->id;
                        if($idToBeChecked == $idToBeCheckedIn) {
                          echo "selected";
                        }
                        ?>>

                        <?php echo $page->PageTitle; ?></option>
                        <?php
                      }
                      ?>

                    </select>
                  </div>

                  <div class="col-xs-12 col-sm-6">
                  <label>Post Status</label>
                    <select class="form-control" name="postStatus">
                      <option value="1" <?php if($PostInfoById[0]->Status == 1) {echo "selected"; } ?>>Active</option>
                      <option value="0"<?php if($PostInfoById[0]->Status == 0) {echo "selected"; } ?>>Not Active</option>
                    </select>
                  </div>


                  <div class="col-xs-12">
                    <label>Page Content</label>
                    <textarea class="form-control ckeditor" name="editor"><?php echo $PostInfoById[0]->PostContent; ?></textarea>
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