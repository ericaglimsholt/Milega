
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

	<!-- The Modal -->
	<div id="modal" class="modal">

		<!-- Form starts -->
		<form class="modal-content animate" action="Location: /" method="post">

			<!-- Header -->
			<div class="imgcontainer">
				<img src="images/header.svg" class="goalheader" />
				<h4>Skriv nytt mål</h4>
			</div>

			<!-- Input fields -->
			<div class="formcontainer">

				<label for="goaltitle"><p>Rubrik:</p></label><hr />
				<input type="text" name="gtitle" value="">

				<label for="goaldescripton"><p>Beskrivning av ditt mål:</p></label><hr />
				<textarea name="gcontent" rows="4" cols="40"></textarea>

				<label for="#"><p>Anteckningar:</p></label><hr />
				<textarea name="gnotes" rows="4" cols="40"></textarea>

				<!-- Input type date -->
				<label for="fullfilled"><p>Vilket datum ska målet vara uppfyllt?</p></label><hr />
				<input type="date" name="gdate" value="">

				<label for="reminder"><p>När vill du ha en påminnelse?</p></label><hr />
				<input type="date" name="greminder" value="">

				<!-- Submit buttons -->
				<div class="gbuttons">
				<button type="submit" name="gfinish"><img src="images/save.svg" /></button>
				<button type="submit" name="gremove" id="gremove"><img src="images/delete.svg" /></button>
				</div>

			<!-- Input fields ends -->
			</div>

		<!-- Form ends -->
		</form>
	</div>


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

<script>

// Takes in the new goal
document.querySelector('.new').addEventListener("click", function(event){
		document.getElementById('modal').style.display='block';
		event.preventDefault();
});

// Takes out the new goal
document.getElementById("gremove").addEventListener("click", function(){
		document.getElementById("modal").style.display = "none";
});



</script>

</body>
</html>
