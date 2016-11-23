<?php

session_start();

require('assets/php/templates/header.php');
include('assets/php/functions.php');

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
<html>

<?php require('assets/php/templates/head.php'); ?>

<body>


<!-- The Modal -->
<div id="modal" class="modal">

	<!-- Form starts -->
	<form class="modal-content animate" action="assets/php/handlegoals.php" method="post">

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
			<button type="submit" name="gremove"><img src="images/delete.svg" /></button>
			</div>

		<!-- Input fields ends -->
		</div>

	<!-- Form ends -->
	</form>
</div>



	<!-- <div class="goalflexcontainer">
		<form class="goalform" action="assets/php/handlegoals.php" method="post">

			<label for="goaltitle"><p style="text-align:center;">Rubrik:<p></label>
			<input type="text" name="goaltitle"></input>
			<br>
			<label for="goaldescripton"><p style="text-align:center;">Beskriving av ditt mål:</p></label>
			<textarea name="goaldescription"></textarea>
			<br>
			<br>
			<label for="reminder"><h2 style="text-align:center;">Anteckningar:</h2></label>
			<input type="text" name="reminder"></input>
			<br>
			<label for="fullfilled"><h2 style="text-align:center;">Datum då målet ska vara uppfyllt:</h2></label>
			<input type="date" name="fullfilled"></input>
			<br>
			<label for="reminder"><h2 style="text-align:center;">Påminnelse:</h2></label>
			<input type="date" name="reminder"></input>
			<br>
			<label for="done">Mål avklarat</label>
			<input type="checkbox" name="done" value="1"></input>
			<br>
			<input type="submit" value="Spara" name="savegoal" />
			<br>
		</div>
		<br>
		<br> -->

		<footer>
		  <?php
		    require('assets/php/templates/footer.php');
		  ?>
		</footer>


	</body>

	<script>

	document.querySelector('.new').addEventListener("click", function(event){
	    document.getElementById('modal').style.display='block';
			event.preventDefault();
	});

</script>

	</html>
