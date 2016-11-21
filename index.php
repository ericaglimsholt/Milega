
<html>
<head>

	<?php
	require('assets/php/templates/head.php');
	require('assets/php/functions.php')
	?>

</head>
<body>
	<?php
	require('assets/php/templates/header.php');
	?>

	<div class="content">
		<div class="left">
			<h1>Aktiva mål</h1>

			<div class="goalcontent">
				<div class="one">
					<img src="images/date.png" class="imgdate" />
				</div>
				<div class="two">
				<?php  getGoalTitle($connection, 4); ?>
			</div>
			</div>
		</div>
		<div class="right">
			<h1>Resultat</h1>
			<div id="reflectioncontent">
				<div id="mainchart" class="ct-chart"></div>
				<?php
					getFulfilled($connection);
					echo ',';
					getUnFulfilled($connection);
				?>
			</div>
		</div>
	</div>

<script src="/assets/js/bower_components/chartist/dist/chartist.min.js"></script>

<footer>
	<?php
	require('assets/php/templates/footer.php');
	?>
</footer>


</body>
</html>
