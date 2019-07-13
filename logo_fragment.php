<!DOCTYPE html>

<html>
<head>
  <meta charset="utf-8" />
  <title>Van Autrui</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous"/>
  <link rel="stylesheet" type="text/css" href="style.css"/>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
</head>
<body>

<div class="container-fullwidth">
  <nav class="navbar navbar-expand-xl navbar-dark bg-custom-dark">
    <a class="navbar-brand" href="index.php">
      <img style="width:3em;" src="https://vanautrui.org/pics/logo.svg"/>
      <span class="fg-custom">Van Autrui</span>
    </a>

    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" >
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">

<?php
$activePage = basename($_SERVER['PHP_SELF'], ".php");
 ?>

 <!-- <p> <?= ($activePage)?> </p> -->

    <ul class="navbar-nav ml-auto">
        <li class="nav-item <?= ($activePage == 'index') ? 'active':''; ?>">
            <a class="nav-link" href="index.php">
              <strong>
                <span>
                Our Service
                </span>
              </strong>
            </a>
        </li>
        
      <li class="nav-item <?= ($activePage == 'portfolio') ? 'active':''; ?>">
        <a class="nav-link" href="portfolio.php">
          <strong>
            <span>
            Portfolio
            </span>
          </strong>
        </a>
      </li>
      <li class="nav-item <?= ($activePage == 'team') ? 'active':''; ?>">
        <a class="nav-link" href="team.php">
            Team
        </a>
      </li>
      <li class="nav-item <?= ($activePage == 'contact') ? 'active':''; ?>">
        <a class="nav-link" href="contact.php">
            Contact
        </a>
      </li>
      <li class="nav-item <?= ($activePage == 'impressum_und_datenschutz') ? 'active':''; ?>">
        <a class="nav-link" href="impressum_und_datenschutz.php">
            Impressum, Datenschutz
        </a>
      </li>

    </ul>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

    </div>
  </nav>
</div>

</body>
</html>
