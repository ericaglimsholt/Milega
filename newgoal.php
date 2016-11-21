<?php

session_start();

require('assets/php/templates/header.php');
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
<html>

<?php require('assets/php/templates/head.php'); ?>

<body>

	<div class="goalflexcontainer">
		<form class="goalform" action="assets/php/handlegoals.php" method="post">

			<label for="goaltitle"><h2 style="text-align:center;">Måltitel:</h2></label>
			<input type="text" name="goaltitle"></input>
			<br>
			<label for="goaldescripton"><h2 style="text-align:center;">Målbeskrivning:</h2></label>
			<textarea name="goaldescription"></textarea>
			<br>
			<br>
			<label for="reminder"><h2 style="text-align:center;">Delmål 1:</h2></label>
			<input type="text" name="reminder"></input>
			<br>
			<br>
			<label for="reminder"><h2 style="text-align:center;">Delmål 2:</h2></label>
			<input type="text" name="reminder"></input>
			<br>
			<br>
			<label for="reminder"><h2 style="text-align:center;">Delmål 3:</h2></label>
			<input type="text" name="reminder"></input>
			<br>
			<label for="fullfilled"><h2 style="text-align:center;">Datum då målet ska vara uppfyllt:</h2></label>
			<input type="date" name="fullfilled"></input>
			<br>
			<label for="reminder"><h2 style="text-align:center;">Påminnelse:</h2></label>
			<input type="date" name="reminder"></input>
			<br>
			<label for="done">Mål avklarat</label>
			<input type="checkbox" name="done" value="1"></input>
			<br>
			<input type="submit" value="Spara" name="savegoal" />
			<br>
		</div>
		<br>
		<br>

		<footer>
		  <?php
		    require('assets/php/templates/footer.php');
		  ?>
		</footer>
	</body>
	</html>
