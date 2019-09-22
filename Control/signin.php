<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // collect value of input field
    $email = $_REQUEST['email'];
    if (empty($email)) {
        echo "Email is empty";
    }

    $password = $_REQUEST['password'];
    if (empty($password)) {
        echo "Password is empty";
    }

    $servername = "localhost";
    $username = "root";
    $password = "root";
    $dbname = "users";

    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);

    // if ($conn->connect_error) {
    //   die("Connection failed: " . $conn->connect_error);
    // }

    // $sql = "SELECT id, email password FROM users";
    // $result = $conn->query($sql);

    // if ($result->num_rows == 1) {
    //   // output data of each row
    //   while($row = $result->fetch_assoc()) {
    //       echo "<br> id: ". $row["id"]. " - email: ". $row["email"]. " " . $row["password"] . "<br>";
    //   }

      $hashed_password = password_hash($password, PASSWORD_DEFAULT);

      if (password_verify($password, $hashed_password)) {
        $_SESSION['Username'] = $email;

        header("Location: ../View/home.php");
      };

    // } else {
    //     echo "0 results";
    // }

    $conn->close();
}
?>
