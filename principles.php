<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8" />
  <title>Team - Van Autrui</title>

  <link rel="stylesheet" type="text/css" href="style.css">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</head>

<body>
  <?php
    include("logo_fragment.php");
  ?>

  <div class="p-4"></div>

  <div class="container-fluid text-center">
	  
	<h3 class="text-center display-4">Our Principles for your Benefit</h3>
	<div class="text-center">
	  <p> You will always get the <strong>Source Code </strong></p>
	  <p> We will develop 100% Open-Source Software </p>
	  <p> <strong>no Vendor Lock-In.</strong></p>
	  <p> All of our freelancers are either students or have a university degree</p>
	  <p> Strong preference for using statically typed languages to prevent errors 
		  and speed up development.
	  </p>
	</div>

	<div class="row justify-content-center">
	  <!-- how we work-->
	  <div class="col-lg-4">
		  <div class="card">
			  <div class="card-header">
				  <h3 class="text-center"> How we work </h3>
			  </div>
			  <div class="card-body">
				  <div class="card-text">
					  <p>
						  We use only opensource software and opensource dependencies
						  to ensure our clients have the best results
					  </p>
					  <?php
					  include("tools_logos_fragment.html");
					  ?>
				  </div>
			  </div>
		  </div>
	  </div>
	</div>
  </div>

  <!-- inspiration: https://blog.hubspot.com/marketing/creative-agency-team-pages -->
  <!-- https://www.rkh.co.uk/about-us -->

  

</body>
</html>
