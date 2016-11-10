<?php

require("functions.php");

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
