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
	<form action="<?php echo site_url('student/insert_student') ?>" method="POST">
  <div class="form-group">
    <label for="exampleInputEmail1">Student Roll No </label>
    <input type="text" class="form-control" name="student_roll_no" aria-describedby="emailHelp" placeholder="Enter Roll No">
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Student Name</label>
    <input type="text" class="form-control" name="s_name" aria-describedby="emailHelp" placeholder="Enter name">
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Father Name</label>
    <input type="text" class="form-control" name="f_name" aria-describedby="emailHelp" placeholder="Enter Father Name">
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Address</label>
    <input type="email" class="form-control" name="s_address" aria-describedby="emailHelp" placeholder="Enter Address">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Class ID</label>
    <input type="text" class="form-control" name="class_id" placeholder="Class ID">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Date Of Addmission</label>
    <input type="date" class="form-control" name="date_of_addmision" placeholder="Date of addmission">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Date of Birth</label>
    <input type="date" class="form-control" name="date_of_birth" placeholder="Date Of Birth">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Student Phone No</label>
    <input type="text" class="form-control" name="s_phone" placeholder="Student Phone No">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Department</label>
    <input type="text" class="form-control" name="dept" placeholder="Department">
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