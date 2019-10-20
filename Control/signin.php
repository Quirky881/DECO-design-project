<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // collect value of input field
    $email = $_REQUEST['email'];
    if (empty($email)) {
        $error = "Email is empty";
        header("Location: ../index.php?error=" . $error);
    }

    $userPassword = $_REQUEST['password'];
    if (empty($userPassword)) {
        $error = "Password is empty";
        header("Location: ../index.php?error=" . $error);
    }

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
    $sql = "SELECT username, password FROM " . $tableName . " WHERE email='" . $email . "';";
    $result = $conn->query($sql);

    $conn->close();

    if ($result->num_rows == 1) {

      $row = $result->fetch_assoc();

      $dbPassword = $row["password"];

      if (password_verify($userPassword, $dbPassword)) {
        session_start();
        $_SESSION['Username'] = $row["username"];

        header("Location: ../View/home.php");

      } else {

          $error = "Wrong password entered!";
          header("Location: ../index.php?error=" . $error);
      };

    } else {
        $error = "User not found!";
        header("Location: ../index.php?error=" . $error);
    }

}
?>
