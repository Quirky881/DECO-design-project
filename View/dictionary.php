<!doctype html>
<html>
  <?php include("header.php"); ?>

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

    form {
      width:30%;
      margin-left:35%;
      margin-right:35%;
      background-color:white;
      font-size:0.9em;
    }

    /*modified from w3schools example*/
    input[type=text], select {
      width: 100%;
      padding: 3px 5px;
      margin: 2px 0;
      display: inline-block;
      border: 1px solid #ccc;
      border-radius: 1px;
      box-sizing: border-box;
      background-image: none;
      text-align:left;

    }
    input[type=submit] {
      width: 50%;
      background-color: #4CAF50;
      color: white;
      padding: 4.5px 5px;
      margin: 2px 0;
      border: none;
      border-radius: 150px;
      cursor: pointer;
      box-shadow: 0 4.5px #999;
    }

    input[type=submit]:hover {
      background-color: #45a049;
    }
    input[type=submit]:active {
      background-color: #3e8e41;
      box-shadow: 0 5px #666;
      transform: translateY(4px);
    }
  </style>

  <?php
  error_reporting(E_ALL ^ E_NOTICE);
  // Get filter form value from URL
  $filter = "";
  $filter2 = "";
  $filter3 = "";
  if(isset($_GET['Language']) && $_GET['Language'] != "") {
    $filter = $_GET['Language'];
  }
  if(isset($_GET['Meaning']) && $_GET['Meaning'] != "") {
    $filter2 = $_GET['Meaning'];
  }
  if(isset($_GET['Word']) && $_GET['Word'] != "") {
    $filter3 = $_GET['Word'];
  }
  $output = "";
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
    $sql = "SELECT word, english_meaning, language, pronounced FROM Words WHERE language ="."'".$filter."'";
  } else  {
    $sql = "SELECT word, english_meaning, pronounced, language FROM Words";
  }
  //echo $sql."<br>";
  $result = $conn->query($sql);
  $count = $result->num_rows;
  if ($result->num_rows > 0) {
    // output data of each row
    $output .= "<div><table class = 'fixed_header'><thead><tr><th>Word</th><th>Meaning</th><th>Language</th><th>Pronounced</th><th>Audio</th></tr></thead><tbody>";
    while($row = $result->fetch_assoc()) {
      $output .= "<tr><td>" . $row["word"]. "</td><td>" . $row["english_meaning"]."</td>"."<td>" . $row["language"]."</td>"."</td><td>" . $row["pronounced"]."<td>Unavailable</td></tr>";
    }
    $output .= "</tbody></table></div>";
  } else {
    $output .= "0 results";
    }
  $conn->close();
  ?>
  <form id="filter" method="get">
    <p style = "width:100%;background-color:black;color:white;font-size:1.1em;margin-bottom:0;">SEARCH</p>
    <p>
      Language:
      <input id="filter-text" name="Language" type="text"
        placeholder="Filter by Language" value="<?php echo $filter?>">
      <br>
      English Meaning:
      <input id="filter-text" name="Meaning" type="text"
        placeholder="Filter by Meaning" value="<?php echo $filter2?>">
      <br>
      Word:
      <input id="filter-text" name="Word" type="text"
        placeholder="Filter for Word" value="<?php echo $filter3?>">

      <input type="submit" value="Submit">
    </p>
  </form>
  <?php echo $output; ?>


  <?php include("footer.php"); ?>
</html>
