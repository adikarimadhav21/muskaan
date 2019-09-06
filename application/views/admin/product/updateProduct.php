<div id="page-wrapper">

  <div class="container-fluid">

    <!-- Page Heading -->
    <div class="row">
      <div class="col-lg-12">
        <h1 class="page-header">
          Update Product
        </h1>
      </div>
    </div>
    <!-- /.row -->

    <div class="row">
      <div class="col-lg-12">

       <form role="form" action="<?php echo base_url(); ?>Admindashboard/submitUpdatedProduct/<?php echo $ProductById[0]->id; ?>" method="POST" enctype="multipart/form-data">
         <div id="itemRows">
          <div class="form-group">
           <div class="row">
            <div class="col-xs-12">
             <label>Product Name</label>
             <input type="text" class="form-control" name="productName" value="<?php echo $ProductById[0]->ProductName; ?>">
           </div>

           <div class="col-xs-12 col-sm-4">
             <label>Product Image 1</label>
             <img src="<?php echo base_url().'application/assets/uploads/'.$ProductById[0]->ProductImage1; ?>" class="img-thumbnail" style="height:100px;">
             <input type="file" class="form-control" name="photo1">
           </div>

           <div class="col-xs-12 col-sm-4">
             <label>Product Image 2</label>
             <img src="<?php echo base_url().'application/assets/uploads/'.$ProductById[0]->ProductImage2; ?>" class="img-thumbnail" style="height:100px;">
             <input type="file" class="form-control" name="photo2">
           </div>

           <div class="col-xs-12 col-sm-4">
             <label>Product Image 3</label>
             <img src="<?php echo base_url().'application/assets/uploads/'.$ProductById[0]->ProductImage3; ?>" class="img-thumbnail" style="height:100px;">
             <input type="file" class="form-control" name="photo3">
           </div>

           <div class="col-xs-12 col-sm-6">
             <label>Category Name</label>
             <select class="form-control" name="parent_category">
              <?php 
              $this->db->select('*');
              $this->db->from('tbl_category');
              $query = $this->db->get();
              foreach($query->result() as $categoryInfo)
              {
                ?>
                <option value="<?php echo $categoryInfo->id; ?>" 
                  <?php
                  $idToBeChecked = $ProductById[0]->CategoryId;
                  $idToBeCheckedIn = $categoryInfo->id;
                  if($idToBeChecked == $idToBeCheckedIn) {
                    echo "selected";
                  }
                  ?>>

                  <?php echo $categoryInfo->CategoryName; ?></option>
                  <?php
                }
                ?>
              </select>
            </select>
          </div>

          <div class="col-xs-12 col-sm-6">
           <label>Status</label>
           <select class="form-control" name="status">
             <option value="1" <?php if($ProductById[0]->Status == 1) {echo "selected"; } ?>>Active</option>
             <option value="0" <?php if($ProductById[0]->Status == 0) {echo "selected"; } ?>>Not Active</option>
           </select>
         </div>

         <div class="col-xs-12" id="pageContent">
           <label>Page Content</label>
           <textarea class="form-control ckeditor" name="editor" id="ckeditor_content"><?php echo $ProductById[0]->ProductDesc; ?></textarea>

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
