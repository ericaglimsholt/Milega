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

function insertGoals($connection, $goalTitle, $goalDescription) {
	$date = date('Y-m-d H:i:s');
	if (dbPost($connection,"INSERT INTO goals (goalDate, goalTitle, goalContent) VALUES ('$date', '$goalTitle', '$goalDescription')")) {
		session_start();
		$_SESSION['message'] = 'Ditt mål är sparat';
		return true;
	}


	return false;

}
