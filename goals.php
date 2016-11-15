<?php
  include('functions.php');
	session_start();
	$message = $_SESSION["message"] ?? "";
	$error = $_SESSION["error"] ?? "";

	if ($message) {
        print '<h1 style="color: green;">' . $message . '</h1>';
        unset($_SESSION['message']);
  }
	if ($error) {
        print '<h1 style="color: red;">' . $error . '</h1>';
        unset($_SESSION['error']);
  }
 ?>
<html>
  <head>
    <meta charset="utf-8">
      <link rel="stylesheet" type="text/css" href="assets/style/style.css">
    <title></title>
  </head>
  <body>

    <form action="handlegoals.php" method="post">

      <label for="vision">Det här vill jag med mitt ledarskap (vision):</label>
      <br>
      <textarea name="vision"></textarea>
      <br>
      <input type="submit" value="Spara" name="savevision" />

      <br>
      <br>

      <label for="goal1">Vad vill jag åstadkomma med min verksamhet?</label>
      <br>
      <textarea name="goal1"></textarea>
      <br>
      <input type="submit" value="Spara" name="savegoal1" />
      <?php



      ?>
      <br>
      <br>

      <label for="goal2">Vilka konkreta saker måste jag ta tag i (lösa, utveckla, förbättra)?</label>
      <br>
      <textarea name="goal2"></textarea>
      <br>
      <input type="submit" value="Spara" name="savegoal2" />

      <br>
      <br>

      <label for="goal3">Vilka av mina ledaregenskaper kan jag använda som bra resurser i det
        arbetet?</label>
      <br>
      <textarea name="goal3"></textarea>
      <br>
      <input type="submit" value="Spara" name="savegoal3" />

      <br>
      <br>

      <label for="goal4">I vilka delar behöver jag utvecklas eller anlita andra interna eller externa
        resurser?</label>
        <br>
      <textarea name="goal4"></textarea>
      <br>
      <input type="submit" value="Spara" name="savegoal4" />

      <br>
      <br>


  </body>
</html>
