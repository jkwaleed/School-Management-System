

<div class="container">
	<div class="row">
		<div class="col-4">
			<h3>Edit Course</h3>
			<hr>
			<form method="post" action="<?php echo site_url('admin/courses/save');?>">
				<input type="hidden" name="id" value="<?php echo $course->course_id;?>">
				<div class="form-group">
					<input type="text" name="name" class="form-control" placeholder="Course Name" value="<?php echo $course->c_name; ?>">
				</div>
				<div class="form-group">
					<input type="submit"  value="Save" class="btn btn-primary btn-block">
				</div>
			</form>
		</div>
	</div>
</div>