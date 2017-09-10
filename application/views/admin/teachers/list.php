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
			<h3>Teachers <a href="<?php echo site_url('admin/teachers/new');?>" class="btn btn-primary float-right">Add Teacher</a></h3>
			
			<?php if (count($teachers)) {?>

			
			<table class="table">
				<thead class="thead-inverse">
					<tr>
						<th>Teachers Id</th>
						<th>Name</th>
						<th>JoinDate</th>
						<th>Address</th>
						<th>Phone</th>
						<th>Email</th>
						<th>Department Id</th>
						<th>Actions</th>
					</tr>
				</thead>
				<?php foreach ($teachers as $teacher) {?>
				<tr>
					<td><?php echo $teacher->t_id; ?></td>
					<td><?php echo $teacher->t_full_name; ?></td>
					<td><?php echo $teacher->join_date; ?></td>
					<td><?php echo $teacher->t_address; ?></td>
					<td><?php echo $teacher->phone; ?></td>
					<td><?php echo $teacher->t_eamil; ?></td>
					<td><?php echo $teacher->department_id; ?></td>
					<td>
						<div class="btn-group" role="group" aria-label="Basic example">
							<a href="<?php echo site_url('admin/teachers/edit/' . $teacher->t_id)?>"  class="btn btn-warning">Edit</a >
								<a  href="<?php echo site_url('admin/teachers/remove/' . $teacher->t_id)?>" class="btn btn-danger">Delete</a >
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