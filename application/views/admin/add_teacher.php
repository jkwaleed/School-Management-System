<div class="container">
<div class="col-2">
	<ul class="nav flex-column">
		<li class="nav-item">
			<a class="nav-link active" href="<?php echo site_url('/admin/admin_panel');?>">Admin</a>
		</li>
		<li class="nav-item">
			<a class="nav-link" href="<?php echo site_url('/admin/add_student')?>">Add Student</a>
		</li>
		<li class="nav-item">
			<a class="nav-link" href="<?php echo site_url('/admin/add_teacher')?>">Add Teacher</a>
		</li>
		<li class="nav-item">
			<a class="nav-link" href="<?php echo site_url('/admin/add_news')?>">Add News</a>
		</li>
		<li class="nav-item">
			<a class="nav-link" href="<?php echo site_url('/admin/add_events')?>">Add Events</a>
		</li>
		<li class="nav-item">
			<a class="nav-link" href="<?php echo site_url('/admin/delete_student')?>">Delete Student</a>
		</li>
		<li class="nav-item">
			<a class="nav-link" href="<?php echo site_url('/admin/add_teacher')?>">Delete Teacher</a>
		</li>
		<li class="nav-item">
			<a class="nav-link" href="<?php echo site_url('/admin/add_news')?>">Delete News</a>
		</li>
		<li class="nav-item">
			<a class="nav-link" href="<?php echo site_url('/admin/add_teacher')?>">Delete Events</a>
		</li>
	</ul>
</div>
<div class="col-8">
	<form method="post" action="<?php echo site_url('teacher/insert_teacher');?>">
  <div class="form-group">
    <label for="exampleInputEmail1">Teacher ID</label>
    <input type="text" class="form-control" name="t_id" aria-describedby="emailHelp" placeholder="Enter Teacher ID">
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Teacher Name</label>
    <input type="text" class="form-control" name="t_full_name" aria-describedby="emailHelp" placeholder="Enter name">
  </div>
  
  <div class="form-group">
    <label for="exampleInputPassword1">Join Date</label>
    <input type="date" class="form-control" name="join_date" placeholder="Join Date">
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Address</label>
    <input type="text" class="form-control" name="t_address" aria-describedby="emailHelp" placeholder="Enter Address">
  </div>
  
  <div class="form-group">
    <label for="exampleInputPassword1">Teacher Phone No</label>
    <input type="text" class="form-control" name="phone" placeholder="Teacher Phone No">
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Email</label>
    <input type="email" class="form-control" name="t_eamil" aria-describedby="emailHelp" placeholder="Enter Teacher Email">
  </div>
  
  <div class="form-group">
    <label for="exampleInputPassword1">Department ID</label>
    <input type="text" class="form-control" name="department_id" placeholder="Department ID">
  </div>
  <div class="form-check">
    <label class="form-check-label">
      <input type="checkbox" class="form-check-input">
      Check me out
    </label>
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
</div>
</div>