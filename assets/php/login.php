<?php

require ("functions.php");

if($_SERVER["REQUEST_METHOD"] === "POST") {
  if($_POST["username"] !== "" && $_POST["password"] !== "") {
    if($uid = loginUser($connection, $_POST["username"], $_POST["password"])) {
      session_start();
      $_SESSION["login"] = [
        "uid" => $uid
      ];
    }
  }
}
