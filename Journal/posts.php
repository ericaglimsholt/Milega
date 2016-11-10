<html>
  <head>
    <meta charset="utf-8">
    <title>Reflection journal</title>
  </head>
  <body>

<?php

require("functions.php");

// Error message
    if ($error) {
      print '<h4 style="color:red; font-weight:bold;">'.$error.'</h4>';
      unset($_SESSION["error"]);
    }

// Message
    if ($message) {
      print '<h4 style="color:red; font-weight:bold;">'.$message.'</h4>';
      unset($_SESSION["message"]);
    }
?>

    <h1>Write something and we will save it</h1>

    <form action="post.php" method="POST">
      Rubrik:<input type="text" name="title" value=""> </br>
      Innehåll:<input type="text" name="content" value=""> </br>
      <input type="submit" name="submit" value="Skicka">
    </form>

  </body>
</html>
