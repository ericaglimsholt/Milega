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

function insertGoals($connection, $goalTitle, $goalDescription, $fulfilled, $reminder, $done) {
	$date = date('Y-m-d H:i:s');
	if (dbPost($connection,"INSERT INTO goals (goalDate, goalTitle, goalContent, fulfilled, reminder, done) VALUES ('$date', '$goalTitle', '$goalDescription', '$fulfilled', '$reminder', '$done')")) {
		session_start();
		$_SESSION['message'] = 'Ditt mål är sparat';
		return true;
	}


	return false;

}

function getGoalTitle($connection, $repeats) {
	$getGoalTitles = dbGet($connection, "SELECT * FROM goals ORDER BY goalDate DESC");

	for ($i = 0; $i < $repeats; $i++) {
		print '<img src="images/date.png" class="imgdate"/>' . '<h2>' . $getGoalTitles[$i]['goalTitle'] . '</h2>';
	}
}


function getFulfilled($connection) {
	$getFulfilled = dbGet($connection, "SELECT done FROM goals WHERE done = '1'");

	echo '<div class="fulfilled">' . count($getFulfilled) . '</div>';
}
function getUnFulfilled($connection) {
	$getUnFulfilled = dbGet($connection, "SELECT done FROM goals WHERE done = '0'");

	echo '<div class="unfulfilled">' . count($getUnFulfilled) . '</div>';
}
