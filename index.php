<?php

include_once 'inc/signup.inc.php';

?>


<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
  <meta charset="utf-8">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
    integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <script src="js/bootstrap.min.js" charset="utf-8"></script>
  <link rel="stylesheet" href="style.css">
  <title>Test Page!</title>
</head>

<body>
  <nav class="navbar navbar-expand-lg navbar-custom1">
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
      aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item active">
          <a class="nav-link" href="#parBg">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#parBg2">About</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#parBg3">Add</a>
        </li>
      </ul>
      <form class="form-inline my-2 my-lg-0">
        <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-light my-2 my-sm-0" type="submit">Search</button>
      </form>
    </div>
  </nav>

  <div class="jumbotron jumbotron-fluid" id="mainPlace">

    <div class="container container-custom">

      <h1 class="display-4" id="mainTitle">Webpage Layout</h1>

      <p class="lead" id="titleDesc">This Is Example of Webpage Layout!</p>
    </div>
  </div>

  <div id="parBg">
    <div class="container text-center">

      <p class="text-center" id="firstPar">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin tincidunt
        convallis pretium. Proin facilisis nisl justo, imperdiet sollicitudin libero ultricies a. Nullam euismod ex
        rhoncus, consequat elit at, imperdiet nunc. Praesent suscipit facilisis purus, eu feugiat erat finibus et. Nunc
        tristique tempus enim, ac dictum neque pulvinar consequat. Donec et rhoncus mauris, quis ultrices neque. Nam
        venenatis dolor eget mi dignissim venenatis. Fusce consequat nisi malesuada, dignissim massa vel, finibus nunc.
        Vivamus eleifend, nulla vitae elementum lobortis, magna urna faucibus arcu, auctor mollis tortor sem vitae
        augue. Donec finibus aliquam tortor nec porta. Fusce eu elementum arcu. Suspendisse potenti. Quisque arcu diam,
        pharetra non eros sed, hendrerit pharetra urna. </p>
    </div>
  </div>

  <div class="container text-center">

    <div class="row">
      <div class="col-lg">
        <img class="img-fluid e1"  alt="alt1"  >
        <figcaption>
          <h6>First Image</h6>
        </figcaption>
      </div>

      <div class="col-lg">
        <img class="img-fluid e2" alt="alt2">
        <figcaption>
          <h6>Second Image</h6>
        </figcaption>
      </div>
      <div class="col-lg">
        <img class="img-fluid e3" alt="alt3">
        <figcaption>
          <h6>Third Image</h6>
        </figcaption>
      </div>
    </div>
  </div>

  <div id="parBg2">
    <div class="container text-center">
      <h2 class="about">About</h2>
      <p class="text-center" id="firstPar2">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin tincidunt
        convallis pretium. Proin facilisis nisl justo, imperdiet sollicitudin libero ultricies a. Nullam euismod ex
        rhoncus, consequat elit at, imperdiet nunc. Praesent suscipit facilisis purus, eu feugiat erat finibus et. Nunc
        tristique tempus enim, ac dictum neque pulvinar consequat. Donec et rhoncus mauris, quis ultrices neque. Nam
        venenatis dolor eget mi dignissim venenatis. Fusce consequat nisi malesuada, dignissim massa vel, finibus nunc.
        Vivamus eleifend, nulla vitae elementum lobortis, magna urna faucibus arcu, auctor mollis tortor sem vitae
        augue. Donec finibus aliquam tortor nec porta. Fusce eu elementum arcu. Suspendisse potenti. Quisque arcu diam,
        pharetra non eros sed, hendrerit pharetra urna.</p>
      <p class="text-center" id="firstPar2">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin tincidunt
        convallis pretium. Proin facilisis nisl justo, imperdiet sollicitudin libero ultricies a. Nullam euismod ex
        rhoncus, consequat elit at, imperdiet nunc. Praesent suscipit facilisis purus, eu feugiat erat finibus et. Nunc
        tristique tempus enim, ac dictum neque pulvinar consequat. Donec et rhoncus mauris, quis ultrices neque. Nam
        venenatis dolor eget mi dignissim venenatis. Fusce consequat nisi malesuada, dignissim massa vel, finibus nunc.
      </p>
    </div>
  </div>
  <div class="container text-center">
    <div class="row">
      <div class="col-lg">
        <img class="img-fluid e4" alt="alt4">
        <figcaption>
          <h6>Fourth Image</h6>
        </figcaption>
      </div>
      <div class="col-lg">
        <img class="img-fluid e5" alt="alt5">
        <figcaption>
          <h6>Fifth Image</h6>
        </figcaption>
      </div>
    </div>
  </div>
  </div>
  <div id="parBg3">
    <div class="container text-center">
      <h2 class="contact">Add</h2>

      <div class="container">
        <form action="inc/signup.inc.php" method="POST">

          <label class="fname">First Name</label></br>
          <input type="text" id="fname" name="firstname" placeholder="First name.."></br>

          </br>

          <label class="lname">Last Name</label></br>
          <input type="text" id="lname" name="lastname" placeholder="Last name.."></br>

          </br>

          <label class="age">Age</label></br>
          <input type="text" id="age" name="age" placeholder="Age.."></br>
          </br>
          <input type="submit" name="submit" value="Submit" class="submitB">

        </form>
      </div>
    </div>
  </div>

</body>

</html>