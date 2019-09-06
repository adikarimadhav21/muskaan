<div id="page-wrapper">

    <div class="container-fluid">

        <!-- Page Heading -->
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">
                    Update Page
                </h1>
            </div>
        </div>
        <!-- /.row -->

        <div class="row">
            <div class="col-lg-12">

                <form role="form" action="<?php echo base_url().'AdminDashboard/submitUpdatedPage/'. $PageInfoById[0]->id ?>" method="POST" enctype="multipart/form-data">
                    <div id="itemRows">
                        <div class="form-group">
                            <div class="row">
                                <div class="col-xs-12">
                                    <label>Page Title</label>
                                    <input type="text" class="form-control" name="page_title" value="<?php echo $PageInfoById[0]->PageTitle; ?>">
                                </div>

                                <div class="col-xs-12 col-sm-4">
                                    <label>Parent Page</label>
                                    <select class="form-control" name="parentId">
                                        <option value="">Select Any</option>
                                        <?php 
                                        $this->db->select('*');
                                        $this->db->from('tbl_pages');
                                        $this->db->where('ParentId', '0');
                                        $pages = $this->db->get();
                                        foreach($pages->result() as $page)
                                        {
                                            ?>
                                            <option value="<?php echo $page->id; ?>" 
                                                <?php
                                                $idToBeChecked = $PageInfoById[0]->ParentId;
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

                                    <div class="col-xs-12 col-sm-4">
                                        <label>Page Status</label>
                                        <select class="form-control" name="pageStatus">
                                        <option value="1" <?php if($PageInfoById[0]->Status == 1) {echo "selected"; } ?>>Active</option>
                                            <option value="0"<?php if($PageInfoById[0]->Status == 0) {echo "selected"; } ?>>Not Active</option>
                                        </select>
                                    </div>



                                    <div class="col-xs-12">
                                        <label>Page Content</label>
                                        <textarea class="form-control ckeditor" name="editor"><?php echo $PageInfoById[0]->PageContent; ?></textarea>
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