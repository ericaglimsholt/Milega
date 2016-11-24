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


	<?php
		require('assets/php/templates/inputgoal.php');
	 ?>

	<div class="content">
		<div class="left">

			<h1>Mina mål</h1>

			<div class="goalcontent">
				<?php  getGoalTitle($connection, 4); ?>
			</div>
		</div>

		<div class="right">


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


<!-- NY MÅLSIDA INNANFÖR right-->
		<div class="flexwrap">
			<div class="goaltitleblock"></div>
			<div class="goalbesk">

				<p>Beskrivning av dit mål</p>
				<hr>
				<p>Anteckningar</p>
				<hr>

			</div>
			<div class="dateblock">
				<div class="col">Startdatum</div>
				<div class="col">Slutdatum</div>
			</div>
			<div class="finished">
				<div class="ball"></div>Avklarat
			</div>
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
