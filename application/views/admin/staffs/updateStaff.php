<div id="page-wrapper">

	<div class="container-fluid">

		<!-- Page Heading -->
		<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header">
					Update Staff
				</h1>
			</div>
		</div>
		<!-- /.row -->

		<div class="row">
			<div class="col-lg-12">
				<script type="text/javascript" src="http://ajax.aspnetcdn.com/ajax/jQuery/jquery-2.0.3.js"></script>

				<form role="form"
					  action="<?php echo base_url() . 'AdminDashboard/submitUpdatedStaff/' . $staffById[0]->id ?>"
					  method="POST" enctype="multipart/form-data">
					<div class="form-group">
						<div class="row">
							<div class="col-xs-12">
								<label>Staff Name</label>
								<input type="text" class="form-control" name="name"
									   value="<?php echo $staffById[0]->Name; ?>">
							</div>
							<div class="col-xs-12">
								<label>Photo</label>
								<img
									src="<?php echo base_url() . 'application/assets/uploads/' . $staffById[0]->Photo; ?>"
									class="img-thumbnail thumbnail-img">
								<input type="file" class="form-control" name="photo">
							</div>
							<div class="col-xs-12">
								<label>Designation</label>
								<select class="form-control" name="designation">
									<?php
									$this->db->select('*');
									$this->db->from('tbl_designations');
									$designations = $this->db->get();
									foreach($designations->result() as $designation)
									{
										?>
										<option value="<?php echo $designation->id; ?>"
											<?php
											$idToBeChecked = $staffById[0]->designationId;
											$idToBeCheckedIn = $designation->id;
											if($idToBeChecked == $idToBeCheckedIn) {
												echo "selected";
											}
											?>>

											<?php echo $designation->Designation; ?></option>
										<?php
									}
									?>
								</select>
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
