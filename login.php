
<html>
<head>

  <?php

  require('assets/php/templates/head.php');
  include('assets/php/functions.php');

  $message = $_SESSION["message"] ?? "";
  $error = $_SESSION["error"] ?? "";

  if ($message) {
  	print '<h2 style="color: green;">' . $message . '';
  	unset($_SESSION['message']);
  }
  if ($error) {
  	print '<h2 style="color: red;">' . $error . '';
  	unset($_SESSION['error']);
  }
  ?>

</head>
<body>

<!-- Start logging in container -->
<div class="incontainer">

  <!-- Logotype -->
  <img src="/images/logo.svg" class="inlogo"  />

  <!-- Slogan -->
  <p>Verktyget för din utveckling som ledare</p>

  <!-- Welcome text -->
  <h1>Välkommen!</h1>

  <!-- Logging in form starts -->
  <form class="inform" method="POST" action="index.php">
  <input type="text" name="username" value="" placeholder="Ditt användarnamn">
  <input type="password" name="password" value="" placeholder="Ditt lösenord">

  <!-- Submit button -->
  <button type="submit" name="insubmit" src="index.php"><img src="images/icn_datum_bend.svg" />Logga in <img src="images/icn_datum_bend.svg" /></button>
  </form>
  <!-- Logging in form ends -->

<!-- End of logging in container -->
</div>





</body>
</html>
