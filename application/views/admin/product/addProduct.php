<div id="page-wrapper">

  <div class="container-fluid">

    <!-- Page Heading -->
    <div class="row">
      <div class="col-lg-12">
        <h1 class="page-header">
          Add Product
      </h1>
  </div>
</div>
<!-- /.row -->

<div class="row">
  <div class="col-lg-12">

     <form role="form" action="<?php echo base_url(); ?>Admindashboard/submitProduct" method="POST" enctype="multipart/form-data">
       <div id="itemRows">
          <div class="form-group">
             <div class="row">
                <div class="col-xs-12">
                   <label>Product Name</label>
                   <input type="text" class="form-control" name="productName">
               </div>

               <div class="col-xs-12 col-sm-4">
                   <label>Product Image 1</label>
                   <input type="file" class="form-control" name="photo1">
               </div>

               <div class="col-xs-12 col-sm-4">
                   <label>Product Image 2</label>
                   <input type="file" class="form-control" name="photo2">
               </div>

               <div class="col-xs-12 col-sm-4">
                   <label>Product Image 3</label>
                   <input type="file" class="form-control" name="photo3">
               </div>

               <div class="col-xs-12 col-sm-6">
                   <label>Category Name</label>
                   <select class="form-control" name="parent_category">
                    <?php 
                    foreach($getAllCategories->result() as $category) { ?>
                    <option value="<?php echo $category->id; ?>"><?php echo $category->CategoryName; ?></value>
                        <?php
                    }
                    ?>
                </select>
            </select>
        </div>

        <div class="col-xs-12 col-sm-6">
           <label>Status</label>
           <select class="form-control" name="status">
            <option value="1">Active</value>
                <option value="0">Not Active</value>
                </select>
            </div>

            <div class="col-xs-12" id="pageContent">
               <label>Page Content</label>
               <textarea class="form-control ckeditor" name="editor" id="ckeditor_content"></textarea>

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
