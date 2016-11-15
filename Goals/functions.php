<?php
	require('database.php');
// FUNCTIONS AND VARIABLES USED ON MILEGA SITE
function insertGoals($connection, $content) {
	$date = date('Y-m-d H:i:s');
	if (postData($connection,"INSERT INTO goals (goalDate goalContent) VALUES ('$date', '$content')")) {
		session_start();
		$_SESSION['message'] = 'Ditt mål är sparat';
		return true;
	}


	return false;

}
