 <!doctype html>
 <html lang="en">
 <head>
 	<link rel="apple-touch-icon" sizes="76x76" href="<?php echo base_url()?>assets/img/apple-icon.png" />
 	<link rel="icon" type="image/png" href="<?php echo base_url()?>assets/img/favicon.png" />
 	<title>Play Quiz</title>
    <link rel="canonical" href="https://www.creative-tim.com/product/paper-bootstrap-wizard"/>
    <link href="<?php echo base_url()?>assets/css/bootstrap.min.css" rel="stylesheet" />
 	<link href="<?php echo base_url()?>assets/css/paper-bootstrap-wizard.css" rel="stylesheet" />
    <link href="https://netdna.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.css" rel="stylesheet">
 	<link href='https://fonts.googleapis.com/css?family=Muli:400,300' rel='stylesheet' type='text/css'>
 	<link href="<?php echo base_url()?>assets/css/themify-icons.css" rel="stylesheet">
 	</head>

 <body>
 	<div class="image-container set-full-height" style="background-image: url('<?php echo base_url()?>assets/img/paper-1.jpeg')">


 	    <!--   Big container   -->
 	    <div class="container">
 	        <div class="row">
 		        <div class="col-sm-8 col-sm-offset-2">

 		            <!--      Wizard container        -->
 		            <div class="wizard-container">

 		                <div class="card wizard-card" data-color="orange" id="wizardProfile">

 		                    <form method="post" action="<?php echo base_url()?>start-quiz">
 		                    	<div class="wizard-header text-center">
 		                        	<h3 class="wizard-title">Welcome TO Quiz</h3>
 									<p class="category">please enter your name to play quiz game</p>
 		                    	</div>
 		                            	<div class="col-sm-10 col-sm-offset-1" style="margin-top:40px;">
																		<div class="form-group" >
							 							             <input type="text" class="form-control"  name="user_name" placeholder="Your Name..." required>
							 							        </div>
																		<div class="form-group" style="margin-left: 40px;">


																		<input type='submit'  class='btn btn-finish btn-fill btn-warning btn-wd' name='finish' value="Next" />
	</div>
 											         	</div>


 		                        </div>
 		                        <div class="wizard-footer">



 		                            <div class="clearfix"></div>
 		                        </div>
 		                    </form>
 		        </div>
			</div>
 	    </div><!-- end row -->
 	</div> <!--  big container -->
</div>



 </body>
 <!--   Core JS Files   -->
 	<script src="<?php echo base_url()?>assets/js/jquery-2.2.4.min.js" type="text/javascript"></script>
 	<script src="<?php echo base_url()?>assets/js/bootstrap.min.js" type="text/javascript"></script>
 	<script src="<?php echo base_url()?>assets/js/jquery.bootstrap.wizard.js" type="text/javascript"></script>

 	<!--  Plugin for the Wizard -->
 	<script src="<?php echo base_url()?>assets/js/demo.js" type="text/javascript"></script>
 	<script src="<?php echo base_url()?>assets/js/paper-bootstrap-wizard.js" type="text/javascript"></script>

 	<!--  More information about jquery.validate here: https://jqueryvalidation.org/	 -->
 	<script src="<?php echo base_url()?>assets/js/jquery.validate.min.js" type="text/javascript"></script>

 </html>
