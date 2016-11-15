<?php
	session_start();
	require('assets/php/templates/head.php');
  include('assets/php/functions.php');

	$message = $_SESSION["message"] ?? "";
	$error = $_SESSION["error"] ?? "";

	if ($message) {
        print '<h1 style="color: green;">' . $message . '</h1>';
        unset($_SESSION['message']);
  }
	if ($error) {
        print '<h1 style="color: red;">' . $error . '</h1>';
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

				<label for="goaltitle"><h1>Måltitel</h1></label>
	      <input type="text" name="goaltitle"></input>
				<br>
	      <label for="goaldescripton"><h1>Målbeskrivning</h1></label>
	      <textarea name="goaldescription"></textarea>
	      <br>
				<br>
				<input type="submit" value="Spara" name="savegoal" />
				<br>

		</div>



      <br>
      <br>





  </body>
</html>
