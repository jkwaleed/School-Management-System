<div class="container">
	<div class="row justify-content-around">
		<div class="col-4">
			<h3>New Course</h3>
			<hr>
			<form method="post" action="<?php echo site_url('admin/teachers/save');?>">
				<div class="form-group">
					<input type="text" name="t_full_name" class="form-control" placeholder="Teacher Name">
				</div>
				<div class="form-group">
					<input type="date" name="join_date" class="form-control" placeholder="Join Date">
				</div>
				<div class="form-group">
					<input type="text" name="t_address" class="form-control" placeholder="Address">
				</div>
				<div class="form-group">
					<input type="text" name="phone" class="form-control" placeholder="Phone">
				</div>
				<div class="form-group">
					<input type="email" name="t_eamil" class="form-control" placeholder="Email">
				</div>
				<div class="form-group">
					<input type="text" name="department_id" class="form-control" placeholder="Department">
				</div>
				<div class="form-group">
					<input type="submit"  value="Save" class="btn btn-primary btn-block">
				</div>
			</form>
		</div>
	</div>
</div>