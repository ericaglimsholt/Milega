<?php

require("database.php");

function registerPost($connection, $title, $content)
{
  if (!dbPost($connection, "INSERT INTO reflection (postContent, postTitle) VALUES ('$content', '$title')")) {
    $_SESSION["error"] = "Vi kunde inte spara ditt inlägg.";
    return false;
  } else {
    $_SESSION["message"] = "Vi lyckades spara ditt inlägg!";
    return true;
  }
}

function insertGoals($connection, $goalTitle, $goalDescription, $fulfilled, $reminder) {
	$date = date('Y-m-d H:i:s');
	if (dbPost($connection,"INSERT INTO goals (goalDate, goalTitle, goalContent, fulfilled, reminder) VALUES ('$date', '$goalTitle', '$goalDescription', '$fulfilled', '$reminder')")) {
		session_start();
		$_SESSION['message'] = 'Ditt mål är sparat';
		return true;
	}


	return false;

}

function getGoalTitle($connection, $repeats) {
	$getGoalTitles = dbGet($connection, "SELECT * FROM goals");

	for ($i = 0; $i < $repeats; $i++) {
		print '<h2>' . $getGoalTitles[$i]['goalTitle'] . '</h2>';
	}
}
