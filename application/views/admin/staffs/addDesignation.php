<div id="page-wrapper">

	<div class="container-fluid">

		<!-- Page Heading -->
		<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header">
					Add Designation
				</h1>
			</div>
		</div>
		<!-- /.row -->

		<div class="row">
			<div class="col-lg-12">


				<script type="text/javascript" src="http://ajax.aspnetcdn.com/ajax/jQuery/jquery-2.0.3.js"></script>

				<form role="form" action="<?php echo base_url(); ?>Admindashboard/submitDesignation" method="POST" enctype="multipart/form-data">
					<div id="itemRows">
						<div class="form-group">
							<div class="row">
								<div class="col-xs-12">
									<label>Designation</label>
									<input class="form-control" name="designation[]">
								</div>

								<div class="col-xs-12" style="margin-top:10px;">
									<input onclick="addRow(this.form);" type="button" value="Add New Designation" class="btn btn-danger btn-sm"/>
								</div>


							</div>
						</div>
					</div>

					<input type="submit" value="Save" class="btn btn-danger btn-sm">
				</form>
				<script type="text/javascript">
					var rowNum = 0;
					function addRow(frm) {
						rowNum ++;
						var row = '<div id="rowNum'+rowNum+'" class="form-group"><div class="row"><div class="col-xs-12"><label>Designation</label><input class="form-control" name="designation[]"></div><div class="col-xs-6" style="margin-top:10px;"><input type="button" class="btn btn-danger btn-sm" value="Remove" onclick="removeRow('+rowNum+');"></div></div></div></div>';
						jQuery('#itemRows').append(row);
						frm.add_qty.value = '';
						frm.add_name.value = '';
					}

					function removeRow(rnum) {
						jQuery('#rowNum'+rnum).remove();
					}
				</script>



			</div>
		</div>
		<!-- /.row -->

	</div>
	<!-- /.container-fluid -->

</div>
