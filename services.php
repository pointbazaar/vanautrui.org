<!DOCTYPE HTML>

<head>
  <meta charset="utf-8" />


    <title>Services - Van Autrui</title>
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
  <div id="spacer" style="height: 3em;"></div>
  <div class="container-fluid">

    <!-- col-lg-4 means that card will wrap around earlier than if it were
    col-sm-4.
    -->
    <h1 class="display-4 text-center">
      <code> < Development Services /> </code>
    </h1>


    <div class="m-3"></div>

    <div class="row">

      <div class="card m-3">
        <div class="card-body">
          <div class="card-title text-center">
            <h3>Webdesign and Web Development</h3>
          </div>
          <div class="card-text">
              Some of the things we can do for you:
            <ul>
              <li> Pages on your Website
                <ul>
                  <li>Products Overview Page</li>
                  <li>Business hours</li>
                  <li>Contact Page</li>
                </ul>
              </li>
              <li>SSL Certificates for your Website</li>
              <li>
                  <strong>Analytics</strong>
              </li>
              <li>Social Media Marketing through our Associates</li>
              <li>Mobile Responsive</li>
              <li>above average Page Speed</li>
              <li>Map with
                <a href="https://www.openstreetmap.org">Openstreetmap</a>
                and
                <a href="https://leafletjs.com/">Leaflet.js</a>
              </li>
                <li>Adding Translations to an already existing site
                </li>

            </ul>
            <div class="row justify-content-center">
                <!--TODO make seperate sections on portfolio site -->
                <a href="portfolio.html" class="p-1">
                    <button class="btn btn-info">Our Portfolio including <br><strong>Static Websites</strong></button>
                </a>
            </div>
          </div>
        </div>
      </div>

      <div class="card m-3">
        <div class="card-body">
          <div class="card-title text-center">
            <h3>Content Management Systems <br>and Ecommerce <br>
                with Wordpress and Woocommerce
            </h3>
          </div>
          <div class="card-text">
              Some of the things we can do for you:
            <ul>
              <li>SSL Certificates Configuration with
                <a href="https://certbot.eff.org/">Certbot </a>
              </li>
              <li>
                  <strong>Analytics</strong>
                  <ul>
                      <li>Custom Targets and Marketing Funnels</li>
                      <li>Reporting</li>
                  </ul>
              </li>
              <li>
                Our
                <a href="https://wordpress.com/">Wordpress</a>
                 and Ecommerce Offering
                <ul>
                  <li>Developing a Wordpress Theme for your Brand.</li>
                  <li>Wordpress Configuration and Setup </li>
                  <li>Wordpress
                    <a href="https://woocommerce.com/">Woocommerce</a>
                     Ecommerce Configuration<br>
                    </li>
                </ul>
              </li>
              <li>Mobile-First approach with a focus on Page Speed</li>
              <li>Map with Openstreetmap and Leaflet.js</li>
              <li>Web Applications with Spring Boot and Database. <br>
                We can build custom Software for you.</li>
              <li>Modifying existing Web Applications.</li>
              <li>Adding Translations to an already existing site </li>
            </ul>
            <div class="row justify-content-center">
                <a href="portfolio.html" class="p-1">
                    <button class="btn btn-info">Our Portfolio including <br><strong> Web Applications</strong></button>
                </a>
            </div>
          </div>
        </div>
      </div>

      <div class="card m-3">
        <div class="card-body">
          <div class="card-title text-center">
            <h3>Android Applications</h3>
          </div>
          <div class="card-text">
            Some of the things we can do for you:
            <ul>
                <li>
                    Paypal integration
                </li>
                <li>
                    Interactive Visualzations
                </li>
                <li>
                    Using Device Sensors
                </li>
                <li>
                    Chat App
                </li>
                <li>
                    Dating App
                </li>
            </ul>
            <div class="row justify-content-center">
                <!--TODO make seperate sections on portfolio site -->
                <a href="portfolio.html" class="p-1">
                    <button class="btn btn-info">Our Portfolio of <br><strong>Android Applications (under contstruction, not ready yet)</strong></button>
                </a>
            </div>
          </div>
        </div>
      </div>


    </div>

    <!-- TODO: bring in more charts and graphics to illustrate the benefits of a website -->




    <div class="container-fluid">


    <!-- the clients we served, their logos -->
    <!-- TODO: we should generate this using js or something. so much html is intimidating. -->

    <div class="p-4"></div>

  </div>

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

  <div class="p-4"></div>

  <div id="footer" class="container-fluid"></div>
  <?php
    include("footer.html");
  ?>
</body>
