<div class="container">
	<div class="row">
		<div class="col-4">
			<h3>New Course</h3>
			<hr>
			<form method="post" action="<?php echo site_url('admin/course/delete');?>">
				<div class="form-group">
					<input type="text" name="name" class="form-control" placeholder="Course Name">
				</div>
				<div class="form-group">
					<input type="submit"  value="Save" class="btn btn-primary btn-block">
				</div>
			</form>
		</div>
	</div>
</div>