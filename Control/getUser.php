<?php

  session_start();

  $servername = "localhost";
  $username = "root";
  $password = "root";
  $dbName = "deco7180_project";
  $tableName = "Users";

  // Create connection
  $conn = new mysqli($servername, $username, $password, $dbName);

  // Check connection working
  if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
  }

  // Check user exists
  $sql = "SELECT * FROM " . $tableName . " WHERE username='" . $_SESSION['Username'] . "';";
  $result = $conn->query($sql);

  $row = "";

  $conn->close();

  if ($result->num_rows == 1) {

    $row = $result->fetch_assoc();

  }

?>
