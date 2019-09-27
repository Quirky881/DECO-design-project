<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // collect value of input field
    $email = $_REQUEST['email'];
    if (empty($email)) {
        echo "Email is empty";
    }

    $userPassword = $_REQUEST['password'];
    if (empty($userPassword)) {
        echo "Password is empty";
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
    $sql = "SELECT username, password FROM " . $tableName;
    $result = $conn->query($sql);

    if ($result->num_rows == 1) {

      $hashedPassword = password_hash($userPassword, PASSWORD_DEFAULT);

      $row = $result->fetch_assoc();

      $dbPassword = $row["password"];

      if (password_verify($dbPassword, $hashedPassword)) {
        $_SESSION['Username'] = $email;

        header("Location: ../View/home.php");
      };

    } else {
        echo "<p>User not found!<p>";
    }

    $conn->close();
}
?>
