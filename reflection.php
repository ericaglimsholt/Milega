<html>

    <?php
			require('assets/php/templates/head.php');
      require('assets/php/templates/header.php');
		?>


  <body>

<?php

require("assets/php/functions.php");

if ($_SERVER["REQUEST_METHOD"] === "POST") {
  if ($_POST["title"] !== "" && $_POST["content"] !== "") {
    registerPost($connection, $_POST["title"], $_POST["content"]);
  } else {
    session_start();
    $_SESSION["error"] = "Du har glömt att skriva rubrik eller innehåll.";
    header("Location: /");
    die();

  }
}

$error = $_SESSION["error"] ?? "";
$message = $_SESSION["message"] ?? "";

// Error message
    if ($error) {
      print '<h4 style="color:red; font-weight:bold;">'.$error.'</h4>';
      unset($_SESSION["error"]);
    }

// Message
    if ($message) {
      print '<h4 style="color:green; font-weight:bold;">'.$message.'</h4>';
      unset($_SESSION["message"]);
    }
?>



	<div class="content">
		<div class="left">
      <h1>Navigation - mål</h1>
             <div class="lecgoalcontent">
                <div class="first"><h2>Mål 1</h2></div>
                <div class="second"><h2>Mål 2</h2></div>
                <div class="third" ><h2>Mål 3</h2></div>
                <div class="fourth" ><h2>Mål 4</h2></div>
            </div>

		<div class="right">

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
