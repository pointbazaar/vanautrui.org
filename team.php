<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8" />
  <title>Team - Van Autrui</title>

  <link rel="stylesheet" type="text/css" href="style.css">
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

  <!-- https://stackoverflow.com/questions/43578264/how-to-make-image-in-bootstrap-thumbnail-square-and-responsive -->
  <div class="container-fluid text-center">
  <h3 class="text-center">Team </h3>
  <div class="row justify-content-center">

      <div class="card m-3 ">
        <div class="card-header bg-custom-dark">
            <a href="" class="fg-custom">Aaron Frey</a>
        </div>
        <img class="card-img-top profilepic" src="https://kreathon-krefeld.de/wp-content/uploads/2018/11/kreathon-2018-21.jpg">
        <div class="card-footer bg-custom-dark">
            <div>
                <span class="badge badge-light">UI</span>
                <span class="badge badge-light">UX</span>
                <span class="badge badge-light">Frontend</span>
            </div>
            <div>
                <span class="badge badge-light">Java</span>
                <span class="badge badge-light">Adobe XD</span>
                <span class="badge badge-light">Git</span>
            </div>
            <!-- add badges for skills -->
        </div>
      </div>

      <div class="card m-3 ">
        <div class="card-header bg-custom-dark">
            <a class="fg-custom" href="profiles/jorg.html">Alexander Hansen</a>
        </div>

        <img class="card-img-top profilepic" src="https://vanautrui.org/pics/alex_2.jpg">

        <div class="card-footer bg-custom-dark">
            <div>
                <span class="badge badge-light">Backend</span>
                <span class="badge badge-light">Haskell</span>
                <span class="badge badge-light">Bootstrap</span>
            </div>
            <div>
                <span class="badge badge-light">Android</span>
                <span class="badge badge-light">Java</span>
                <span class="badge badge-light">Git</span>
            </div>
        </div>
      </div>
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
