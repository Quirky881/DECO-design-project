<!doctype html>
<html>
  <?php include("header.php"); ?>

  <?php
  //variables needed later
  $divOne = '#divCountries';
  $divTwo = '#divCities';
  $liOne = '#countries';
  $liTwo = '#cities';

  //database stuff
  $servername = "localhost";
  $username = "root";
  $password = "root";
  $dbname = "deco7180_project";
  $output = "";
  $languages = "('Yugara', 'Yugarabul')";
  $subjects = array('Kangaroo','Koala','Shark');

  // Create connection
  $conn = new mysqli($servername, $username, $password, $dbname);

  // Check connection
  if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
  }
  echo "Connected successfully"."<br>";

  
  $sql = "SELECT word, english_meaning FROM Words WHERE language IN " . $languages . "AND english_meaning IN ('" . $subjects[0] . "','" . $subjects[1] . "','" .$subjects[2] . "')";
 
  echo $sql."<br>";
  $result = $conn->query($sql);
  if ($result->num_rows > 0) {
    // output data of each row
    $output.= "<div style='text-align:center;'><table style = 'width:90%;text-align: center;'><tr><th>Word</th><th>Meaning</th></tr>";
    while($row = $result->fetch_assoc()) {
      $output.= "<tr><td>" . $row["word"]. "</td><td>" . $row["english_meaning"]."</td></tr>";
    }
    $output.= "</table></div>";
  } else {
      echo "eooro 0 results";
    }
  $conn->close();
  ?>

  <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
  <script type="text/javascript">
        var divOne = '<?php echo $divOne?>'
        var divTwo = '<?php echo $divTwo?>'
        var liOne = '<?php echo $liOne?>'
        var liTwo = '<?php echo $liTwo?>'

        $(document).ready(function () {
            $('#source li').draggable({
                helper: 'clone',
                revert: 'invalid'
            });

            $(divOne).droppable({
                accept: 'li[data-value="country"]',
                drop: function (event, ui) {
                    $(liOne).append(ui.draggable);
                }
            });

            $(divTwo).droppable({
                accept: 'li[data-value="city"]',
                drop: function (event, ui) {
                    $(liTwo).append(ui.draggable);
                }
            });
        });
    </script>
    <style>
        .divClass {
            border: 3px solid black;
            font-size: 25px;
            background-color: lightgray;
            width: 250px;
            padding: 5px;
            display: inline-table;
        }

        li {
            font-size: 20px;
        }
    </style>
  <body style="font-family: Arial">
    <form id="form1" runat="server">
        <div class="divClass">
            wordlist
                <ul id="source">
                  <?php echo "<li data-value='country'>USA</li>";?>
                    <li data-value="country">India</li>
                    <li data-value="country">UK</li>
                    <li data-value="city">New York</li>
                    <li data-value="city">Chennai</li>
                    <li data-value="city">London</li>
                </ul>
        </div>

        <div class="divClass" id="divCountries">
            Countries
            <ul id="countries"></ul>
        </div>

        <div class="divClass" id="divCities">
            Cities
            <ul id="cities"></ul>
        </div>
    </form>
  <?php echo $output; ?>
  <?php include("footer.php"); ?>
</html>
