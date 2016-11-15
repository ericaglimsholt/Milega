<?php

// Connection to our database
$connection = mysqli_connect("localhost", "root", "root", "milega");

// Set charset to utf-8
mysqli_set_charset($connection, "utf-8");

// Will perform a MySQL quert and return the result based on the $single property
function dbGet($connection, $query, $single = false)
{
  $result = mysqli_query($connection, $query);
  $data = ($single) ? mysqli_fetch_assoc($result) :[];

  if(!$single){
    while ($row = mysqli_fetch_assoc($result)) {
      $data[] = $row;
    }
  }
  mysqli_free_result($result);
  return $data;
}


//CARLS PRYLAR

function dbPost($connection, $query) {
  $result = mysqli_query($connection, $query);
  if (!$result) {
    die(var_dump(mysqli_error($connection)));
  }
  return $result;
}
