<!DOCTYPE html>
<html>
<head>
	<title>Site -  Home Page</title>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/bootstrap.min.css');?>">
  <!-- <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/style.css');?>">
  <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/styles.css');?>"> -->
</head>
<body>
<div class="container">
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="<?php echo site_url('/')?>">SMS</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="<?php echo site_url('/')?>">Home</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="<?php echo site_url('/news')?>">News</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="<?php echo site_url('/event')?>">Events</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="<?php echo site_url('/home/contact')?>">Contact Us</a>
      </li>
    </ul>
    <ul class="navbar-nav">
      <li class="nav-item">
        <a href="<?php echo site_url('/account/login');?>" class="nav-link">Login</a>
      </li>
    </ul>
  </div>
</nav>
</div>