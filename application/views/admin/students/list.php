<div class="container">
	<div class="row mt-3">
		<div class="col-2">
			<ul class="nav flex-column">
				<li class="nav-item">
					<a class="nav-link active" href="<?php echo site_url('/admin/dashboard');?>">Dashboard</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="<?php echo site_url('/admin/courses')?>">Courses</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="<?php echo site_url('/admin/teachers')?>">Teachers</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="<?php echo site_url('/admin/students')?>">Students</a>
				</li>
			</ul>
		</div>
		<div class="col-10">
			<h3>Students <a href="<?php echo site_url('admin/students/new');?>" class="btn btn-primary float-right">Add Student</a></h3>
			
			<?php if (count($students)) {?>

			
			<table class="table">
				<thead class="thead-inverse">
					<tr>
						<th>Student Id</th>
						<th>Student Name</th>
						<th>Father Name</th>
						<th>Address</th>
						<th>Date Of Addmission</th>
						<th>Date Of Birth</th>
						<th>Email</th>
						<th>Phone</th>
						<th>Class Id</th>
						<th>Actions</th>
					</tr>
				</thead>
				<?php foreach ($students as $student) {?>
				<tr>
					<td><?php echo $student->student_roll_no; ?></td>
					<td><?php echo $student->s_name; ?></td>
					<td><?php echo $student->f_name; ?></td>
					<td><?php echo $student->s_address; ?></td>
					<td><?php echo $student->date_of_addmision; ?></td>
					<td><?php echo $student->date_of_birth; ?></td>
					<td><?php echo $student->s_eamil; ?></td>
					<td><?php echo $student->s_phone; ?></td>
					<td><?php echo $student->class_id; ?></td>
					<td>
						<div class="btn-group" role="group" aria-label="Basic example">
							<a href="<?php echo site_url('admin/students/edit/' . $student->student_roll_no)?>"  class="btn btn-warning">Edit</a >
								<a  href="<?php echo site_url('admin/students/remove/' . $student->student_roll_no)?>" class="btn btn-danger">Delete</a >
								</div>
							</td>
						</tr>
						<?php } ?>
					</table>
					<?php }else {?>
					<h3 class="text-center text-muted">No Course Found!</h3>
					<?php } ?>
				</div>
			</div>
		</div>