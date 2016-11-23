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
	$date = date('Y-m-d');
	if (dbPost($connection,"INSERT INTO goals (goalDate, goalTitle, goalContent, fulfilled, reminder, done) VALUES ('$date', '$goalTitle', '$goalDescription', '$fulfilled', '$reminder', '$done')")) {
		session_start();
		$_SESSION['message'] = 'Ditt mål är sparat';
		return true;
	}


	return false;

}

function updateGoals($connection, $goalId, $goalTitle, $goalDescription, $fulfilled, $reminder, $done) {
	$updated = date('Y-m-d H:i:s');
	if (dbPost($connection,"UPDATE goals SET goalTitle = '$goalTitle', goalContent = '$goalDescription', fulfilled = '$fulfilled', reminder = '$reminder', done = '$done', updated = '$updated' WHERE goalId = '$goalId'")) {
		session_start();
		$_SESSION['message'] = 'Ditt mål är sparat';
		return true;
	}


	return false;

}

function getGoalTitle($connection, $repeats) {
	$getGoalTitles = dbGet($connection, "SELECT * FROM goals ORDER BY goalId DESC");

	for ($i = 0; $i < $repeats; $i++) {



		print '<div class="imgdate">' . $getGoalTitles[$i]['fulfilled'] . '</div>';

		print '<div class="titleContainerOuter"><div id="' . $getGoalTitles[$i]['goalId'] . '" class="titleContainerInner">' . $getGoalTitles[$i]['goalTitle'] . '</div></div>';

		print '<div class="partgoalcontainer">';

		print '<div class="margincontainer">';

		print '<div class ="partgoalouter"><div class="partgoal">Delmål 1</div></div>';

		print '<div class ="partgoalouter"><div class="partgoal">Delmål 2</div></div>';

		print '</div>';

		print '</div>';



	}
}


function getFulfilled($connection) {
	$getFulfilled = dbGet($connection, "SELECT done FROM goals WHERE done = '1'");

	echo count($getFulfilled);
}
function getUnFulfilled($connection) {
	$getUnFulfilled = dbGet($connection, "SELECT done FROM goals WHERE done = '0'");

	echo count($getUnFulfilled);
}
