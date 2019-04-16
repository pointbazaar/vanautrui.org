<!Doctype HTML>
<html>
<head>
  <meta charset="utf-8" />
  <title>Van Autrui</title>
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
  <div class="container">
    <h2 class="m-3"> Web Development Company</h2>
    <p class="english m-3"> We are a small enterprise. <br>
        Our focus is to create reliable Web applications, websites and serve as a consulting team for customers.</p>

    <br>
    <div class=" ">
        <div>
            <div class="row ">
                <img src="http://cc0-icons.vanautrui.org/composite/server.svg" style="width:12em;" class="m-3"/>
                <div class="col justify-content-center ">
                    <div>
                        <h2 class="m-3">Websites</h2>
                        <p class="m-3">
                            We can design your Website using PHP, to represent your business.<br>
                            All of the Websites we develop are secured using <a href="https://letsencrypt.org/"> Lets Encrypt Certificates</a> <br>
                            Take a look at our Portfolio to see some Websites that <br>
                            we have designed.
                        </p>
                        <p>Features include</p>
                        <ul>
                            <li>Mobile Responsive</li>
                            <li>good page speed</li>
                            <li>SSL Certificates with
                                <a href="https://certbot.eff.org/">Certbot </a> for your Website
                            </li>
                            <li>Map with
                                <a href="https://www.openstreetmap.org">Openstreetmap</a>
                                and
                                <a href="https://leafletjs.com/">Leaflet.js</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        
        <hr>
        <div>
            <div class="row ">
                <img src="http://cc0-icons.vanautrui.org/composite/servers.svg" style="width:12em;" class="m-3"/>
                <div class="col justify-content-center">
                    <div>
                        <h2 class="m-3">Web Applications</h2>
                        <p class="m-3">
                            We offer custom Web Application development using Java(Spring Boot or our own Framework) and Haskell,<br>
                            which goes from Consulting, Requirement Gathering and Design<br>
                            to Development, Hosting and ongoing Maintenance.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
  </div>
    <hr>
  <div class="container">
      <h3 class="text-center display-4">
          Our Guarantee:
      </h3>
      <div class="text-center">
          <p> You will always get the <strong>Source Code </strong>for the entire project.</p>
          <p> We will develop 100% Open-Source Software </p>
          <p> <strong>no Vendor Lock-In.</strong> <br>Because we only use opensource libraries and frameworks, <br>
              everyone can build on our work.</p>
      </div>
  </div>

  <div id="footer" class="container-fluid"></div>
  <?php
    include("footer.html");
  ?>
</body>

</html>
