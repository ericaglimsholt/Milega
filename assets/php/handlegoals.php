<?php
require('functions.php');


  if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if(isset($_POST['gfinish'])) {
      if(!empty($_POST['gtitle'] && !empty($_POST['gcontent']) && !empty($_POST['gnotes']) && !empty($_POST['gdate']) && !empty($_POST['greminder']))) {
				$checkbox = $_POST['done'] ?? 0;
				if (!insertGoals($connection, $_POST['gtitle'], $_POST['gcontent'], $_POST['gdate'], $_POST['greminder'], $checkbox, $_POST['gnotes'])) {

				};

      } else {
				session_start();
			  $_SESSION['error'] = 'Fyll i alla fält innan du sparar';



      }
    }
		header("location:javascript://history.go(-1)");

  }
