<html>
  <head>
    <meta charset="utf-8">
    <title>Journal</title>
  </head>
  <body>
<h1>Write something and we will save it</h1>

    <form action="<?php $_SERVER['PHP_SELF']?>" method="POST">
      Rubrik:<input type="text" name="title" value=""> </br>
      Innehåll:<input type="text" name="content" value=""> </br>
      <input type="submit" name="submit" value="Skicka">
    </form>

  </body>
</html>

<?php
$errorMessage = "";

if(isset($_POST['submit'])) {
  if(empty($_POST['title']) || empty($_POST['content'])) {
    print "Du måste fylla i alla fält :)";
  }
}




 ?>
