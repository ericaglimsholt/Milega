<?php
	session_start();
	require('assets/php/templates/header.php');
	require('assets/php/templates/head.php');
	require('assets/php/functions.php');



?>
<html>
  <head>



  </head>
  <body>




    <div class="content">
    <div class="left">



      <h1>Mina mål</h1>

      <div id="goalcontent">
      <?php  getGoalTitle($connection, 4); ?>

      </div>

    </div>

    <div class="right">

			<div class="goalflexcontainer">
				<form class="goalform" action="assets/php/updategoals.php" method="post">
					<?php

						$message = $_SESSION["message"] ?? "";
						$error = $_SESSION["error"] ?? "";

						if ($message) {
							print '<h2 style="color: green;">' . $message . '';
							unset($_SESSION['message']);
						}
						if ($error) {
							print '<h2 style="color: red;">' . $error . '';
							unset($_SESSION['error']);
						}
					?>
					<label for="goaltitle"><h2 style="text-align:center;">Måltitel:</h2></label>
					<input type="text" name="goaltitle" value=""></input>
					<br>
					<label for="goaldescripton"><h2 style="text-align:center;">Målbeskrivning:</h2></label>
					<textarea name="goaldescription"></textarea>
					<br>
					<br>
					<label for=""><h2 style="text-align:center;">Delmål 1:</h2></label>
					<input type="text" name=""></input>
					<br>
					<br>
					<label for=""><h2 style="text-align:center;">Delmål 2:</h2></label>
					<input type="text" name=""></input>
					<br>
					<br>
					<label for=""><h2 style="text-align:center;">Delmål 3:</h2></label>
					<input type="text" name=""></input>
					<br>
					<label for="fullfilled"><h2 style="text-align:center;">Datum då målet ska vara uppfyllt:</h2></label>
					<input type="date" name="fullfilled"></input>
					<br>
					<label for="reminder"><h2 style="text-align:center;">Påminnelse:</h2></label>
					<input type="date" name="reminder" value=""></input>
					<br>
					<label for="done">Mål avklarat</label>
					<input type="checkbox" name="done" value="1"></input>
					<br>
					<input type="hidden" name="goalid" value=""></input>
					<br>
					<input type="submit" value="Spara" name="savegoal" />
					<br>
				</div>
				<br>
				<br>

        <h1>Mål rubrik</h1>

      </div>


</div>






			</div>


    </div>

    </div>
  </div>

  <footer>
    <?php
      require('assets/php/templates/footer.php');
    ?>
  </footer>

  </body>
</html>
