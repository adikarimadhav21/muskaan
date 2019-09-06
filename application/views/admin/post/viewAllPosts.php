<div id="page-wrapper">

	<div class="container-fluid">

		<!-- Page Heading -->
		<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header">
					View/Edit Posts
				</h1>
			</div>
		</div>
		<!-- /.row -->

		<div class="row">
			<div class="col-lg-12">
				<div class="table-responsive">
					<a href="<?php echo base_url(); ?>AdminDashboard/addPost" class="btn btn-danger btn-sm page_buttom">Add New Post</a>
					<table class="table table-striped table-bordered">

						<tr>
							<td><strong>S.N.</strong></td>
							<td><strong>Page Title</strong></td>
							<td><strong>Parent Page</strong></td>
							<td><strong>Page Status</strong></td>
							<td><strong>Edit</strong></td>
						</tr>

						<?php 
						$i=1;
						foreach($listAllPosts->result() as $postData)
						{


							?>
							<tr>
								<td><?php echo $postData->id; ?></td>
								<td><?php echo $postData->PostTitle; ?></td>
								<td>
								<?php 
								$parent_id =  $postData->ParentPageId; 
								$this->db->select('*');
								$this->db->from('tbl_pages');
								$this->db->where('id', $parent_id);
								$pagesInfo = $this->db->get();
									foreach($pagesInfo->result() as $pageInfo) {
										echo $pageInfo->PageTitle;
									}
								?>
								</td>
									<td><?php  if($postData->Status == 1) echo "Active"; else echo "Not Active"; ?></td>
									<td><a type="button" class="btn btn-sm btn-danger" href="<?php echo base_url().'AdminDashboard/UpdatePost/'.$postData->id ?>"><i class="fa fa-edit"></i></a></td>
								</tr>
								<?php
							}

							?>

						</table>
					</div>

				</div>
			</div>
			<!-- /.row -->

		</div>
		<!-- /.container-fluid -->

	</div>
        <!-- /#page-wrapper -->
