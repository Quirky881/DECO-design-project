<!doctype html>
<html>
  <?php include("header.php"); ?>
  <form id="filter" method="get">
    <p>
      <input id="filter-text" name="Language" type="text"
        placeholder="Filter by Language" value="">
      <em style = " background: white">(Case-sensitive) use Yugara, Yugarabul, Yugambeh or Turubul</em>
    </p>
  </form>

  <style>
    .fixed_header{
      width:70%; 
      margin-left:15%; 
      margin-right:15%;
      table-layout: auto;
      border-collapse: collapse;
    }

    .fixed_header tbody{
      display:block;
      width: 100%;
      overflow: auto;
      height: 500px;  
    }

    .fixed_header thead tr {
      display: block;
    }

    .fixed_header thead {
      background: black;
      color:#fff;
    }
    .fixed_header tbody {
      background: white;
      color:black;
      background-image:none;
    }

    .fixed_header th, .fixed_header td {
      text-align: left;
      width: 300px;
    }

  </style>

  <?php
  error_reporting(E_ALL ^ E_NOTICE);
  // Get filter form value from URL
  $filter = "";
  if(isset($_GET['Language']) && $_GET['Language'] != "") {
    $filter = $_GET['Language'];
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
  //echo "Connected successfully"."<br>";

  if($filter) {
    $sql = "SELECT word, english_meaning, language FROM Words WHERE language ="."'".$filter."'";
  } else  {
    $sql = "SELECT word, english_meaning, language FROM Words";
  }
  //echo $sql."<br>";
  $result = $conn->query($sql);
  $count = $result->num_rows;
  if ($result->num_rows > 0) {
    // output data of each row
    echo "<div><table class = 'fixed_header' ,style = 'width:90%;text-align: center;align = 'center';><thead><tr><th>Word</th><th>Meaning</th><th>Language</th></tr></thead><tbody>";
    while($row = $result->fetch_assoc()) {
      echo "<tr><td>" . $row["word"]. "</td><td>" . $row["english_meaning"]."</td>"."<td>" . $row["language"]."</td></tr>";
    }
    echo "</tbody></table></div>";
  } else {
      echo "0 results";
    }
  $conn->close();
  ?>

  

  <?php include("footer.php"); ?>
</html>
