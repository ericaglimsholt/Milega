<?php

require("database.php");

function registerPost($connection, $title, $content)
{
  session_start();
  if (!$connection, "INSERT INTO reflection (postContent, postTitle) VALUES ('$content', '$title')") {
    $_SESSION["error"] = "Vi kunde inte spara ditt inlägg.";
    return false;
  } else {
    $_SESSION["message"] = "Vi lyckades spara ditt inlägg!";
    return true;
  }
}
