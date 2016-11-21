<?php
require('functions.php');


  if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if(isset($_POST['savegoal'])) {
      if(!empty($_POST['goaltitle'] && !empty($_POST['goaldescription']) && !empty($_POST['fullfilled']) && !empty($_POST['reminder']))) {
				$checkbox = $_POST['done'] ?? false;
				if (!insertGoals($connection, $_POST['goaltitle'], $_POST['goaldescription'], $_POST['fullfilled'], $_POST['reminder'], $checkbox)) {

				};

      } else {
				session_start();
			  $_SESSION['error'] = 'Fyll ditt mål innan du sparar';



      }
    }
		header('Location: /newgoal.php');
  }
