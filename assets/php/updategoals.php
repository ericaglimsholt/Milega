<?php
require('functions.php');


//UPDATE DATABASE ENTRIES

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
	if(isset($_POST['savegoal'])) {
		if(!empty($_POST['goaltitle'] && !empty($_POST['goaldescription']) && !empty($_POST['fullfilled']) && !empty($_POST['reminder']))) {
			$checkbox = $_POST['done'] ?? false;
			if (!updateGoals($connection, $_POST['goalid'], $_POST['goaltitle'], $_POST['goaldescription'], $_POST['fullfilled'], $_POST['reminder'], $checkbox)) {

			};

		} else {
			session_start();
			$_SESSION['error'] = 'Fyll ditt mål innan du sparar';



		}
	}
	header('Location: /goal.php');
}


//RETRIVE FROM DATABASE, PICKED UP BY XMLHttpRequest

$result = dbGet($connection, "SELECT * FROM goals ORDER BY goalId DESC");

print json_encode($result);
