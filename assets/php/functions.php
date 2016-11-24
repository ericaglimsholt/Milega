<?php

require("database.php");

function registerPost($connection, $title, $content) {
  if (!dbPost($connection, "INSERT INTO reflection (postContent, postTitle) VALUES ('$content', '$title')")) {
    $_SESSION["error"] = "Vi kunde inte spara ditt inlägg.";
    return false;
  } else {
    $_SESSION["message"] = "Vi lyckades spara ditt inlägg!";
    return true;
  }
}

function getGoals($connection) {
  $getGoalEntrys = dbGet($connection, "SELECT * FROM goals ORDER BY goalId DESC");
  for ($i = 0; $i < count($getGoalEntrys); $i++) {
	print 	'<div class="flexwrap">';
	print		'<div class="goaltitleblock">' . $getGoalEntrys[$i]['goalTitle'] . '</div>';
	print		'<div class="goalbesk">';
	print   '<p>Beskrivning av dit mål</p>';
	print	  '<hr>';
	print		'<p>' . $getGoalEntrys[$i]['goalContent'] . '</p>';
	print		'<p>Anteckningar</p>';
	print		'<hr>';
	print		'<p>' . $getGoalEntrys[$i]['notes'] . '</p>'; 
	print		'</div>';
	print		'<div class="dateblock">';
	print		'<div class="col">Startdatum<br>' . $getGoalEntrys[$i]['goalDate'] . '</div>';
	print		'<div class="col">Slutdatum<br>' . $getGoalEntrys[$i]['fulfilled'] . '</div>';
	print		'</div>';
	print		'<div class="editblock">';
	print		'<div class="col"><img src="/images/icn_greycircle_plus.svg"><br>Nytt delmål</div>';
	print		'<div class="col"><img src="/images/icn_greencircle_reflection.svg"><br>Ny reflektion</div>';
	print		'<div class="col"><img src="/images/delete.svg"><br>Ändra / Ta bort</div>';
	print		'</div>';
	print		'</div>';
	print		'<br>';
  }
}

function insertGoals($connection, $goalTitle, $goalDescription, $fulfilled, $reminder, $done, $notes) {
	$date = date('Y-m-d');
	if (dbPost($connection,"INSERT INTO goals (goalDate, goalTitle, goalContent, fulfilled, reminder, done, notes) VALUES ('$date', '$goalTitle', '$goalDescription', '$fulfilled', '$reminder', '$done', '$notes')")) {
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
