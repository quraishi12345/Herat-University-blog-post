<!DOCTYPE html>
<html>
<head>
	<title>Herat University Blog Post</title>
	<link rel="stylesheet" href="<?php echo base_url('assets/bootstrap/css/bootstrap.min.css')?>">
    <link rel="stylesheet" href="<?php echo base_url('assets/css/style.css')?> ">

    <link rel="stylesheet" href="<?php echo base_url('assets/pizza/css/open-iconic-bootstrap.min.css')?>">
    <link rel="stylesheet" href="<?php echo base_url('css/animate.css')?>">
    
    <link rel="stylesheet" href="<?php echo base_url('assets/pizza/css/owl.carousel.min.css')?>">
    <link rel="stylesheet" href="<?php echo base_url('assets/pizza/css/owl.theme.default.min.css')?>">
    <link rel="stylesheet" href="<?php echo base_url('assets/pizza/css/magnific-popup.css')?>">

    <link rel="stylesheet" href="<?php echo base_url('assets/pizza/css/aos.css')?>">

    <link rel="stylesheet" href="<?php echo base_url('assets/pizza/css/ionicons.min.css')?>">

    <link rel="stylesheet" href="<?php  echo base_url('assets/pizza/css/bootstrap-datepicker.css')?>">
    <link rel="stylesheet" href="<?php echo base_url('assets/pizza/css/jquery.timepicker.css')?>">

    
    <link rel="stylesheet" href="<?php echo base_url('assets/pizza/css/flaticon.css')?>">
    <link rel="stylesheet" href="<?php echo base_url('assets/pizza/css/icomoon.css')?>">
    <!-- <link rel="stylesheet" href="<?php echo base_url('assets/pizza/css/style.css')?>">  -->
    <script type="text/javascript" src="assets/bootstrap/js/bootstrap.min.js">
    	
    </script>
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
	    <div class="container">
		      <a class="navbar-brand" href="<?php echo base_url(); ?>"><span class="flaticon-pizza-1 mr-1"></span>Pizza<br><small>Delicous</small></a>
		      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
		        <span class="oi oi-menu"></span> Menu
		      </button>
	      <div class="collapse navbar-collapse" id="ftco-nav">
	        <ul class="navbar-nav ml-auto">
	        	<li class="nav-item"><a href="<?php echo base_url();?>home" class="nav-link ">Home</a></li>
	          <li class="nav-item"><a href="<?php echo base_url();?>posts" class="nav-link">Blog</a></li>
	          
	          <li class="nav-item"><a href="<?php echo base_url(); ?>categories" class="nav-link">Categories</a></li>
	          
	          <li class="nav-item"><a href="<?php echo base_url(); ?>about" class="nav-link">About</a></li>
	        </ul>

	        <ul class="nav navbar-nav navbar-right">

	        	<?php if(!$this->session->userdata('logged_in')): ?>
	        	<li class="nav-item "><a href="<?php echo base_url(); ?>users/login" class="nav-link">Login</a></li>
	        	<li class="nav-item "><a href="<?php echo base_url(); ?>users/register" class="nav-link">Register</a></li>
	        <?php endif; ?>

	        <?php if($this->session->userdata('logged_in')): ?>
	        	<li class="nav-item "><a href="<?php echo base_url(); ?>posts/create" class="nav-link">Create Post</a></li>
	        	<li class="nav-item"><a href="<?php echo base_url(); ?>categories/create" class="nav-link">Create Category</a></li>

	        	<li class="nav-item "><a href="<?php echo base_url(); ?>users/logout" class="nav-link">Logout</a></li>

	        <?php endif; ?>
	        </ul>


	      </div>
		  </div>
	  </nav>
	  <div class="container">
	  	<!-- Flash messages -->
	  	<?php if($this->session->flashdata('user_registered')): ?>
	  	<?php echo '<p class= "alert alert-success">'.$this->session->flashdata('user_registered').'</p>'; ?>
	  <?php endif; ?>

	  <?php if($this->session->flashdata('post_created')): ?>
	  	<?php echo '<p class= "alert alert-success">'.$this->session->flashdata('post_created').'</p>'; ?>
	  <?php endif; ?>

	  <?php if($this->session->flashdata('post_updated')): ?>
	  	<?php echo '<p class= "alert alert-success">'.$this->session->flashdata('post_updated').'</p>'; ?>
	  <?php endif; ?>

	  <?php if($this->session->flashdata('post_deleted')): ?>
	  	<?php echo '<p class= "alert alert-success">'.$this->session->flashdata('post_deleted').'</p>'; ?>
	  <?php endif; ?>

	  <?php if($this->session->flashdata('category_created')): ?>
	  	<?php echo '<p class= "alert alert-success">'.$this->session->flashdata('category_created').'</p>'; ?>
	  <?php endif; ?>

	  <?php if($this->session->flashdata('login_failed')): ?>
	  	<?php echo '<p class= "alert alert-danger">'.$this->session->flashdata('login_failed').'</p>'; ?>
	  <?php endif; ?>

	  <?php if($this->session->flashdata('user_loggedin')): ?>
	  	<?php echo '<p class= "alert alert-success">'.$this->session->flashdata('user_loggedin').'</p>'; ?>
	  <?php endif; ?>

	   <?php if($this->session->flashdata('user_loggedout')): ?>
	  	<?php echo '<p class= "alert alert-success">'.$this->session->flashdata('user_loggedout').'</p>'; ?>
	  <?php endif; ?>

	  <?php if($this->session->flashdata('category_deleted')): ?>
	  	<?php echo '<p class= "alert alert-success">'.$this->session->flashdata('category_deleted').'</p>'; ?>
	  <?php endif; ?>




