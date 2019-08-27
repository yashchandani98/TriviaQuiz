<!doctype html>
<html lang="en">
<head>
	<link rel="apple-touch-icon" sizes="76x76" href="<?php echo base_url()?>assets/img/apple-icon.png" />
	<link rel="icon" type="image/png" href="<?php echo base_url()?>assets/img/favicon.png" />
	<title> Play Quiz </title>
  <link href="<?php echo base_url()?>assets/css/bootstrap.min.css" rel="stylesheet" />
	<link href="<?php echo base_url()?>assets/css/paper-bootstrap-wizard.css" rel="stylesheet" />
  <link href="https://netdna.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.css" rel="stylesheet">
	<link href='https://fonts.googleapis.com/css?family=Muli:400,300' rel='stylesheet' type='text/css'>
	<link href="<?php echo base_url()?>assets/css/themify-icons.css" rel="stylesheet">
 <style>
    #overlay {
  position: fixed; 
  display: none; 
  width: 100%;
  height: 100%;
  top: 0;
  left: 0;
  right: 0;
  bottom: 0;
  background-color: rgba(0, 0, 0, 0.8);
  z-index: 2; 
  cursor: pointer;
}
</style>
	
	</head>

<body>
<div id="overlay">
<img src="<?=base_url()?>assets/img/loader.gif" style="position: absolute;left: 40%;top: 30%;"/>
</div>