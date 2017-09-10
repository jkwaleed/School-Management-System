<div class="container">
	<div class="row justify-content-around">
		<div class="col-md-4">
			<h3>New Student</h3>
			<hr>
			<form method="post" action="<?php echo site_url('admin/students/save');?>">
				<div class="form-group">
					<input type="text" name="s_name" class="form-control" placeholder="Student Name">
				</div>
				<div class="form-group">
					<input type="text" name="f_name" class="form-control" placeholder="Father Name">
				</div>
				<div class="form-group">
					<input type="text" name="s_address" class="form-control" placeholder="Student Address">
				</div>
				<div class="form-group">
					<input type="date" name="date_of_addmision" class="form-control" placeholder="Date Of Addmission">
				</div>
				<div class="form-group">
					<input type="date" name="date_of_birth" class="form-control" placeholder="Date Of Birth">
				</div>
				<div class="form-group">
					<input type="email" name="s_eamil" class="form-control" placeholder="Email">
				</div>
				<div class="form-group">
					<input type="email" name="s_phone" class="form-control" placeholder="Phone">
				</div>
				<div class="form-group">
					<input type="text" name="class_id" class="form-control" placeholder="Class ID">
				</div>
				<div class="form-group">
					<input type="submit"  value="Save" class="btn btn-primary btn-block">
				</div>
			</form>
		</div>
	</div>
</div>