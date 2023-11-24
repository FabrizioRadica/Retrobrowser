<?php
// ******************** Connessione DB
$db = mysqli_connect($servername,$username,$password,$database_name);
$conn = new mysqli($servername, $username, $password);

  /* change character set to utf8 */
  if (!$conn->set_charset("utf8")) {
      printf("Error loading character set utf8: %s\n", $conn->error);
  } else {
      //printf("Current character set: %s\n", $conn->character_set_name());
  }

// Check connection
if ($conn->connect_error) { die("Connection failed: " . $conn->connect_error); } 
?>