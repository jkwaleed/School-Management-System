

<div class="container">
	<div class="row justify-content-around">
		<div class="col-4">
			<h3>Edit Course</h3>
			<hr>
			<form method="post" action="<?php echo site_url('admin/teachers/save');?>">
				<input type="hidden" name="t_id" value="<?php echo $teacher->t_id;?>">
				<div class="form-group">
					<input type="text" name="t_full_name" class="form-control" placeholder="Course Name" value="<?php echo $teacher->t_full_name; ?>">
				</div>
				<div class="form-group">
					<input type="date" name="join_date" class="form-control" placeholder="Course Name" value="<?php echo $teacher->join_date; ?>">
				</div>
				<div class="form-group">
					<input type="text" name="t_address" class="form-control" placeholder="Course Name" value="<?php echo $teacher->t_address; ?>">
				</div>
				<div class="form-group">
					<input type="text" name="phone" class="form-control" placeholder="Course Name" value="<?php echo $teacher->phone; ?>">
				</div>
				<div class="form-group">
					<input type="email" name="t_eamil" class="form-control" placeholder="Course Name" value="<?php echo $teacher->t_eamil; ?>">
				</div>
				<div class="form-group">
					<input type="text" name="department_id" class="form-control" placeholder="Course Name" value="<?php echo $teacher->department_id; ?>">
				</div>
				<div class="form-group">
					<input type="submit"  value="Save" class="btn btn-primary btn-block">
				</div>
			</form>
		</div>
	</div>
</div>