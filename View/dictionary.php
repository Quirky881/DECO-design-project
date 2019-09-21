<!doctype html>
<html>
  <?php include("header.php"); ?>
  
  <form id="filter" method="get">
    <p>
      <input id="filter-text" name="title" type="text"
        placeholder="Filter by Title" value="">
      <em>(Case-sensitive)</em>
    </p>
    <p id="filter-count">
      <strong><?php echo $count; ?></strong> records displayed.
    </p>
  </form>

  <?php
  error_reporting(E_ALL ^ E_NOTICE);
  // Get filter form value from URL
  $filter = "";
  if(isset($_GET['title']) && $_GET['title'] != "") {
    $filter = $_GET['title'];
  }

  $count = 0;

  //database stuff
  $servername = "localhost";
  $username = "root";
  $password = "root";
  $dbname = "deco7180_project";

  // Create connection
  $conn = new mysqli($servername, $username, $password, $dbname);

  // Check connection
  if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
  }
  echo "Connected successfully"."<br>";

  if($filter) {
    $sql = "SELECT word, english_meaning FROM Words WHERE language =".$filter;
  } else  {
    $sql = "SELECT word, english_meaning FROM Words";
  }
  $result = $conn->query($sql);
  $count = $result->num_rows;
  if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
      echo "Word: " . $row["word"]. " - Meaning: " . $row["english_meaning"]."<br>";
    }
  } else {
      echo "0 results";
    }
  $conn->close();
  ?>

  

  <?php include("footer.php"); ?>
</html>
