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
			<h3>Courses <a href="<?php echo site_url('admin/courses/new');?>" class="btn btn-primary float-right">Add Course</a></h3>
			
			<?php if (count($courses)) {?>

			
			<table class="table">
				<thead class="thead-inverse">
					<tr>
						<th>Course Id</th>
						<th>Name</th>
						<th>Actions</th>
					</tr>
				</thead>
				<?php foreach ($courses as $course) {?>
				<tr>
					<td><?php echo $course->course_id; ?></td>
					<td><?php echo $course->c_name; ?></td>
					<td>
						<div class="btn-group" role="group" aria-label="Basic example">
							<a href="<?php echo site_url('admin/courses/edit/' . $course->course_id)?>"  class="btn btn-warning">Edit</a >
								<a  href="<?php echo site_url('admin/courses/remove/' . $course->course_id)?>" class="btn btn-danger">Delete</a >
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