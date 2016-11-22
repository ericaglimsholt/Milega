
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

				<?php  getGoalTitle($connection, 4); ?>


			</div>
		</div>
		<div class="right">
			<h1>Resultat</h1>
			<div id="reflectioncontent">

				<div class="chartwrap">
					<div id="mainchart" class="ct-chart"></div>
					<div class="labelwrap">
						<div class="fulfilled"><?php getFulfilled($connection); ?></div>

						<div class="explain">Uppnått</div>


						<div class="unfulfilled"><?php	getUnFulfilled($connection); ?></div>

						<div class="explain">Ej uppnått</div>
					</div>
					<div class="labelwrap">
						<div
					</div>
				</div>
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
