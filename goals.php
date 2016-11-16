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

			<label for="goaltitle">Måltitel</label>
			<input type="text" name="goaltitle"></input>
			<br>
			<label for="goaldescripton">Målbeskrivning</label>
			<textarea name="goaldescription"></textarea>
			<br>
			<label for="fullfilled">Datum då målet ska vara uppfyllt</label>
			<input type="date" name="fullfilled"></input>
			<br>
			<label for="reminder">Påminnelse</label>
			<input type="date" name="reminder"></input>
			<br>
			<input type="submit" value="Spara" name="savegoal" />
			<br>
		</div>
		<br>
		<br>
	</body>
	</html>
