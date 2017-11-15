<!DOCTYPE html>
<html>
<head>
	<title>CI_Training</title>
	<link rel="stylesheet" type="text/css" href="https://bootswatch.com/4/flatly/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/custom.css">
</head>
<style type="text/css">
	.active{
		background-color: #95a5a6;
	}
</style>
<body>
<div class="bs-component">
	<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
	    <a class="navbar-brand" href="<?php echo base_url();?>">CI_Mark</a>
	    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarColor01" aria-controls="navbarColor01" aria-expanded="false" aria-label="Toggle navigation">
	      <span class="navbar-toggler-icon"></span>
	    </button>

	    <div class="collapse navbar-collapse" id="navbarColor01">
	      <ul class="navbar-nav mr-auto">
	        <li class="nav-item">
	          <a class="nav-link" href="<?php echo base_url();?>">Home</a>
	        </li>
	        <li class="nav-item">
	          <a class="nav-link" href="<?php echo base_url(); ?>about">About</a>
	        </li>
	        <li class="nav-item">
	          <a class="nav-link" href="<?php echo base_url(); ?>contact">Contact Us</a>
	        </li>
	        <li class="nav-item">
	          <a class="nav-link" href="<?php echo base_url(); ?>posts">Blog</a>
	        </li>
	        <li class="nav-item">
	          <a class="nav-link" href="<?php echo base_url(); ?>categories">Categories</a>
	        </li>
	      </ul>
	      <ul class="navbar-nav navbar-right">
	      	<li class="nav-item">
	          <a class="nav-link" href="<?php echo base_url(); ?>posts/create">Create Blog</a>
	        </li>
	        <li class="nav-item">
	          <a class="nav-link" href="<?php echo base_url(); ?>categories/create">Create Category</a>
	        </li>
	        <li class="nav-item">
	          <a class="nav-link" href="<?php echo base_url(); ?>account/login">Account</a>
	        </li>
	      </ul>
	    </div>
	</nav>
</div>

<div class="container">
