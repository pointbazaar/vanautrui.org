<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8" />
  <title>Pricing - Van Autrui</title>

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
      <div class="row">
          <div class="col-md-6">
              <h3 class="text-center">Pricing </h3>

              <table>
                  <tr>
                      <td>
                          Our Web Development and <strong>Web Design </strong>starts from
                      </td>
                      <td>
                          <strong> 200 €</strong>.
                      </td>
                  </tr>
                  <tr>
                      <td>
                          Our <strong>Ecommerce</strong> Development starts from
                      </td>
                      <td>
                          <strong> 400 €</strong>.
                      </td>
                  </tr>
                  <tr>
                      <td>
                          Our <strong>Android App </strong>Development starts from
                      </td>
                      <td>
                          <strong> 300 €</strong>.
                      </td>
                  </tr>
                  <tr>
                      <td>
                          If your Project requires a custom Backend, we do that from
                      </td>
                      <td>
                          <strong> 500 €</strong>.
                      </td>
                  </tr>
              </table>
              <br>
              <p>
                  If a Project is over 2000 €,
                  we break it down into smaller Projects.<br>
                  This lowers the Risk for us and the Client.
              </p>
              <p>
                  If your Project has an Ecommerce or a Backend, <br>
                  that always requires Hosting and usually also requires Maintenance and Support.<br>
                  We provide <strong>Hosting and Maintenance Packages<br>
                  </strong>from <strong> 50 € / month</strong>. <br>
                  Of course you are freeto choose another Provider <br>
                  or to maintain and host the Project yourself.
              </p>
          </div>

          <div class="col-md-6">
              <div id="our-process" class="">
                  <h3 class="text-center">Our Process</h3>
                  <ol>
                      <li>We talk about the Project and what needs to be done, preferably in Person.</li>
                      <li>We make a detailed list of the work we are going to do</li>
                      <li>We submit a quote</li>
                      <li>
                          <strong>You transfer 25% of the Budget to our Account as a Commitment Fee</strong>
                      </li>
                      <hr>
                      <li>We start work on the Project</li>
                      <li>We show you a Wireframe of how the finished Software should look.</li>
                      <li>You can then request revisions to the Design</li>
                      <li>We implement the Software</li>
                      <li>You can then request revisions to the Implementation</li>
                      <li>You transfer the remaining 75% if you are satisfied with the work.</li>
                  </ol>
              </div>
          </div>
      </div>

      <div id="questions-and-answers" class="m-3">
          <h3>Questions and Answers</h3>
          <hr>

          <?php
            $q_and_a=array(
                array("Can i get the Commitment Fee (25%) back if i do not like the End Result?","No"),
                array("Can i do the final Payment in Parts?","No"),
                array("When is the final Payment due?","20 days after Project Completion"),
                array("Whan happens if i do not deliver the final Payment?","Nothing")
            );

            for($i=0;$i<sizeof($q_and_a);$i++){
                echo "<div>";
                    echo "<h4>" . $q_and_a[$i][0] . "</h4>";
                    echo "<p>" . $q_and_a[$i][1] . "</p>";
                echo "</div>";
                echo "<hr>";
            }
          ?>

      </div>
  </div>


  <!-- inspiration: https://blog.hubspot.com/marketing/creative-agency-team-pages -->
  <!-- https://www.rkh.co.uk/about-us -->

  <div id="footer"></div>
  <?php
    include("footer.html");
  ?>

</body>
</html>
