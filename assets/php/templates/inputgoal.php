<?php session_start(); ?>
<div class="messagewrapper">
	<div class="messagecontainer">
		<?php

		$message = $_SESSION["message"] ?? "";
		$error = $_SESSION["error"] ?? "";

		if ($message) {
			print '<h2 style="color: green;">' . $message . '';
			unset($_SESSION['message']);
		}
		if ($error) {
			print  $error;
			unset($_SESSION['error']);
		}
		?>
		<img class="close" src="images/delete.svg" />
	</div>
</div>
<!-- The Modal -->
<div id="modal" class="modal">

	<!-- Form starts -->
	<form class="modal-content animate" action="/assets/php/handlegoals.php" method="post">

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

			<label for="gnotes"><p>Anteckningar:</p></label><hr/>
			<textarea name="gnotes" rows="4" cols="40"></textarea>

			<!-- Input type date -->
			<label for="fullfilled"><p>Vilket datum ska målet vara uppfyllt?</p></label><hr />
			<input type="date" name="gdate" value="">

			<label for="reminder"><p>När vill du ha en påminnelse?</p></label><hr />
			<input type="date" name="greminder" value="">

			<!-- Submit buttons -->
			<div class="gbuttons">
				<button type="submit" name="gfinish" value=""><img class="savegoal" src="images/save.svg" /></button>
				<button type="submit" name="gremove" id="gremove"><img src="images/delete.svg" /></button>
			</div>

			<!-- Input fields ends -->
		</div>

		<!-- Form ends -->
	</form>

</div>
