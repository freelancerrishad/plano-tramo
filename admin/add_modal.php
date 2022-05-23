<!-- Add New -->
<div class="modal fade" id="addnew" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">


	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				<center>
					<h4 class="modal-title" id="myModalLabel">Add New</h4>
				</center>
			</div>
			<div class="modal-body">
				<div class="container-fluid">
					<?php
					$username = $_GET['username'];
					echo '  
			<form method="POST" action="add.php?username='.$username.'">';

					?>
					<div class="row form-group">
						<div class="col-sm-2">
							<label class="control-label modal-label">Blog Name:</label>
						</div>
						<div class="col-sm-10">
							<input type="text" class="form-control" name="property_name" required>
						</div>
					</div>

					<div class="row form-group">
						<div class="col-sm-2">
							<label class="control-label modal-label">Short Description:</label>
						</div>
						<div class="col-sm-10">
							<input type="text" class="form-control" name="property_size" required>
						</div>
					</div>


					<div class="row form-group">
						<div class="col-sm-2">
							<label class="control-label modal-label">Long Description:</label>
						</div>
						<div class="col-sm-10">
							<input type="text" class="form-control" name="property_description" required>
						</div>
</div>

				</div>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-default" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Cancel</button>
				<button type="submit" name="add" class="btn btn-primary"><span class="glyphicon glyphicon-floppy-disk"></span> Save</a>
					
			</div>
			</form>

		</div>
	</div>
</div>