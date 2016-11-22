
<html>
<head>

	<?php
	require('assets/php/templates/head.php');
	require('assets/php/functions.php')
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
  <form class="inform">
  <input type="text" name="username" value="" placeholder="Ditt användarnamn">
  <input type="password" name="password" value="" placeholder="Ditt lösenord">

  <!-- Submit button -->
  <button type="submit" name="insubmit">Logga in</button>
  </form>
  <!-- Logging in form ends -->

<!-- End of logging in container -->
</div>





</body>
</html>
