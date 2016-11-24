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






<!-- NY MÅLSIDA INNANFÖR right-->

	<?php getGoals($connection); ?>

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
