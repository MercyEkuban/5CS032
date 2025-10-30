<?php
  $mysqli = new mysqli("localhost","2336742","Phenome1155&","db2336742");

  if ($mysqli -> connect_errno) {
	echo "Failed to connect to MySQL: " . $mysqli -> connect_error;
	exit();
  }
?>
