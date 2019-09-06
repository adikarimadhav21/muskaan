<div id="page-wrapper">

	<div class="container-fluid">

		<!-- Page Heading -->
		<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header">
					Add Page
				</h1>
			</div>
		</div>
		<!-- /.row -->

		<div class="row">
			<div class="col-lg-12">

				<form role="form" action="<?php echo base_url(); ?>Admindashboard/submitPage" method="POST" enctype="multipart/form-data">
					<div id="itemRows">
						<div class="form-group">
							<div class="row">
								<div class="col-xs-12">
									<label>Page Title</label>
									<input type="text" class="form-control" name="page_title">
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
											<option value="<?php echo $page->id; ?>"><?php echo $page->PageTitle; ?></option>
											<?php
										}
										?>

									</select>
								</div>
								<div class="col-xs-12 col-sm-4">
									<label>Page Status</label>
									<select class="form-control" name="pageStatus">
										<option value="1">Active</option>
										<option value="0">Not Active</option>
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
