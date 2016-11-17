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

    <h1>Write something and we will save it</h1>

    <form action="<?php $_SERVER['PHP_SELF']?>" method="POST">
      Rubrik:<input type="text" name="title" value=""> </br>
      Innehåll:<input type="text" name="content" value=""> </br>
      <input type="submit" name="submit" value="Skicka">
    </form>

    <footer>
      <?php
        require('assets/php/templates/footer.php');
      ?>
    </footer>

  </body>
</html>
