<?php
	//bulle
	session_start();
	require('assets/php/templates/head.php');
	require('assets/php/templates/header.php');
  include('assets/php/functions.php');

	$message = $_SESSION["message"] ?? "";
	$error = $_SESSION["error"] ?? "";

	if ($message) {
        print '<h2 style="color: green;">' . $message . '</h2>';
        unset($_SESSION['message']);
  }
	if ($error) {
        print '<h2 style="color: red;">' . $error . '</h2>';
        unset($_SESSION['error']);
  }
 ?>
<html>
  <head>
    <meta charset="utf-8">
      <link rel="stylesheet" type="text/css" href="assets/style/style.css">
    <title></title>

  </head>
  <body>

		<div class="goalflexcontainer">

	    <form class="goalform" action="assets/php/handlegoals.php" method="post">

				<label for="goaltitle"><h2>Måltitel</h2></label>
	      <input type="text" name="goaltitle"></input>
				<br>
	      <label for="goaldescripton"><h2>Målbeskrivning</h2></label>
	      <textarea name="goaldescription"></textarea>
	      <br>
				<label for="fullfilled"><h2>Datum då målet ska vara uppfyllt</h2></label>
	      <input type="date" name="fullfilled"></input>
				<br>
				<label for="reminder"><h2>Påminnelse</h2></label>
	      <input type="date" name="reminder"></input>
				<br>
				<input type="submit" value="Spara" name="savegoal" />
				<br>

		</div>



      <br>
      <br>





  </body>
</html>
