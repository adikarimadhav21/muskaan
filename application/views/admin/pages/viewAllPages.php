<div id="page-wrapper">

	<div class="container-fluid">

		<!-- Page Heading -->
		<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header">
					View/Edit Pages
				</h1>
			</div>
		</div>
		<!-- /.row -->

		<div class="row">
			<div class="col-lg-12">
				<div class="table-responsive">
					<a href="<?php echo base_url(); ?>AdminDashboard/addPage" class="btn btn-danger btn-sm page_buttom">Add New Page</a>
					<table class="table table-striped table-bordered">

						<tr>
							<td><strong>S.N.</strong></td>
							<td><strong>Page Title</strong></td>
							<td><strong>Parent Page</strong></td>
							<td><strong>Page Status</strong></td>
							<td><strong>Edit</strong></td>
						</tr>

						<?php
						foreach($listAllPages->result() as $pageData)
						{


							?>
							<tr>
								<td><?php echo $pageData->id; ?></td>
								<td><?php echo $pageData->PageTitle; ?></td>
								<td><?php
								$parentId = $pageData->ParentId;
								if($parentId == 0) {
									echo "None";
								} else {
									$this->db->select('*');
									$this->db->from('tbl_pages');
									$this->db->where('id', $parentId);
									$pagesInfo = $this->db->get();
									foreach($pagesInfo->result() as $pageInfo) {
										echo $pageInfo->PageTitle;
									}
								}
								?>
								</td>
									<td><?php  if($pageData->Status == 1) echo "Active"; else echo "Not Active"; ?></td>
									<td><a type="button" class="btn btn-sm btn-danger" href="<?php echo base_url().'AdminDashboard/updatePage/'.$pageData->id ?>"><i class="fa fa-edit"></i></a></td>
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
