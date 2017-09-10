

<div class="container">
	<div class="row justify-content-around">
		<div class="col-4">
			<h3>Edit Student</h3>
			<hr>
			<form method="post" action="<?php echo site_url('admin/students/save');?>">
				<input type="hidden" name="t_id" value="<?php echo $student->student_roll_no;?>">
				<div class="form-group">
					<input type="text" name="s_name" class="form-control" placeholder="Student Name" value="<?php echo $student->s_name; ?>">
				</div>
				<div class="form-group">
					<input type="text" name="f_name" class="form-control" placeholder="Father Name" value="<?php echo $student->f_name; ?>">
				</div>
				<div class="form-group">
					<input type="text" name="s_address" class="form-control" placeholder="Student Address" value="<?php echo $student->s_address; ?>">
				</div>
				<div class="form-group">
					<input type="date" name="date_of_addmision" class="form-control" placeholder="Date Of Addmission" value="<?php echo $student->date_of_addmision; ?>">
				</div>
				<div class="form-group">
					<input type="date" name="date_of_birth" class="form-control" placeholder="Date Of Birth" value="<?php echo $student->date_of_birth; ?>">
				</div>
				<div class="form-group">
					<input type="email" name="s_eamil" class="form-control" placeholder="Student Email" value="<?php echo $student->s_eamil; ?>">
				</div>
				<div class="form-group">
					<input type="text" name="s_phone" class="form-control" placeholder="Phone" value="<?php echo $student->s_phone; ?>">
				</div>
				<div class="form-group">
					<input type="text" name="class_id" class="form-control" placeholder="Class ID" value="<?php echo $student->class_id; ?>">
				</div>
				<div class="form-group">
					<input type="submit"  value="Save" class="btn btn-primary btn-block">
				</div>
			</form>
		</div>
	</div>
</div>