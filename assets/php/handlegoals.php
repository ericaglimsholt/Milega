<?php
require('functions.php');


  if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if(isset($_POST['savevision'])) {
      if(!empty($_POST['vision'])) {
				if (!insertGoals($connection, $_POST['vision'])) {
					echo 'kunde inte posta';
					die();
				};

      } else {
				session_start();
			  $_SESSION['error'] = 'Fyll ditt mål innan du sparar';


      }
    }
    if(isset($_POST['savegoal1'])) {
      if(!empty($_POST['goal1'])) {
        //PUTTA IN I DATABAS
        echo 'Mål 1 är sparat';
      } else {
        echo 'Fyll ditt mål innan du sparar.';
      }
    }
		header('Location: index.php');
  }
