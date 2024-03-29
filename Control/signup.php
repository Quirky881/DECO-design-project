<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // collect value of input field
    $userName = $_REQUEST['username'];
    if (empty($userName)) {
      $error = "Username is empty";
      header("Location: ../View/signup.php?error=" . $error);
    }

    $email = $_REQUEST['email'];
    if (empty($email)) {
      $error = "Email is empty";
      header("Location: ../View/signup.php?error=" . $error);
    }

    $userPassword = $_REQUEST['password'];
    if (empty($userPassword)) {
      $error = "Password is empty";
      header("Location: ../View/signup.php?error=" . $error);
    }

    $conPassword = $_REQUEST['confirmPassword'];
    if (empty($conPassword)) {
      $error = "Please confirm password";
      header("Location: ../View/signup.php?error=" . $error);
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
    $sql = "SELECT * FROM " . $tableName . "WHERE Username='" . $userName . "' OR Email='" . $email . "';";
    $result = $conn->query($sql);

    if ($result->num_rows >= 1) {

      $error = "User or email already exists!";
      header("Location: ../View/signup.php?error=" . $error);

    } else if ($userPassword != $conPassword) {

      $error = "Passwords do not match!";
      header("Location: ../View/signup.php?error=" . $error);

    } else {

      $hashedPassword = password_hash($userPassword, PASSWORD_DEFAULT);

      $insertSql = "INSERT INTO " . $tableName . " (Email, Username, password) VALUES ('" . $email . "', '" . $userName . "', '" . $hashedPassword . "');";
      $insertResult = $conn->query($insertSql);

      if ($insertResult != 1) {
        $error = "Something went wrong please try again";
        header("Location: ../View/signup.php?error=" . $error);
      }

      $conn->close();

      session_start();
      $_SESSION['Username'] = $userName;

      header("Location: ../View/home.php");
    };
}
?>
